<div class="nk-header nk-header-fixed is-light">
  <div class="container-xl wide-xl">
    <div class="nk-header-wrap">
      <div class="nk-menu-trigger d-xl-none ms-n1 me-3">
        @persist('navKeepLoading9')
        <a href="javascript:void(0);" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenuGloabl">
          <em class="icon ni ni-menu"></em>
        </a>
        @endpersist
      </div>
      <div class="nk-header-brand d-xl-none">
        @persist('navKeepLoadidngLoasadsafding2')
        <a wire:navigate.hover href="/admin" class="logo-link">
            <img class="logo-light logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                alt="logo" />
            <img class="logo-dark logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                alt="logo-dark" />
        </a>
        @endpersist
      </div>
      <div class="nk-header-menu is-light">
        <div class="nk-header-menu-inner">
          <ul class="nk-menu nk-menu-main">
            <li class="nk-menu-item has-sub">
              <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                <span class="nk-menu-text">Dashboards</span>
              </a>
              <ul class="nk-menu-sub">
                <li class="nk-menu-item">
                  <a href="/demo9/index.html" class="nk-menu-link">
                    <span class="nk-menu-text">Default Dashboard</span>
                  </a>
                </li>
                <li class="nk-menu-item">
                  <a href="/demo9/index-sales.html" class="nk-menu-link">
                    <span class="nk-menu-text">Sales Dashboard</span>
                  </a>
                </li>
                <li class="nk-menu-item">
                  <a href="/demo9/index-invest.html" class="nk-menu-link">
                    <span class="nk-menu-text">Invest Dashboard</span>
                  </a>
                </li>
                <li class="nk-menu-item">
                  <a href="/demo9/index-crypto.html" class="nk-menu-link">
                    <span class="nk-menu-text">Crypto Dashboard</span>
                  </a>
                </li>
                <li class="nk-menu-item">
                  <a href="/demo9/index-analytics.html" class="nk-menu-link">
                    <span class="nk-menu-text">Analytics Dashboard</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nk-menu-item has-sub">
              <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                <span class="nk-menu-text">Apps</span>
              </a>
              <ul class="nk-menu-sub">
                <li class="nk-menu-item">
                  <a href="/demo9/apps-messages.html" class="nk-menu-link">
                    <span class="nk-menu-text">Messages</span>
                  </a>
                </li>
                <li class="nk-menu-item">
                  <a href="/demo9/apps-inbox.html" class="nk-menu-link">
                    <span class="nk-menu-text">Inbox / Mail</span>
                  </a>
                </li>
                <li class="nk-menu-item">
                  <a href="/demo9/apps-file-manager.html" class="nk-menu-link">
                    <span class="nk-menu-text">File Manager</span>
                  </a>
                </li>
                <li class="nk-menu-item">
                  <a href="/demo9/apps-chats.html" class="nk-menu-link">
                    <span class="nk-menu-text">Chats / Messenger</span>
                  </a>
                </li>
                <li class="nk-menu-item">
                  <a href="/demo9/apps-calendar.html" class="nk-menu-link">
                    <span class="nk-menu-text">Calendar</span>
                  </a>
                </li>
                <li class="nk-menu-item">
                  <a href="/demo9/apps-kanban.html" class="nk-menu-link">
                    <span class="nk-menu-text">Kanban Board</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nk-menu-item">
              <a href="/demo9/components.html" class="nk-menu-link">
                <span class="nk-menu-text">Components</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
        <div class="nk-header-tools py-sm-1">
        @include('admin::partials.menuLink')
        </div>
    </div>
  </div>
  @include('admin::partials.darkLightMode')
</div>