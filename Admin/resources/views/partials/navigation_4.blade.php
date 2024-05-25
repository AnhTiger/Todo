<div class="nk-aside toggle-screen-lg" data-content="sideNavGlobal" data-toggle-overlay="true" data-toggle-screen="lg" data-toggle-body="true">
  <div class="nk-sidebar-menu" data-simplebar="init">
    <div class="simplebar-wrapper" style="margin: 0px 0px -40px;">
      <div class="simplebar-height-auto-observer-wrapper">
        <div class="simplebar-height-auto-observer"></div>
      </div>
      <div class="simplebar-mask">
        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
          <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;">
            <div class="simplebar-content" style="padding: 0px 0px 40px;">
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
                        <span class="nk-menu-badge">New</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo4/apps-kanban.html" class="nk-menu-link">
                        <span class="nk-menu-text">Kanban Board</span>
                        <span class="nk-menu-badge">New</span>
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
              @include('admin::partials.navLink')
            </div>
          </div>
        </div>
      </div>
      <div class="simplebar-placeholder" style="width: auto; height: 1017px;"></div>
    </div>
    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
      <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
    </div>
    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
      <div class="simplebar-scrollbar" style="height: 0px; display: none; transform: translate3d(0px, 0px, 0px);"></div>
    </div>
  </div>
  <div class="nk-aside-close">
    @persist('navKeepLsoadingLoading1')
    <a href="javascript:void(0);" class="toggle" data-target="sideNavGlobal">
      <em class="icon ni ni-cross"></em>
    </a>
    @endpersist
  </div>
</div>