<div class="nk-header is-light nk-header-fixed">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger me-sm-2 d-lg-none">
                @persist('navKeedpLoading8')
                <a href="javascript:void(0);" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNavGlobal">
                    <em class="icon ni ni-menu"></em>
                </a>
                @endpersist
            </div>
            <div class="nk-header-brand">
                @persist('navKeepLoadidngsadsaLoading2')
                <a wire:navigate.hover href="/admin" class="logo-link">
                    <img class="logo-light logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                        alt="logo" />
                    <img class="logo-dark logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                        alt="logo-dark" />
                </a>
                @endpersist
            </div>
            @persist('nav33d33KedepLoading6')
            <div class="nk-header-menu ms-auto" data-content="headerNavGlobal">
                <div class="nk-header-mobile">
                    <div class="nk-header-brand">
                        <a wire:navigate.hover href="/admin" class="logo-link">
                            <img class="logo-light logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                                alt="logo" />
                            <img class="logo-dark logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                                alt="logo-dark" />
                        </a>
                    </div>
                    <div class="nk-menu-trigger me-n2">
                        <a href="javascript:void(0);" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNavGlobal">
                            <em class="icon ni ni-arrow-left"></em>
                        </a>
                    </div>
                </div>
                @include('admin::partials.navLink_horizontal8')
            </div>
            @endpersist
            <div class="nk-header-tools py-sm-1">
                @include('admin::partials.menuLink')
            </div>
        </div>
    </div>
    @include('admin::partials.darkLightMode')
</div>