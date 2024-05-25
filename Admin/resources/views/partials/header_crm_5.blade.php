<div class="nk-header nk-header-fixed is-light">
  <div class="container-fluid">
    <div class="nk-header-wrap">
      <div class="nk-menu-trigger d-xl-none ms-n1">
        @persist('navKeepLoading4')
        <a href="javascript:void(0);" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenuGloabl">
          <em class="icon ni ni-menu"></em>
        </a>
        @endpersist
      </div>
      <div class="nk-header-brand d-xl-none">
        @persist('navKeepLoafdingLoadingsadas2')
        <a wire:navigate.hover href="/admin" class="logo-link">
            <img class="logo-light logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                alt="logo" />
            <img class="logo-dark logo-img" src="{{ get_image_url(get_setting('site_logo')) }}" alt="logo-dark" />
        </a>
        @endpersist
      </div>
      <div class="nk-header-news d-none d-xl-block">
        <div class="nk-news-list">
          <a class="nk-news-item" href="javascript:void(0);">
            <div class="nk-news-icon">
              <em class="icon ni ni-card-view"></em>
            </div>
            <div class="nk-news-text">
            <p>created by Pham Tuan Anh with DashLite reference</p>
              <em class="icon ni ni-external"></em>
            </div>
          </a>
        </div>
      </div>
      <div class="nk-header-tools py-sm-1">
      @include('admin::partials.menuLink')
      </div>
    </div>
  </div>
  @include('admin::partials.darkLightMode')
</div>