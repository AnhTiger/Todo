<div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-toggle-body="true" data-content="userAsideGlobalProfileChange" data-toggle-screen="lg" data-toggle-overlay="true">
    <div class="card-inner-group" data-simplebar>
        <div class="card-inner">
            <div class="user-card">
                <div class="user-avatar">
                    <img class="user-avatar img-avatar" alt = "{{$userInfoGlobal->name}}_Avatar" src="{!!checkExistLogo($userInfoGlobal->profile_photo_path)!!}"></img> 
                    @if(checkUserOnline($userInfoGlobal)== 1)
                    <div class="status dot dot-lg dot-success"></div>
                    @elseif(checkUserOnline($userInfoGlobal)== 0)
                    <div class="status dot dot-lg dot-danger"></div>
                    @endif
                </div>
                <div class="user-info">
                    <span class="lead-text">{{ $userInfoGlobal->name }}</span>
                    <span class="sub-text">{{ $userInfoGlobal->email }}</span>
                </div>
                <div class="user-action">
                    <div class="dropdown">
                        <a class="btn btn-icon btn-trigger me-n2" data-bs-toggle="dropdown" href="javascript:void(0);"><em class="icon ni ni-more-v"></em></a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <ul class="link-list-opt no-bdr">
                                <li><a href="javascript:void(0);" onclick="Livewire.dispatch('loadinggalleryProfileGloabl',{code:'{!!$userInfoGlobal->code!!}',path : 'profile_photo_path'  }),$('#loadinggalleryProfileGloabl').modal('show')" ><em class="icon ni ni-camera-fill"></em><span>{{ __('setting.Change Photo') }}</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- .user-card -->
        </div><!-- .card-inner -->
        <div class="card-inner p-0">
            <ul class="link-list-menu">
                {{--<li><a @if(request()->routeIs('admin.settings_general')) class="active" @endif href="{{ route('admin.settings_general') }}"><em class="icon ni ni-setting"></em><span>{{ __('setting.General') }}</span></a></li>--}}
                <li><a @if(request()->routeIs('admin.settings_general')) class="active" @endif href="{{ route('admin.settings_general') }}"><em class="icon ni ni-setting"></em><span>{{ __('setting.General') }}</span></a></li>
                <li><a wire:navigate.hover @if(request()->routeIs('admin.user_profile_setting')) class="active" @endif href="{{ route('admin.user_profile_setting') }}"><em class="icon ni ni-user-fill-c"></em><span>{{ __('setting.Personal Information') }}</span></a></li>
                <li><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#user-change-password"><em class="icon ni ni-shield-star-fill"></em><span>{{ __('setting.Change Password') }}</span></a></li>
                <li><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#two-factor-authentication"><em class="icon ni ni-shield-star-fill"></em><span>{{ __('setting.Two Factor Authentication') }}</span></a></li>
                <li><a data-bs-toggle="modal" onclick="Livewire.dispatch('loadingActivityProfileGlobal')" data-bs-target="#user_activity_setting"><em class="icon ni ni-activity-alt"></em><span>{{ __('Account Activity') }}</span></a></li>
                <li><a data-bs-toggle="modal"  onclick="Livewire.dispatch('loadingNotificationProfileGlobal')"  data-bs-target="#user_notification_setting"><em class="icon ni ni-bell-fill"></em><span>{{ __('Notifications') }}</span></a></li>
            </ul>
        </div><!-- .card-inner -->
    </div><!-- .card-inner-group -->
</div><!-- card-aside -->
<div>
