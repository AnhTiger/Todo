<div class="card-inner" wire:key="searchNormalactions1232d13hhhs32qEWQR">
    <div class="preview-block">
        <div class="row gy-4 unset-padding-right-row">
            <div class="col-6 col-sm-12 col-md-10 col-lg-10">
                <div class="form-group">
                    <div class="form-control-wrap">
                        <input type="text" id="search" class="form-control" wire:model.live.debounce.750ms="search"
                            placeholder="{{ __('Search by title, tag, description') }}">
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-md-2 col-lg-2">
                <div class="form-group">
                    <div class="form-control-wrap">
                        <li>
                            <ul class="d-flex g-3">
                                <li>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-light"
                                            data-bs-toggle="dropdown" aria-expanded="false">{{ __('Bulk Action') }}</a>
                                        <div class="dropdown-menu" style="">
                                            <ul class="link-list-plain no-bdr">
                                                @can('todo-export')
                                                @if(is_array($selected )&& !empty($selected))
                                                <li>
                                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#modalloadingStates"
                                                        onclick="Livewire.dispatch('bulkAction',{key :'export' })">
                                                        {!!$loadingSetting->icon_export!!}
                                                        <span>{{ __('Export To File') }}</span>
                                                    </a>
                                                </li>
                                                @endif
                                                @endcan
                                                @can('todo-import')
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="{!! $loadingSetting->table_link_click_button_style !!}"
                                                        onclick="Livewire.dispatch('bulkAction',{key :'import' })">
                                                        {!!$loadingSetting->icon_import!!}
                                                        <span>{{ __('Import From Excel') }}</span>
                                                    </a>
                                                </li>
                                                @endcan
                                                @can('todo-delete')
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="{!! $loadingSetting->table_link_click_button_style !!}"
                                                        onclick="Livewire.dispatch('bulkAction',{key :'delete' })">
                                                        {!!$loadingSetting->icon_delete!!}
                                                        <span>{{ __('Delete') }}</span>
                                                    </a>
                                                </li>
                                                @endcan
                                                @can('todo-activated')
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="{!! $loadingSetting->table_link_click_button_style !!}"
                                                        onclick="Livewire.dispatch('bulkAction',{key :'activated' })">
                                                        {!!$loadingSetting->icon_activated!!}
                                                        <span>{{ __('Activated') }}</span>
                                                    </a>
                                                </li>
                                                @endcan
                                                @can('todo-deactivated')
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="{!! $loadingSetting->table_link_click_button_style !!}"
                                                        onclick="Livewire.dispatch('bulkAction',{key :'deactivated' })">
                                                        {!!$loadingSetting->icon_deactivated!!}
                                                        <span>{{ __('Deactivated') }}</span>
                                                    </a>
                                                </li>
                                                @endcan
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                    <div class="form-control-wrap">
                        <label class="overline-title overline-title-alt"
                            for="outlined-select">{{ __('Interface') }}{!!$loadingSetting->icon_reload!!}</label>
                        <select class="form-select form-control-outlined  table-select2" id="search_interface_type"
                            data-search="on" wire:model.lazy="search_interface_type">
                            <option>-{{ __('Interface') }}-</option>
                            <option value="0">{{ __('Mini search form, below table') }}</option>
                            <option value="1">{{ __('Mini search form, above table') }}</option>
                            <option value="2">{{ __('Full search form, below table') }}</option>
                            <option value="3">{{ __('Full search form, above table') }}</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                    <div class="form-control-wrap">
                        <label class="overline-title overline -title-alt"
                            for="search_pagination_type">{{ __('Pagination Type') }}{!!$loadingSetting->icon_reload!!}</label>
                        <select class="form-select form-control-outlined  table-select2" id="search_pagination_type"
                            data-search="on" wire:model.lazy="search_pagination_type">
                            <option>-{{ __('Pagination Type') }}-</option>
                            <option value="1">{{ __('Default') }}</option>
                            <option value="0">{{ __('For Slide Page') }}</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-md-3 col-lg-3">
                <div class="form-control-wrap">
                    <label class="overline-title overline-title-alt"
                        for="search_table_style">{{ __('Table Style') }}{!!$loadingSetting->icon_reload!!}</label>
                    <select class="form-select form-control-outlined  table-select2" id="search_table_style"
                        data-search="on" wire:model.lazy="search_table_style">
                        <option>-{{ __('Table Style') }}-</option>
                        <option value="0">{{ __('List') }}</option>
                        <option value="1">{{ __('List Card') }}</option>
                        <option value="2">{{ __('Card') }}</option>
                        <option value="3">{{ __('Process') }}</option>
                    </select>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-md-3 col-lg-3">
                <ul class="btn-toolbar gx-1">
                    <li>
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn btn-trigger btn-icon dropdown-toggle"
                                data-bs-toggle="dropdown">
                                {!!$loadingSetting->icon_filter!!}
                            </a>
                            <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end" wire:ignore.self>
                                <div class="dropdown-head">
                                    <span
                                        class="sub-title dropdown-title">{{ __('Setting Search Field') }}{!!$loadingSetting->icon_reload!!}</span>
                                </div>
                                <div class="row gx-6 gy-3 unset-margin-left">
                                    @foreach($loadingSetting->table_todo_search as $row =>$value)
                                    <div class="col-6" id="column_sorting_table_{{$row}}">
                                        <div class="custom-control custom-control-sm custom-checkbox">
                                            <input type="checkbox"
                                                wire:model.lazy="search_column_sorting_show_hide.{{$row}}"
                                                value="{!!$row!!}" id="search_column_sorting_show_hide{!!$row!!}"
                                                class="custom-control-input"
                                                onclick="Livewire.dispatch('updatedSearchShowHide',{ key:'{!!$row!!}' }) ">
                                            <label class="custom-control-label"
                                                for="search_column_sorting_show_hide{!!$row!!}">
                                                @if($row == 'time')
                                                <span class="sub-text">{{ __('Time') }}</span>
                                                @elseif($row == 'user_id')
                                                <span class="sub-text">{{ __('User') }}</span>
                                                @elseif($row == 'status')
                                                <span class="sub-text">{{ __('Status') }}</span>
                                                @endif
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="dropdown-foot between">
                                    <a class="clickable {!! $loadingSetting->table_link_click_button_style !!}"
                                        onclick="Livewire.dispatch('resetFilter')"
                                        href="javascript:void(0);">{{ __('Reset Filter') }}</a>
                                    <a class="clickable {!! $loadingSetting->table_link_click_button_style !!}"
                                        href="javascript:void(0);"
                                        onClick="window.location.reload();">{{ __('Apply Seach Field') }}{!!$loadingSetting->icon_reload!!}</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    @if($loadingSetting->table_pagination_type != 0)
                    <li>
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn btn-trigger btn-icon dropdown-toggle"
                                data-bs-toggle="dropdown">
                                {!!$loadingSetting->icon_setting!!}
                            </a>
                            <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end" wire:ignore.self>
                                <ul class="link-check">
                                    <li>
                                        <span>{{ __('Records displayed') }}</span>
                                    </li>
                                    @foreach($loadingSetting->setPerPageAccepted as $row)

                                    @if($row == $loadingSetting->table_todo_perPage )
                                    <li class="active">
                                        @else
                                    <li>
                                        @endif
                                        <a href="javascript:void(0);"
                                            class="{!! $loadingSetting->table_link_click_button_style !!}"
                                            onclick="Livewire.dispatch('paginate',{id : {{ $row}}})">{{$row}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </li>
                    @endif
                    <li>
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn btn-trigger btn-icon dropdown-toggle"
                                data-bs-toggle="dropdown">
                                {!!$loadingSetting->icon_table_col_view!!}
                            </a>
                            <div class="filter-wg dropdown-menu dropdown-menu-md dropdown-menu-end" wire:ignore.self>
                                <div class="dropdown-head">
                                    <span
                                        class="sub-title dropdown-title">{{ __('Show/Hide Column') }}{!!$loadingSetting->icon_can_move!!}</span>
                                    <span class="sub-title dropdown-title"><a href="javascript:void(0);"
                                            onclick="Livewire.dispatch('setAsDefault')"><span
                                                class="{!!$loadingSetting->table_button_apply_text_style!!}">{{ __('Set as default') }}</span></a></span>
                                </div>
                                <div class="dropdown-body dropdown-body-rg">
                                    <div class="row gx-6 gy-3" id="moveColumnDragula">
                                        @foreach($column_sorting_show_hide as $row =>$value)
                                        <div class="col-6" id="column_sorting_table_{{$row}}">
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox"
                                                    wire:model.lazy="column_sorting_show_hide.{{$row}}"
                                                    value="{!!$row!!}" id="table_show_hide_sorting_{!!$row!!}"
                                                    class="custom-control-input"
                                                    onclick="Livewire.dispatch('updatedColumnShowHide',{ key:'{!!$row!!}' }) ">
                                                <label class="custom-control-label"
                                                    for="table_show_hide_sorting_{!!$row!!}">
                                                    @if($row == 'time')
                                                    <span class="sub-text">{{ __('Time') }}</span>
                                                    @elseif($row == 'user_id')
                                                    <span class="sub-text">{{ __('User') }}</span>
                                                    @elseif($row == 'status')
                                                    <span class="sub-text">{{ __('Status') }}</span>
                                                    @elseif($row == 'reminder')
                                                    <span class="sub-text">{{ __('Reminder') }}</span>
                                                    @elseif($row == 'description')
                                                    <span class="sub-text">{{ __('Description') }}</span>
                                                    @elseif($row == 'photo_path')
                                                    <span class="sub-text">{{ __('Photo') }}</span>
                                                    @elseif($row == 'log')
                                                    <span class="sub-text">{{ __('Log') }}</span>
                                                    @elseif($row == 'created_at')
                                                    <span class="sub-text">{{ __('Created At') }}</span>
                                                    @elseif($row == 'updated_at')
                                                    <span class="sub-text">{{ __('Updated At') }}</span>
                                                    @elseif($row == 'user_created')
                                                    <span class="sub-text">{{ __('User Created') }}</span>
                                                    @elseif($row == 'user_updated')
                                                    <span class="sub-text">{{ __('User Updated') }}</span>
                                                    @endif
                                                </label>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-6">
                                            <a href="javascript:void(0);"
                                                class="{!! $loadingSetting->table_link_click_button_style !!}"
                                                onclick="Livewire.dispatch('resetOrderColumn')"><span
                                                    class="{!!$loadingSetting->table_button_reset_text_style!!}">{{ __('Reset Sorting') }}</span></a>
                                        </div>
                                        <div class="col-6">
                                            <a href="javascript:void(0);"
                                                class="{!! $loadingSetting->table_link_click_button_style !!}"
                                                onclick="Livewire.dispatch('removeOrderColumn')"><span
                                                    class="{!!$loadingSetting->table_button_reset_text_style!!}">{{ __('Remove all Sorting') }}</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-foot between">
                                    <a href="javascript:void(0);"
                                        class="{!! $loadingSetting->table_link_click_button_style !!}"
                                        onclick="Livewire.dispatch('columnShowAll')"><span
                                            class="{!!$loadingSetting->table_button_show_text_style!!}">{{ __('Show All') }}</span></a>
                                    <a href="javascript:void(0);"
                                        class="{!! $loadingSetting->table_link_click_button_style !!}"
                                        onclick="Livewire.dispatch('columnHideAll')"><span
                                            class="{!!$loadingSetting->table_button_edit_text_style!!}">{{ __('Hide All') }}</span></a>
                                    <a href="javascript:void(0);"
                                        class="{!! $loadingSetting->table_link_click_button_style !!}"
                                        onclick="Livewire.dispatch('columnReset')"><span
                                            class="{!!$loadingSetting->table_button_remove_text_style!!}">{{ __('Reset to default') }}</span></a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div wire:key="ddkkckckedddddddckc" class="row gy-4 unset-padding-right-row" wire:ignore.self>
                @foreach($loadingSetting->table_todo_search as $row =>$value)
                @if($row == "time" && $value != "d-none")

                <div class="{!!$layout_table_todo_search_div!!}">
                    <div class="form-group" wire:ignore.self>
                        <label class="overline-title overline-title-alt">{{ __('From') }}</label>
                        <input type="text" class="form-control  form-control-outlined  date-picker-form"
                            data-date-format="yyyy-mm-dd" wire:model.lazy="search_todo_from"
                            placeholder="{{ __('From') }}">
                    </div>
                </div>
                <div class="{!!$layout_table_todo_search_div!!}">
                    <div class="form-group" wire:ignore.self>
                        <label class="overline-title overline-title-alt">{{ __('To') }}</label>
                        <input type="text" class="form-control  form-control-outlined  date-picker-form"
                            data-date-format="yyyy-mm-dd" wire:model.lazy="search_todo_to"
                            placeholder="{{ __('To') }}">
                    </div>
                </div>
                @elseif($row == "user_id" && $value != "d-none")
                <div class="{!!$layout_table_todo_search_div!!}">
                    <div class="form-group" wire:ignore.self>
                        <label class="overline-title overline-title-alt">{{ __('User') }}</label>
                        <select class="form-select form-control-outlined  table-select2" id="search_user_id"
                            data-search="on" wire:model.lazy="search_user_id" multiple>
                            @foreach($getlistUser as $item)
                            <option data-imagesrc='{!!checkExistLogo($item->profile_photo_path)!!}'
                                data-name='{!!$item->name!!}' data-code='{!!$item->code!!}'
                                data-description='{!!$item->description!!}' value="{{ $item->id }}">{{ __('Name') }} :
                                {{ $item->name }} - {{ __('Code') }} :
                                {{ $item->code }} - {{ __('Description') }}
                                {{ $item->description }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @elseif($row == "status" && $value != "d-none")
                <div class="{!!$layout_table_todo_search_div!!}">
                    <div class="form-group" wire:ignore.self>
                        <label class="overline-title overline-title-alt">{{ __('Status') }}</label>
                        <select class="form-select form-control-outlined  table-select2" id="search_status"
                            data-search="on" wire:model.lazy="search_status">

                            <option value="0">{{ __('Prevent') }}</option>
                            <option value="1">{{ __('Watting') }}
                            </option>
                            <option value="2">{{ __('Done') }}</option>

                        </select>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>