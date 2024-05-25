@if(($row != null && isset($row->id)))
@if($loadingSetting->table_action_button_type == "drop_down")
<div class="dropdown none-relative" wire:key="buttondryrtytryopdown{{ $row->id }}{!!mt_rand()!!}">
    <a class="{!!$loadingSetting->table_button_click_more_setting_style!!}" data-bs-toggle="dropdown"
        data-offset="-8,0">
        <span>Action</span>
        {!!$loadingSetting->icon_dropdown!!}
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
        <ul class="link-list-plain no-bdr">
            @can('todo-show')
            <li>
                <a href="javascript:void(0);"
                    onclick="Livewire.dispatch('loadingMountShowTodoTable',{id : {{ $row->id }} })"
                    data-bs-toggle="modal" data-bs-target="#action-todo-table"
                    class="text-success">{!!$loadingSetting->icon_button_view!!}<span>{{ __('View') }}</span>
                </a>
            </li>
            @endcan
            @can('todo-update')
            <li>
                <a href="javascript:void(0);"
                    onclick="Livewire.dispatch('loadingMountEditTodoTable',{id : {{ $row->id }} })"
                    data-bs-toggle="modal" data-bs-target="#action-todo-table"
                    class="text-success">{!!$loadingSetting->icon_button_edit!!}<span>{{ __('Edit') }}</span>
                </a>
            </li>
            @endcan
            @can('todo-delete')
            <li>
                <a href="javascript:void(0);" wire:click="$dispatch('triggerDelete', { idDelete: {{ $row->id }} })"
                    class="text-danger swal-confirm-delete">{!!$loadingSetting->icon_button_remove!!}<span>{{ __('Remove') }}</span>
                </a>
            </li>
            @endcan
        </ul>
    </div>
</div>
@elseif($loadingSetting->table_action_button_type == "button_group")
<div wire:key="buttondropdownrtuytrulg{{ $row->id }}{!!mt_rand()!!}">
    <div class="dropdown none-relative">
        <a class="{!!$loadingSetting->table_button_click_more_setting_style!!}" data-bs-toggle="dropdown"
            data-offset="-8,0">
            {!!$loadingSetting->icon_button_more_setting!!}
        </a>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
            <ul class="link-list-plain no-bdr">
                @can('todo-show')
                <li>
                    <a href="javascript:void(0);"
                        onclick="Livewire.dispatch('loadingMountShowTodoTable',{id : {{ $row->id }} })"
                        data-bs-toggle="modal" data-bs-target="#action-todo-table"
                        class="text-success">{!!$loadingSetting->icon_button_view!!}<span>{{ __('View') }}</span>
                    </a>
                </li>
                @endcan
                @can('todo-update')
                <li>
                    <a href="javascript:void(0);"
                        onclick="Livewire.dispatch('loadingMountEditTodoTable',{id : {{ $row->id }} })"
                        data-bs-toggle="modal" data-bs-target="#action-todo-table"
                        class="text-success">{!!$loadingSetting->icon_button_edit!!}<span>{{ __('Edit') }}</span>
                    </a>
                </li>
                @endcan
                @can('todo-delete')
                <li>
                    <a href="javascript:void(0);" wire:click="$dispatch('triggerDelete', { idDelete: {{ $row->id }} })"
                        class="text-danger swal-confirm-delete">{!!$loadingSetting->icon_button_remove!!}<span>{{ __('Remove') }}</span>
                    </a>
                </li>
                @endcan
            </ul>
        </div>
    </div>
</div>
@elseif($loadingSetting->table_action_button_type == "button_group_gif")
<div class="d-none d-sm-block d-md-block d-lg-block d-xl-block d-xxl-block"
    wire:key="buttongrytruturoupsm{{ $row->id }}{!!mt_rand()!!}">
    <div class="btn-group {!!$loadingSetting->table_action_group_button_type_size!!} ">
        @can('todo-show')
        <a href="javascript:void(0);" onclick="Livewire.dispatch('loadingMountShowTodoTable',{id : {{ $row->id }} })"
            data-bs-toggle="modal" data-bs-target="#action-todo-table"><img
                src="{!!$loadingSetting->table_button_show_gif!!}" class="w-40px unset-max-width"></a>
        @endcan
        @can('todo-update')
        <a href="javascript:void(0);" onclick="Livewire.dispatch('loadingMountEditTodoTable',{id : {{ $row->id }} })"
            data-bs-toggle="modal" data-bs-target="#action-todo-table"><img
                src="{!!$loadingSetting->table_button_edit_gif!!}" class="w-40px unset-max-width"></a>
        @endcan
        @can('todo-delete')
        <a href="javascript:void(0);" wire:click="$dispatch('triggerDelete', { idDelete: {{ $row->id }} })"
            type="button"><img src="{!!$loadingSetting->table_button_remove_gif!!}" class="w-40px unset-max-width"></a>
        @endcan
    </div>
</div>
<div class="d-block d-sm-none d-md-none  d-lg-none d-xl-none d-xxl-none"
    wire:key="buttonrtrtredropdownsm{{ $row->id }}{!!mt_rand()!!}">
    <div class="dropdown none-relative">
        <a class="{!!$loadingSetting->table_button_click_more_setting_style!!}" data-bs-toggle="dropdown"
            data-offset="-8,0">
            {!!$loadingSetting->icon_button_more_setting!!}
        </a>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
            <ul class="link-list-plain no-bdr">
                @can('todo-show')
                <li>
                    <a href="javascript:void(0);"
                        onclick="Livewire.dispatch('loadingMountShowTodoTable',{id : {{ $row->id }} })"
                        data-bs-toggle="modal" data-bs-target="#action-todo-table"
                        class="text-success">{!!$loadingSetting->icon_button_view!!}<span>{{ __('View') }}</span>
                    </a>
                </li>
                @endcan
                @can('todo-update')
                <li>
                    <a href="javascript:void(0);"
                        onclick="Livewire.dispatch('loadingMountEditTodoTable',{id : {{ $row->id }} })"
                        data-bs-toggle="modal" data-bs-target="#action-todo-table"
                        class="text-success">{!!$loadingSetting->icon_button_edit!!}<span>{{ __('Edit') }}</span>
                    </a>
                </li>
                @endcan
                @can('todo-delete')
                <li>
                    <a href="javascript:void(0);" wire:click="$dispatch('triggerDelete', { idDelete: {{ $row->id }} })"
                        class="text-danger swal-confirm-delete">{!!$loadingSetting->icon_button_remove!!}<span>{{ __('Remove') }}</span>
                    </a>
                </li>
                @endcan
            </ul>
        </div>
    </div>
</div>
@endif
@endif