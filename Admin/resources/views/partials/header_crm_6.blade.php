<div class="nk-header nk-header-fluid is-regular is-theme">
  <div class="container-xl wide-xl">
    <div class="nk-header-wrap">
      <div class="nk-menu-trigger me-sm-2 d-lg-none">
        @persist('navKeepLoading6')
        <a href="javascript:void(0);" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNavGlobal">
          <em class="icon ni ni-menu"></em>
        </a>
        @endpersist
      </div>
      <div class="nk-header-brand">
          @persist('navKeepLoadingLdosdsaading2')
          <a wire:navigate.hover href="/admin" class="logo-link">
              <img class="logo-light logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                  alt="logo" />
              <img class="logo-dark logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                  alt="logo-dark" />
          </a>
          @endpersist
      </div>
      @persist('nav3333KedepLoarrreererdiDng6')
      <div class="nk-header-menu" data-content="headerNavGlobal">
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
        @include('admin::partials.navLink_horizontal6')
      </div>
      @endpersist
      <div class="nk-header-tools py-sm-1">
      @include('admin::partials.menuLink')
      </div>
    </div>
  </div>
  @include('admin::partials.darkLightMode')
</div>