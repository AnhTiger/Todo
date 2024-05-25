<li class="nk-block-tools-opt">
    <a href="javascript:void(0);"
        onclick="Livewire.dispatch('loadingMountCreateTodoTable',{id : 0})"
        data-bs-toggle="modal" data-bs-target="#action-todo-table"
        class="{!!$loadingSettingGlobal->table_button_create_style_mobile!!}">
            {!!$loadingSettingGlobal->icon_button_create!!}
        </a>
    <a href="javascript:void(0);"
        onclick="Livewire.dispatch('loadingMountCreateTodoTable',{id : 0})"
        data-bs-toggle="modal" data-bs-target="#action-todo-table"
        class="{!!str_replace('btn-icon','',$loadingSettingGlobal->table_button_create_style_laptop)!!}">
        @if($loadingSettingGlobal->table_button_create_type == "icon")
            {!!$loadingSettingGlobal->icon_button_create!!}
        @elseif($loadingSettingGlobal->table_button_create_type == "string")
            <span>{!!$loadingSettingGlobal->table_button_create_view_string!!}</span>
        @endif		
    </a>
</li>