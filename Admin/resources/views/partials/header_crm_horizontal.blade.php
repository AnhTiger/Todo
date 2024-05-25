<!-- main header @s -->
<div class="nk-header is-theme">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger me-sm-2 d-lg-none">
                <a href="javascript:void(0);" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em
                        class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand">
                @persist('navKedssadaspLoadfingLodading2')
                <a wire:navigate.hover href="/admin" class="logo-link">
                    <img class="logo-light logo-img" src="{{ get_image_url(get_setting('site_logo')) }}" alt="logo" />
                    <img class="logo-dark logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                        alt="logo-dark" />
                </a>
                @endpersist
            </div>
            <div class="nk-header-menu ms-auto" data-content="headerNav">
                <div class="nk-header-mobile">
                    <div class="nk-header-brand">
                        @persist('navKeeaddfdfsoadingLoading2')
                        <a wire:navigate.hover href="/admin" class="logo-link">
                            <img class="logo-light logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                                alt="logo" />
                            <img class="logo-dark logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                                alt="logo-dark" />
                        </a>
                        @endpersist
                    </div>
                    <div class="nk-menu-trigger me-n2">
                        <a href="javascript:void(0);" class="nk-nav-toggle nk-quick-nav-icon"
                            data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div>
                @include('admin::partials.navigation_horizontal')
            </div>
            <!-- .nk-header-menu -->
            <div class="nk-header-tools pt-0 pb-0">
                <ul class="nk-quick-nav nk-quick-nav-custom">
                    <li class="dropdown chats-dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle nk-quick-nav-icon"
                            data-bs-toggle="dropdown">
                            <div class="icon-status icon-status-na"><em class="icon ni ni-chat"></em></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                            <div class="dropdown-head">
                                <span class="sub-title nk-dropdown-title">Recent Chats</span>
                                <a href="javascript:void(0);">Setting</a>
                            </div>
                            <div class="dropdown-body">
                                <ul class="chat-list">
                                    <li class="chat-item">
                                        <a class="chat-link" href="html/apps-chats.html">
                                            <div class="chat-media user-avatar">
                                                <span>IH</span>
                                                <span class="status dot dot-lg dot-gray"></span>
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name">Iliash Hossain</div>
                                                    <span class="time">Now</span>
                                                </div>
                                                <div class="chat-context">
                                                    <div class="text">You: Please confrim if you got my last messages.
                                                    </div>
                                                    <div class="status delivered">
                                                        <em class="icon ni ni-check-circle-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- .chat-item -->
                                    <li class="chat-item is-unread">
                                        <a class="chat-link" href="html/apps-chats.html">
                                            <div class="chat-media user-avatar bg-pink">
                                                <span>AB</span>
                                                <span class="status dot dot-lg dot-success"></span>
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name">Abu Bin Ishtiyak</div>
                                                    <span class="time">4:49 AM</span>
                                                </div>
                                                <div class="chat-context">
                                                    <div class="text">Hi, I am Ishtiyak, can you help me with this
                                                        problem ?</div>
                                                    <div class="status unread">
                                                        <em class="icon ni ni-bullet-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- .chat-item -->
                                    <li class="chat-item">
                                        <a class="chat-link" href="html/apps-chats.html">
                                            <div class="chat-media user-avatar">
                                                <img src="./images/avatar/b-sm.jpg" alt="" />
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name">George Philips</div>
                                                    <span class="time">6 Apr</span>
                                                </div>
                                                <div class="chat-context">
                                                    <div class="text">Have you seens the claim from Rose?</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- .chat-item -->
                                    <li class="chat-item">
                                        <a class="chat-link" href="html/apps-chats.html">
                                            <div class="chat-media user-avatar user-avatar-multiple">
                                                <div class="user-avatar">
                                                    <img src="./images/avatar/c-sm.jpg" alt="" />
                                                </div>
                                                <div class="user-avatar">
                                                    <span>AB</span>
                                                </div>
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name">Softnio Group</div>
                                                    <span class="time">27 Mar</span>
                                                </div>
                                                <div class="chat-context">
                                                    <div class="text">You: I just bought a new computer but i am having
                                                        some problem</div>
                                                    <div class="status sent">
                                                        <em class="icon ni ni-check-circle"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- .chat-item -->
                                    <li class="chat-item">
                                        <a class="chat-link" href="html/apps-chats.html">
                                            <div class="chat-media user-avatar">
                                                <img src="./images/avatar/a-sm.jpg" alt="" />
                                                <span class="status dot dot-lg dot-success"></span>
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name">Larry Hughes</div>
                                                    <span class="time">3 Apr</span>
                                                </div>
                                                <div class="chat-context">
                                                    <div class="text">Hi Frank! How is you doing?</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- .chat-item -->
                                    <li class="chat-item">
                                        <a class="chat-link" href="html/apps-chats.html">
                                            <div class="chat-media user-avatar bg-purple">
                                                <span>TW</span>
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name">Tammy Wilson</div>
                                                    <span class="time">27 Mar</span>
                                                </div>
                                                <div class="chat-context">
                                                    <div class="text">You: I just bought a new computer but i am having
                                                        some problem</div>
                                                    <div class="status sent">
                                                        <em class="icon ni ni-check-circle"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- .chat-item -->
                                </ul>
                                <!-- .chat-list -->
                            </div>
                            <!-- .nk-dropdown-body -->
                            <div class="dropdown-foot center">
                                <a href="html/apps-chats.html">View All</a>
                            </div>
                        </div>
                    </li>
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
                        <a href="javascript:void(0);" class="dropdown-toggle nk-quick-nav-icon"
                            data-bs-toggle="dropdown">
                            <div class="quick-icon border border-light">
                                <span
                                    class="fi fi-{{ Str::lower(Session()->get('applocale')) }} border_radius bg_conver"></span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                            <ul class="language-list">
                                @foreach($flag_locales as $item)
                                <li>
                                    <a wire:navigate.hover href="{{ route('admin.switch.language', $item) }}"
                                        class="language-item">
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
                                <div class="user-avatar"><span>{{ showLetterFirstEnd($userInfoAdmin->name) }}</span>
                                </div>
                                <div class="user-info d-none d-sm-block ">
                                    <span
                                        class="lead-text">{{ $userInfoAdmin->name ? \Str::limit($userInfoAdmin->name, 20, '...') : 'Administrator' }}
                                    </span>
                                    <span
                                        class="sub-text">{{ $userInfoAdmin->email ? \Str::limit($userInfoAdmin->email, 25, '...') : 'Email' }}</span>
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
                                        <span>{{ showLetterFirstEnd($userInfoAdmin->name) }}</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">{{ $userInfoAdmin->name }}</span>
                                        <span class="sub-text">{{ $userInfoAdmin->email }}</span>
                                    </div>
                                    <div class="user-action">
                                        <a wire:navigate.hover class="btn btn-icon me-n2"
                                            href="{{ route('admin.user_profile_setting') }}"><em
                                                class="icon ni ni-setting"></em></a>
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
                                        <a wire:navigate.hover href="{{ route('admin.logout') }}"><em
                                                class="icon ni ni-signout"></em><span>{{ __('Sign out') }}</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- .dropdown -->
                </ul>
                <!-- .nk-quick-nav -->
            </div>
            <!-- .nk-header-tools -->
        </div>
        <!-- .nk-header-wrap -->
    </div>
    <!-- .container-fliud -->
</div>

<script type="text/javascript">
var checkIcon = {
    !!$loadingSettingGlobal - > style_light_dark!!
};
if (checkIcon == 1) {
    document.getElementById("icon_dark_mode_global").style.display = "none";
    document.getElementById("icon_auto_mode_global").style.display = "none";
    document.getElementById("icon_light_mode_global").style.display = "block";
    $('body').removeClass('dark-mode');

} else if (checkIcon == 0) {
    document.getElementById("icon_light_mode_global").style.display = "none";
    document.getElementById("icon_auto_mode_global").style.display = "none";
    document.getElementById("icon_dark_mode_global").style.display = "block";
    $('body').removeClass('dark-mode');
    $('body').addClass('dark-mode');
} else if (checkIcon == 2) {
    document.getElementById("icon_dark_mode_global").style.display = "none";
    document.getElementById("icon_light_mode_global").style.display = "none";
    document.getElementById("icon_auto_mode_global").style.display = "block";
    $('body').removeClass('dark-mode');
    $('body').addClass('dark-mode');
}

function darkSwitchFunction() {
    var value = $('#lable-check-dark-switch').val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: "{{ route('admin.darkMode') }}",
        data: {
            'value': value
        },
        success: function(data) {
            console.log(data);
        }
    });
    var nowStatus = 0;
    if (value == 1) {
        $('body').removeClass('dark-mode');
        $('body').addClass('dark-mode');
        $("#lable-check-dark-switch").val("0");
        nowStatus = 0;
    } else if (value == 0) {
        $('body').removeClass('dark-mode');
        $("#lable-check-dark-switch").val("2");
        nowStatus = 2;
    } else if (value == 2) {
        $('body').removeClass('dark-mode');
        $("#lable-check-dark-switch").val("1");
        nowStatus = 1;
    }
    if (nowStatus == 1) {
        document.getElementById("icon_dark_mode_global").style.display = "none";
        document.getElementById("icon_auto_mode_global").style.display = "none";
        document.getElementById("icon_light_mode_global").style.display = "block";
    } else if (nowStatus == 0) {
        document.getElementById("icon_light_mode_global").style.display = "none";
        document.getElementById("icon_auto_mode_global").style.display = "none";
        document.getElementById("icon_dark_mode_global").style.display = "block";
    } else if (nowStatus == 2) {
        document.getElementById("icon_dark_mode_global").style.display = "none";
        document.getElementById("icon_light_mode_global").style.display = "none";
        document.getElementById("icon_auto_mode_global").style.display = "block";
    }
}
</script>
<!-- main header @e -->