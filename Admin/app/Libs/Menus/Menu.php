<?php

namespace Modules\Admin\app\Libs\Menus;

use Illuminate\Support\Facades\Auth;
use Modules\Admin\app\Libs\Menus\Common;

class Menu {

	public static function admin() {

		return [

			[
				"url" => Route("admin.locale.index"),
				"name" => "Quản lý Locales",
				"icon" => "menu-icon tf-icons bx bx-user",
				"slug" => ["locale"],
				"permission" => ['locale-index'],
				'submenu' => [],
			],
			[
				"url" => Route("admin.roles.index"),
				"name" => "Quyền truy cập",
				"icon" => "menu-icon tf-icons bx bx-user",
				"slug" => ["roles"],
				"permission" => ['role-index'],
				'submenu' => [],
			],
			[
				"url" => Route("admin.users.index"),
				"name" => "Quản lý tài khoản",
				"icon" => "menu-icon tf-icons bx bx-user",
				"slug" => ["users"],
				"permission" => ['user-index'],
				'submenu' => [],
			],
			[
				"url" => Route("admin.menus.index"),
				"name" => "Quản lý Menu",
				"icon" => "menu-icon tf-icons bx bx-user",
				"slug" => ["menus"],
				"permission" => ['menu-index'],
				'submenu' => [],
			],		
			[
				"url" => Route("admin.plugins.index"),
				"name" => "Quản lý Plugins",
				"icon" => "menu-icon tf-icons bx bx-user",
				"slug" => ["plugins"],
				"permission" => ['plugins-index'],
				'submenu' => [],
			],				
			[
				"url" => Route("admin.media.index"),
				"name" => "Quản lý Media",
				"icon" => "menu-icon tf-icons bx bx-user",
				"slug" => ["media"],
				"permission" => ['media-index'],
				'submenu' => [],
			],
			[
				"url" => Route("admin.permissions.index"),
				"name" => "Quản lý Permission",
				"icon" => "menu-icon tf-icons bx bx-user",
				"slug" => ["permissions"],
				"permission" => ['permission-index'],
				'submenu' => [],
			],		
			[
				"url" => Route("admin.positions.index"),
				"name" => "Quản lý Position",
				"icon" => "menu-icon tf-icons bx bx-user",
				"slug" => ["positions"],
				"permission" => ['position-index'],
				'submenu' => [],
			],					
			[
				"url" => Route("admin.departments.index"),
				"name" => "Quản lý Department",
				"icon" => "menu-icon tf-icons bx bx-user",
				"slug" => ["departments"],
				"permission" => ['department-index'],
				'submenu' => [],
			],	

	
			[
				"url" => Route("admin.teams.index"),
				"name" => "Team",
				"icon" => "menu-icon tf-icons bx bx-user",
				"slug" => ["teams"],
				"permission" => ['team-index'],
				'submenu' => [],
			],		
			
			[
				"url" => Route("admin.corporations.index"),
				"name" => "corporations",
				"icon" => "menu-icon tf-icons bx bx-user",
				"slug" => ["corporations"],
				"permission" => ['corporation-index'],
				'submenu' => [],
			],				
			[
				"url" => Route("admin.groups.index"),
				"name" => "groups",
				"icon" => "menu-icon tf-icons bx bx-user",
				"slug" => ["groups"],
				"permission" => ['group-index'],
				'submenu' => [],
			],	
			[
				"url" => Route("admin.companies.index"),
				"name" => "companies",
				"icon" => "menu-icon tf-icons bx bx-user",
				"slug" => ["companies"],
				"permission" => ['company-index'],
				'submenu' => [],
			],	
			[
				"url" => Route("admin.options.index"),
				"name" => "options",
				"icon" => "menu-icon tf-icons bx bx-user",
				"slug" => ["options"],
				"permission" => ['option-index'],
				'submenu' => [],
			],			
			[
				"url" => Route("admin.userssetting.index"),
				"name" => "userssetting",
				"icon" => "menu-icon tf-icons bx bx-user",
				"slug" => ["userssetting"],
				"permission" => ['userssetting-index'],
				'submenu' => [],
			],				
			[
				"url" => Route("admin.determinedsetting.index"),
				"name" => "determinedsetting",
				"icon" => "menu-icon tf-icons bx bx-user",
				"slug" => ["determinedsetting"],
				"permission" => ['determinedsetting-index'],
				'submenu' => [],
			],		
			[
				"url" => Route("admin.revenue.index"),
				"name" => "revenue",
				"icon" => "menu-icon tf-icons bx bx-user",
				"slug" => ["revenue"],
				"permission" => ['revenue-index'],
				'submenu' => [],
			],		
			[
				"url" => Route("admin.projects.index"),
				"name" => "projects",
				"icon" => "menu-icon tf-icons bx bx-user",
				"slug" => ["projects"],
				"permission" => ['project-index'],
				'submenu' => [],
			],		
			[
				"url" => Route("admin.tasks.index"),
				"name" => "tasks",
				"icon" => "menu-icon tf-icons bx bx-user",
				"slug" => ["tasks"],
				"permission" => ['task-index'],
				'submenu' => [],
			],	
			[
				"url" => Route("admin.tickets.index"),
				"name" => "tickets",
				"icon" => "menu-icon tf-icons bx bx-user",
				"slug" => ["tickets"],
				"permission" => ['ticket-index'],
				'submenu' => [],
			],		
		];
	}

	public static function render($menus = [], $render = '', $deep = 0) {
		$nodes = \Modules\Menus\app\Models\Menu::all()->toTree();
		$userInfo = Auth::guard('admin')->user();
		foreach ($menus as $menu) {
			$listArrPermission = Common::checkHasPermissionFixMenu($userInfo);

			$arrPermission = Common::arrCompareFixMenu($menu['permission'], $listArrPermission);
			
			if ($arrPermission || $userInfo->hasrole('super-admin')) {
				/*if (in_array(request()->segment(2), $menu['slug'])) {
					                                    $render .= "<li class='nk-menu-item active open'>";
					                                    } else {
					                                    $render .= "<li class='nk-menu-item'>";
				*/
				if (empty($menu['submenu'])) {
					if ($deep == 0) {
						$render .= "<li class='nk-menu-item'>
                        <a href='{$menu['url']}' class='nk-menu-link'><span class='nk-menu-text'>
                        {$menu['name']}
                        </span></a>";
					} else {
						$render .= "<li class='nk-menu-item'>
                        <a href='{$menu['url']}' class='nk-menu-link'><span class='nk-menu-text'>
                        {$menu['name']}
                        </span></a>";
					}
				}else {
					$render .= "<li class='nk-menu-item has-sub'>
                    <a href='{$menu['url']}' class='nk-menu-link'><span class='nk-menu-text'>
                    {$menu['name']}
                    </span></a>";
					$render .= "<ul class='nk-menu-sub'>";
					foreach ($menu['submenu'] as $child) {
						$arrPermissionChild = Common::arrCompareFixMenu($child['permission'], $listArrPermission);
						if ($arrPermissionChild || $userInfo->roles[0]->name == 'super-admin') {
							if (empty($child['submenu'])) {
								$render .= "<li ";
								if (in_array(request()->segment(2), $child['slug'])) {
									$render .= " class='nk-menu-item active'>";
								} else {
									$render .= " class='nk-menu-item'>";
								}
								$render .= "<a href='{$child['url']}' class='nk-menu-link'><span class='nk-menu-text'>";
								$render .= "{$child['name']}
                                </span></a>
                                </li>";
							} else {
								$render .= "<li class='nk-menu-item has-sub'>
                                <a class='nk-menu-link' href='{$child['url']}'><span class='nk-menu-text'>{$child['name']}</span></a>";
								$render .= "<ul class='nk-menu-sub'>";
								$render = self::render($child['submenu'], $render, $deep + 1);
								$render .= "</ul>";
								$render .= "</li>";
							}
						}
					}
					$render .= "</ul>";
				}
				$render .= "</li>";
			}
		}
		return $render;
	}

}
