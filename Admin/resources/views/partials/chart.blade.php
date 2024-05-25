
<li class="dropdown chats-dropdown">
    <a href="javascript:void(0);" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
        <div class="icon-status icon-status-na"><em class="icon ni ni-chat"></em></div>
    </a>
    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
        <div class="dropdown-head">
            <span class="sub-title nk-dropdown-title">Recent Chats</span>
            <a href="javascript:void(0);">Setting</a>
        </div>
        <div class="dropdown-body">
            <ul class="chat-list">
                <div id="chat_box_user_header_global"></div>
            </ul>
        </div>
        <div class="dropdown-foot center">
            <a href="html/apps-chats.html">View All</a>
        </div>
    </div>

    <script>
        function renderNewTabChatGlobal(id){

            Livewire.dispatch('renderChatMessengerUserGlobal',{id : id });
        }
    </script>
</li>
