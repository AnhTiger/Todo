<ul class="nk-quick-nav nk-quick-nav-custom">
    @persist('456rg4654er68t44ert5')
    @include('admin::partials.timerCountDown')
    @endpersist
    @persist('5646546476874874e54r4d1s632f143652')
    @include('admin::partials.chart')
    @endpersist
    @persist('987987rew546r545ew45r')
    @include('admin::partials.notification')
    @endpersist
    <li class="dropdown chats-dropdown">
        <input id="lable-check-dark-switch" value="{!!$loadingSettingGlobal->style_light_dark!!}"
            style="display: none;"></input>
        <a href="javascript:void(0);" class="nk-quick-nav-icon" onclick="darkSwitchFunction()">
            <div class="icon-status icon-status-na" id="icon_dark_mode_global">
                {!!$loadingSettingGlobal->icon_dark_mode!!}
            </div>
            <div class="icon-status icon-status-na" id="icon_light_mode_global">
                {!!$loadingSettingGlobal->icon_light_mode!!}
            </div>
            <div class="icon-status icon-status-na" id="icon_auto_mode_global">
                {!!$loadingSettingGlobal->icon_auto_mode!!}
            </div>
        </a>
    </li>
    @if(checkHasModuleActive('Translations'))
    <li class="dropdown language-dropdown">
        <a href="javascript:void(0);" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
            <div class="quick-icon border border-light">
                <span class="fi fi-{{ Str::lower(Session()->get($getHostGlobal.'_applocale')) }} border_radius bg_conver"></span>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
            <ul class="language-list">
                @foreach($flag_locales as $key=> $item)
                <li>
                    <a wire:navigate.hover href="{{ route('admin.switch.language', $item) }}" class="language-item"
                        wire:key="6565465547789gh654j65{!!$key!!}">
                        <span class="fi fi-{{ Str::lower($item) }} language-flag"></span>
                        <span class="language-name">{{ Str::upper($item) }}</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </li><!-- .dropdown -->
    @endif
    <li class="dropdown user-dropdown ">
        <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown">
            <div class="user-card user-toggle">
                <div class="user-avatar">
                    <img class="user-avatar img-avatar" alt="{{$userInfoGlobal->name}}_Avatar_Global"
                        src="{!!checkExistLogo($userInfoGlobal->profile_photo_path)!!}"></img>
                </div>
                <div class="user-info d-none d-sm-block ">
                    <span
                        class="lead-text">{{ $userInfoGlobal->name ? \Str::limit($userInfoGlobal->name, 20, '...') : 'Administrator' }}
                    </span>
                    <span
                        class="sub-text">{{ $userInfoGlobal->email ? \Str::limit($userInfoGlobal->email, 25, '...') : 'Email' }}</span>
                </div>
                <div class="user-action">
                    <span class="btn btn-icon me-n2 txt_arrow_header"><em
                            class="icon ni ni ni-sort-down-fill"></em></span>
                </div>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1 is-light ">
            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                <div class="user-card">
                    <div class="user-avatar">
                        <img class="user-avatar img-avatar" alt="{{$userInfoGlobal->name}}_Avatar_Global"
                        src="{!!checkExistLogo($userInfoGlobal->profile_photo_path)!!}"></img>
                    </div>
                    <div class="user-info">
                        <span class="lead-text">{{ $userInfoGlobal->name }}</span>
                        <span class="sub-text">{{ $userInfoGlobal->email }}</span>
                    </div>
                    <div class="user-action">
                        <a wire:navigate.hover class="btn btn-icon me-n2"
                            href="{{ route('admin.user_profile_setting') }}"><em class="icon ni ni-setting"></em></a>
                    </div>
                </div>
            </div>
            <div class="dropdown-inner user-account-info">
                <h6 class="overline-title-alt">Account Balance</h6>
                <div class="user-balance">1,494.23 <small class="currency currency-usd">USD</small>
                </div>
                <div class="user-balance-sub">
                    Locked <span>15,495.39 <span class="currency currency-usd">USD</span></span>
                </div>
                <a href="javascript:void(0);" class="link"><span>Withdraw Balance</span> <em
                        class="icon ni ni-wallet-out"></em></a>
            </div>
            <div class="dropdown-inner">
                <ul class="link-list">
                    <li>
                        <a wire:navigate.hover href="{{ route('admin.user_profile_setting') }}"><em
                                class="icon ni ni-setting-alt"></em><span>{{ __('Account Setting') }}</span></a>
                    </li>
                    <li>
                        <a wire:navigate.hover href="{{ route('admin.user_profile_setting') }}"><em
                                class="icon ni ni-activity-alt"></em><span>{{ __('Account Activity') }}</span></a>
                    </li>
                    <li>
                        <a wire:navigate.hover href="{{ route('admin.user_profile_setting') }}"><em
                                class="icon ni ni-bell-fill"></em><span>{{ __('Notifications') }}</span></a>
                    </li>
                </ul>
            </div>
            <div class="dropdown-inner">
                <ul class="link-list">
                    <li>
                        <a href="{{ route('admin.logout') }}"><em
                                class="icon ni ni-signout"></em><span>{{ __('Sign out') }}</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </li>
    <li class="d-lg-none">
        @persist('MenuKeepLoadingLoading4')
        <a href="javascript:void(0);" class="toggle nk-quick-nav-icon me-n1" data-target="sideNavGlobal"><em
                class="icon ni ni-menu"></em></a>
        @endpersist
    </li>
</ul>