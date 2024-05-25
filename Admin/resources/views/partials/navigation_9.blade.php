<div class="nk-sidebar nk-sidebar-fixed is-light" data-content="sidebarMenuGloabl">
  <div class="nk-sidebar-element nk-sidebar-head">
    <div class="nk-sidebar-brand">
        @persist('navKeepLoadingLodsadading2')
        <a wire:navigate.hover href="/admin" class="logo-link nk-sidebar-logo">
            <img class="logo-light logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                alt="logo" />
            <img class="logo-dark logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                alt="logo-dark" />
        </a>
        @endpersist
    </div>
    <div class="nk-menu-trigger me-n2">
      @persist('nav33d33KedepdLoading6')
      <a href="javascript:void(0);" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenuGloabl">
        <em class="icon ni ni-arrow-left"></em>
      </a>
      @endpersist
    </div>
  </div>
  <div class="nk-sidebar-element">
    <div class="nk-sidebar-content">
      <div class="nk-sidebar-menu" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: -16px 0px -40px;">
          <div class="simplebar-height-auto-observer-wrapper">
            <div class="simplebar-height-auto-observer"></div>
          </div>
          <div class="simplebar-mask">
            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
              <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                <div class="simplebar-content" style="padding: 16px 0px 40px;">
                @include('admin::partials.navLink')
                </div>
              </div>
            </div>
          </div>
          <div class="simplebar-placeholder" style="width: auto; height: 1750px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
          <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
          <div class="simplebar-scrollbar" style="height: 387px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
        </div>
      </div>
    </div>
  </div>
</div>