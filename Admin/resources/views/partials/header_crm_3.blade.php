<div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ms-n1">
                @persist('navKeepLoading3')
                <a href="javascript:void(0);" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenuGlobal">
                    <em class="icon ni ni-menu"></em>
                </a>
                @endpersist
            </div>
            <div class="nk-header-app-name">
                <div class="nk-header-app-logo">
                    @persist('navdsdssKeepLoadingLoading2')
                    <a wire:navigate.hover href="/admin" class="logo-link">
                        <img class="logo-light logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                            alt="logo" />
                        <img class="logo-dark logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                            alt="logo-dark" />
                    </a>
                    @endpersist
                </div>
                <div class="nk-header-app-info">
                    <span class="sub-text">DashLite</span>
                    <span class="lead-text">Dashboard</span>
                </div>
            </div>
            <div class="nk-header-menu is-light">
                <div class="nk-header-menu-inner">
                    <ul class="nk-menu nk-menu-main">
                        <li class="nk-menu-item active current-page">
                            <a href="/demo3/index.html" class="nk-menu-link">
                                <span class="nk-menu-text">Overview</span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="/demo3/components.html" class="nk-menu-link">
                                <span class="nk-menu-text">Components</span>
                            </a>
                        </li>
                        <li class="nk-menu-item has-sub">
                            <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-text">Use-Case Panel</span>
                            </a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item">
                                    <a href="https://dashlite.net/demo2/ecommerce/index.html" class="nk-menu-link">
                                        <span class="nk-menu-text">eCommerce Panel</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="https://dashlite.net/demo3/apps/file-manager.html" class="nk-menu-link">
                                        <span class="nk-menu-text">File Manangement Panel</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="https://dashlite.net/demo4/subscription/index.html" class="nk-menu-link">
                                        <span class="nk-menu-text">Subscription Panel</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="https://dashlite.net/demo5/crypto/index.html" class="nk-menu-link">
                                        <span class="nk-menu-text">Crypto Buy Sell Panel</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="https://dashlite.net/demo6/invest/index.html" class="nk-menu-link">
                                        <span class="nk-menu-text">HYIP Investment Panel</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nk-header-tools py-sm-1 ">
            @include('admin::partials.menuLink')
            </div>
        </div>
    </div>
</div>
<div class="nk-sidebar is-light" data-content="sidebarMenuGlobal">
    <div class="nk-sidebar-inner" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: -24px -28px -32px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content"
                        style="height: auto; overflow: hidden scroll;">
                        <div class="simplebar-content" style="padding: 24px 28px 32px;">
                        @include('admin::partials.navLink')
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 1124px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar"
                style="height: 648px; transform: translate3d(0px, 38px, 0px); display: block;"></div>
        </div>
    </div>
    @include('admin::partials.darkLightMode')
</div>