<div class="nk-header is-light nk-header-fixed">
  <div class="container-lg wide-xl">
    <div class="nk-header-wrap">
      <div class="nk-header-brand">
          @persist('navKeepLoadsfddfsdingLoading2')
          <a wire:navigate.hover href="/admin" class="logo-link">
              <img class="logo-light logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                  alt="logo" />
              <img class="logo-dark logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                  alt="logo-dark" />
          </a>
          @endpersist
      </div>
      <div class="nk-header-menu">
        <ul class="nk-menu nk-menu-main">
          <li class="nk-menu-item">
            <a href="/demo4/index.html" class="nk-menu-link">
              <span class="nk-menu-text">Overview</span>
            </a>
          </li>
          <li class="nk-menu-item has-sub">
            <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
              <span class="nk-menu-text">Apps</span>
            </a>
            <ul class="nk-menu-sub">
              <li class="nk-menu-item">
                <a href="/demo4/apps-messages.html" class="nk-menu-link">
                  <span class="nk-menu-text">Messages</span>
                </a>
              </li>
              <li class="nk-menu-item">
                <a href="/demo4/apps-inbox.html" class="nk-menu-link">
                  <span class="nk-menu-text">Inbox / Mail</span>
                </a>
              </li>
              <li class="nk-menu-item">
                <a href="/demo4/apps-file-manager.html" class="nk-menu-link">
                  <span class="nk-menu-text">File Manager</span>
                </a>
              </li>
              <li class="nk-menu-item">
                <a href="/demo4/apps-chats.html" class="nk-menu-link">
                  <span class="nk-menu-text">Chats / Messenger</span>
                </a>
              </li>
              <li class="nk-menu-item">
                <a href="/demo4/apps-calendar.html" class="nk-menu-link">
                  <span class="nk-menu-text">Calendar</span>
                </a>
              </li>
              <li class="nk-menu-item">
                <a href="/demo4/apps-kanban.html" class="nk-menu-link">
                  <span class="nk-menu-text">Kanban Board</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="nk-menu-item">
            <a href="/demo4/components.html" class="nk-menu-link">
              <span class="nk-menu-text">Components</span>
            </a>
          </li>
          <li class="nk-menu-item">
            <a href="/demo4/support-kb.html" class="nk-menu-link">
              <span class="nk-menu-text">Support</span>
            </a>
          </li>
          <li class="nk-menu-item">
            <a href="/demo4/pages/contact.html" class="nk-menu-link">
              <span class="nk-menu-text">Contact</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="nk-header-tools py-sm-1">
      @include('admin::partials.menuLink4')
      </div>
    </div>
  </div>
  @include('admin::partials.darkLightMode')
</div>