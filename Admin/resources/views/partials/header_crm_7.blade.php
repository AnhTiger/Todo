<div class="nk-header nk-header-fixed nk-header-fluid">
  <div class="container-fluid">
    <div class="nk-header-wrap">
      <div class="nk-menu-trigger d-xl-none ms-n1">
        @persist('navKeepLoading7')
        <a href="javascript:void(0);" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenuGloabl">
          <em class="icon ni ni-menu"></em>
        </a>
        @endpersist
      </div>
      <div class="nk-header-brand d-xl-none">
        @persist('navKeespLoadinsdsdgLoading2')
        <a wire:navigate.hover href="/admin" class="logo-link">
            <img class="logo-light logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                alt="logo" />
            <img class="logo-dark logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                alt="logo-dark" />
        </a>
        @endpersist
      </div>
      <div class="nk-header-search ms-3 ms-xl-0 d-none d-md-flex">
        <em class="icon ni ni-search"></em>
        <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search anything">
      </div>
      <div class="nk-header-tools py-sm-1 ">
      @include('admin::partials.menuLink')
      </div>
    </div>
  </div>
  @include('admin::partials.darkLightMode')
</div>