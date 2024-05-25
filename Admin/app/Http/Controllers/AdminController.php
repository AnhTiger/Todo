<?php

namespace Modules\Admin\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Cache;
use App\Events\PresenceAction;
class AdminController extends Controller {

	public function __construct() {}

	/**
	 * Display a listing of the resource.
	 */
	public function index() {

		$messenger = newClass();
		$messenger->id = 13;
		$messenger->title = "Test";
		$messenger->classify = "create";
		$messenger->message = "Test";
		$messenger->from = "Test";
		$messenger->to = "Test";
		$messenger->document = "Test";
		$messenger->image = "Test";
		// event(new \App\Events\Project\ProjectCreate($messenger));
		return view('admin::index');
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create() {
		return view('admin::create');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request): RedirectResponse {
		//
	}

	/**
	 * Show the specified resource.
	 */
	public function show($id) {
		return view('admin::show');
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit($id) {
		return view('admin::edit');
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, $id): RedirectResponse {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy($id) {
		//
	}

	public function login() {
        if(empty(Session()->get('applocale'))){
            Session::put('applocale', config('app.fallback_locale'));
        }
		if (Cookie::get('user_by_cookie') !=null){

			session()->flash('success', __(Cookie::get('user_by_cookie')));
		}		
		return view('admin::pages.login');
	}

	public function logout() {
		$id = Auth::guard('admin')->user()->id;
		Session::flush();
		Cache::forget('userIsOnline_'.$id);
		Auth::guard('admin')->logout();
        return redirect('../admin/login');
	}

	public function userProfileSetting() {
		return view('admin::pages.profile-setting');
	}
	public function settingGeneral()
    {
        return view('admin::pages.settings-general');
    }
    public function markNotification(Request $request)
    {
        if($request->input('id') == "xxxxx"){
            $update = auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id_int','!=','');
            })
            ->markAsRead();
            return $update;
        }elseif($request->input('id') == "deleteall"){
            $ok =  Notification::whereNotNull('id_int')->delete();
            return $ok;
        }else{
            $update = auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id_int', $request->input('id'));
            })
            ->markAsRead();
            return $request->input('id');
        }

    }
    public function darkMode(Request $request)
    {
		$value =  $request->get('value');

		if($value == 1){
			return  updateLoadingSetting("style_light_dark",0);
        }elseif($value == 0){
			return  updateLoadingSetting("style_light_dark",2);
        }elseif($value == 2){
            return updateLoadingSetting("style_light_dark",1);
        }
		return $value;
    }
}
