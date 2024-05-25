<?php

namespace Modules\Admin\app\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use JoeDixon\Translation\Drivers\Translation;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Modules\Users\app\Models\User;
use Modules\UserPriority\app\Models\UserPriority;
class AdminServiceProvider extends ServiceProvider {
	protected string $moduleName = 'Admin';

	protected string $moduleNameLower = 'admin';

	protected $translationRepository;

	/**
	 * Boot the application events.
	 */
	public function boot(Translation $translationRepository): void {
		$this->translationRepository = $translationRepository;
		$this->registerCommands();
		$this->registerCommandSchedules();
		$this->registerTranslations();
		$this->registerConfig();
		$this->registerViews();
		$this->loadMigrationsFrom(module_path($this->moduleName, 'database/migrations'));
		$this->navigationHorizontal();
		View::composer('*', function ($view) {		
			$view->with([
				'loadingSettingGlobal' => loadingSetting(),
				'getHostGlobal' => getHost(),
				'userInfoGlobal' => Auth::guard('admin')->user(),
				'flag_locales' => $this->translationRepository->allLanguages(),
			]);
		});
	}

	/**
	 * Register the service provider.
	 */
	public function register(): void {
		$this->app->register(RouteServiceProvider::class);
	}

	/**
	 * Register commands in the format of Command::class
	 */
	protected function registerCommands(): void {
		// $this->commands([]);
	}

	/**
	 * Register command Schedules.
	 */
	protected function registerCommandSchedules(): void {
		// $this->app->booted(function () {
		//     $schedule = $this->app->make(Schedule::class);
		//     $schedule->command('inspire')->hourly();
		// });
	}
	/**
	 * Register translations.
	 */
	public function registerTranslations(): void {
		$langPath = resource_path('lang/modules/' . $this->moduleNameLower);

		if (is_dir($langPath)) {
			$this->loadTranslationsFrom($langPath, $this->moduleNameLower);
			$this->loadJsonTranslationsFrom($langPath);
		} else {
			$this->loadTranslationsFrom(module_path($this->moduleName, 'lang'), $this->moduleNameLower);
			$this->loadJsonTranslationsFrom(module_path($this->moduleName, 'lang'));
		}
	}

	/**
	 * Register config.
	 */
	protected function registerConfig(): void {
		$this->publishes([module_path($this->moduleName, 'config/config.php') => config_path($this->moduleNameLower . '.php')], 'config');
		$this->mergeConfigFrom(module_path($this->moduleName, 'config/config.php'), $this->moduleNameLower);
	}

	/**
	 * Register views.
	 */
	public function registerViews(): void {
		$viewPath = resource_path('views/modules/' . $this->moduleNameLower);
		$sourcePath = module_path($this->moduleName, 'resources/views');

		$this->publishes([$sourcePath => $viewPath], ['views', $this->moduleNameLower . '-module-views']);

		$this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), $this->moduleNameLower);

		$componentNamespace = str_replace('/', '\\', config('modules.namespace') . '\\' . $this->moduleName . '\\' . config('modules.paths.generator.component-class.path'));
		Blade::componentNamespace($componentNamespace, $this->moduleNameLower);
	}

	/**
	 * Get the services provided by the provider.
	 */
	public function provides(): array {
		return [];
	}

	private function getPublishableViewPaths(): array {
		$paths = [];
		foreach (config('view.paths') as $path) {
			if (is_dir($path . '/modules/' . $this->moduleNameLower)) {
				$paths[] = $path . '/modules/' . $this->moduleNameLower;
			}
		}

		return $paths;
	}

	public function navigationHorizontal() {
		view()->composer('admin::layouts.master', function ($view) {
			$userInfoGlobal = \Auth::guard('admin')->user();
			$menuHorizontal = \Modules\Admin\app\Libs\Menus\Menu::admin();
			$loadingSettingMenu = loadingSetting()->style_menu;
			if($loadingSettingMenu){
				$menuMain = \Modules\Menus\app\Models\Menu::all()->toTree()->toArray();
			}else{
				$menuMain = \Modules\Menus\app\Models\Menu::whereNotNull('parent_id')->get()->toArray();
			}

			$listArrMenu = checkHasMenu();
			$listArrPermission = checkHasPermission($userInfoGlobal);


			$order_by_priority_global = "";
			$listUserPriorityGlobal = array();

			$getIDUserPriorityGlobal 			= UserPriority::where('parent_id' ,'=',$userInfoGlobal->id)->where('status' ,'=',1)->select('user_id')->orderBy('priority', 'DESC')->get();
			foreach($getIDUserPriorityGlobal as $value){
				if($value->user_id != null){
					$listUserPriorityGlobal[] = $value->user_id;
					$order_by_priority_global .= '"'.$value->user_id.'",';
				}
			}
			if (substr($order_by_priority_global, -1) == ","){
				$order_by_priority_global =  substr($order_by_priority_global, 0, -1);									
			}	
	
			$array = User::descendantsOf($userInfoGlobal->id)->pluck('id')->toArray();
			$getListUserBelongGlobal = array();
	
			if($order_by_priority_global == ""){
				$getListUserBelongGlobal = User::whereNotNull('name')->where('status', '=','1')->whereIn('id',$array)->get();
			}else{
				$getListUserBelongGlobal = User::whereNotNull('name')->where('status', '=','1')->whereIn('id',$array)->orderByRaw("FIELD(id, $order_by_priority_global ) DESC ")->get();
			}

			$view->with(['menuHorizontal' => $menuHorizontal, 'menuMain' => $menuMain,  'listArrPermission' => $listArrPermission, 'listArrMenu' => $listArrMenu, 'userInfoGlobal' => $userInfoGlobal, 'getListUserBelongGlobal' => $getListUserBelongGlobal, 'listUserPriorityGlobal' => $listUserPriorityGlobal, 'getIDUserPriorityGlobal' => $getIDUserPriorityGlobal, 'order_by_priority_global' => $order_by_priority_global]);
		});
	}
}
  