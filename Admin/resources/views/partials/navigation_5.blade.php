<div class="nk-sidebar nk-sidebar-fixed" data-content="sidebarMenuGloabl">
  <div class="nk-sidebar-element nk-sidebar-head">
    <div class="nk-sidebar-brand">
      @persist('rytierytyrefeytryo')
        <a wire:navigate.hover href="/admin" class="logo-link nk-sidebar-logo">
            <img class="logo-light logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                alt="logo" />
            <img class="logo-dark logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                alt="logo-dark" />
        </a>
        @endpersist
    </div>
    <div class="nk-menu-trigger me-n2">
      @persist('navKeepLoadingLoading5')
      <a href="javascript:void(0);" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenuGloabl">
        <em class="icon ni ni-arrow-left"></em>
      </a>
      @endpersist
    </div>
  </div>
  <div class="nk-sidebar-element">
    <div class="nk-sidebar-body" data-simplebar="init">
      <div class="simplebar-wrapper" style="margin: 0px;">
        <div class="simplebar-height-auto-observer-wrapper">
          <div class="simplebar-height-auto-observer"></div>
        </div>
        <div class="simplebar-mask">
          <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
            <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden scroll;">
              <div class="simplebar-content" style="padding: 0px;">
                <div class="nk-sidebar-content">
                  <div class="nk-sidebar-menu">
                  @include('admin::partials.navLink')
                  </div>
                  <div class="nk-sidebar-footer">
                    <ul class="nk-menu nk-menu-footer">
                      <li class="nk-menu-item">
                        <a href="javascript:void(0);" class="nk-menu-link">
                          <span class="nk-menu-icon">
                            <em class="icon ni ni-help-alt"></em>
                          </span>
                          <span class="nk-menu-text">Support</span>
                        </a>
                      </li>
                      <li class="nk-menu-item ms-auto">
                        <div class="dropup">
                          <a href="javascript:void(0);" class="nk-menu-link dropdown-indicator has-indicator" data-bs-toggle="dropdown" data-offset="0,10">
                            <span class="nk-menu-icon">
                              <em class="icon ni ni-globe"></em>
                            </span>
                            <span class="nk-menu-text">English</span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                            <ul class="language-list">
                              <li>
                                <a href="javascript:void(0);" class="language-item">
                                  <img src="/demo5/images/flags/english.png" alt="" class="language-flag">
                                  <span class="language-name">English</span>
                                </a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="language-item">
                                  <img src="/demo5/images/flags/spanish.png" alt="" class="language-flag">
                                  <span class="language-name">Español</span>
                                </a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="language-item">
                                  <img src="/demo5/images/flags/french.png" alt="" class="language-flag">
                                  <span class="language-name">Français</span>
                                </a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="language-item">
                                  <img src="/demo5/images/flags/turkey.png" alt="" class="language-flag">
                                  <span class="language-name">Türkçe</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="simplebar-placeholder" style="width: auto; height: 1764px;"></div>
      </div>
      <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
      </div>
      <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
        <div class="simplebar-scrollbar" style="height: 1764px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
      </div>
    </div>
  </div>
</div>