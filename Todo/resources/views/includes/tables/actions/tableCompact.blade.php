<div class="nk-block" wire:key="416547987964546541656fg45749">
    <div class="custom-control custom-control-sm custom-checkbox ps-5 pb-1 pt-1">
        <input type="checkbox" class="custom-control-input" id="selectMutilId" wire:model.lazy="selected_status"
            onclick="Livewire.dispatch('selectMutilId')">
        <label class="custom-control-label overline-title overline-title-alt form-label-outlined"
            for="selectMutilId">{{ __('Chosen All') }}</label>
    </div>
    <div class="custom-control custom-control-sm custom-switch ps-5 pb-1  pt-1">
        <input type="checkbox" class="custom-control-input" id="changeTodoStyleCompactIconShowdasdsa"
            onclick="Livewire.dispatch('changeTodoStyleCompactIconShow')"
            @if($loadingSetting->table_todo_compact_icon_show) checked @endif>
        <label class="custom-control-label overline-title overline-title-alt form-label-outlined"
            for="changeTodoStyleCompactIconShowdasdsa">{{ __('Style with icon') }}</label>
    </div>
    @if($loadingSetting->table_todo_compact_icon_show)
    <div class="card-inner ">
        <div class="row g-gs">
            @foreach($listTodo as $key => $row)
            <div class="{!!$layout_table_todo_card_div!!}" wire:key="4ret94r7et9{!!$key!!}e6546554">
                <div class="card card-bordered">
                    <div class="card-inner ">
                        <div class="project">
                            <div class="project-head card-inner  card-bordered">
                                @include('todo::includes.tables.actions.logo', ['row' =>
                                $row->user,'todo' =>
                                $row,'custom' =>'user','loadingSetting'=>$loadingSetting,'key'=>$key.'1547956468165'])
                                @include('todo::includes.tables.actions.buttonCard', ['row' =>
                                $row,'loadingSetting'=>$loadingSetting])
                            </div>
                            <div class="project-details card-inner card-bordered">
                                @foreach($loadingSetting->table_todo_column as $key => $style)
                                @if($key == 'time' && $style != 'd-none')
                                <div class="pb-2">
                                    <span class="link span">{!!$loadingSetting->icon_time!!}
                                        <span
                                            class="{!!$loadingSetting->table_date_time_column_style!!}">{{convertDateTime($loadingSetting->table_date_time_format,$row->time)}}</span></span>
                                </div>
                                @elseif($key == 'reminder' && $style != 'd-none')
                                <div class="pb-2">
                                    <span class="link span">{!!$loadingSetting->icon_reminder!!}
                                        {!!convertReminderTag($row->reminder,$loadingSetting)!!}</span>
                                </div>
                                @elseif($key == 'time_remaining' && $style != 'd-none')
                                <div class="pb-2">
                                    <span class="link span">{!!$loadingSetting->icon_time_remaining!!}
                                        {!!$row->time_remaining!!}</span>
                                </div>
                                @elseif($key == 'time_interval' && $style != 'd-none')
                                <div class="pb-2">
                                    <span class="link span">{!!$loadingSetting->icon_time_interval!!}
                                        {!!$row->time_interval!!}</span>
                                </div>
                                @elseif($key == 'time_interval_between' && $style != 'd-none')
                                <div class="pb-2">
                                    <span
                                        class="link span">{!!$loadingSetting->icon_time_interval_between!!}{!!$row->time_interval_between!!}</span>
                                </div>
                                @elseif($key == 'title' && $style != 'd-none')
                                <div class="pb-2">
                                    <span
                                        class="link span">{!!$loadingSetting->icon_title!!}{!!$row->title!!}</span>
                                </div>
                                @elseif($key == 'tag' && $style != 'd-none')
                                <div class="pb-2">
                                    <span
                                        class="link span">{!!$loadingSetting->icon_tag!!}{!!convertTag($row->tag,$loadingSetting)!!}</span>
                                </div>
                                @elseif($key == 'description' && $style != 'd-none')
                                <div class="pb-2">
                                    <span class="link span">{!!$loadingSetting->icon_read_at!!}
                                        <span>
                                            <a type="button" data-bs-container="body" data-bs-trigger="hover focus"
                                                class="reloadPopover {!! $loadingSetting->table_link_click_button_style !!}"
                                                data-bs-toggle="popover" data-bs-placement="top"
                                                data-bs-content="{!!$row->description!!}"><span
                                                    class="text-ellipsis">{!!cutStringLog($row->description)!!}</span></a>
                                        </span>
                                    </span>
                                </div>
                                @elseif($key == 'photo_path' && $style != 'd-none')
                                <div class="pb-2">

                                </div>
                                @elseif($key == 'created_at' && $style != 'd-none')
                                <div class="pb-2">
                                    <span class="link span">{!!$loadingSetting->icon_created_at!!} <span
                                            class="{!!$loadingSetting->table_date_time_column_style!!}">{{convertDateTime($loadingSetting->table_date_time_format,$row->created_at)}}</span></span>
                                </div>
                                @elseif($key == 'updated_at' && $style != 'd-none')
                                <div class="pb-2">
                                    <span class="link span">
                                        {!!$loadingSetting->icon_updated_at!!}<span
                                            class="{!!$loadingSetting->table_date_time_column_style!!}">{{convertDateTime($loadingSetting->table_date_time_format,$row->updated_at)}}</span></span>
                                </div>
                                @elseif($key == 'user_created' && $style != 'd-none')
                                <div class="pb-2">
                                    <span class="link span">
                                        {!!$loadingSetting->icon_user_created!!}
                                        <a href="javascript:void(0);"
                                            onclick="Livewire.dispatch('userActionInfo',{code : '{{ $row->user_created }}', custom:'user' })"
                                            data-bs-toggle="modal" data-bs-target="#userActionInfo"
                                            class="{!! $loadingSetting->table_link_click_button_style !!}">
                                            <span>{!!$row->userCreate->name!!}</span>
                                        </a>
                                    </span>
                                </div>
                                @elseif($key == 'user_updated' && $style != 'd-none')
                                <div class="pb-2">
                                    <span class="link span">
                                        {!!$loadingSetting->icon_user_updated!!}
                                        <a href="javascript:void(0);"
                                            onclick="Livewire.dispatch('userActionInfo',{code : '{{ $row->user_updated }}', custom:'user' })"
                                            data-bs-toggle="modal" data-bs-target="#userActionInfo"
                                            class="{!! $loadingSetting->table_link_click_button_style !!}">
                                            <span>{!!$row->userUpdate->name!!}</span>
                                        </a>
                                    </span>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="custom-control custom-checkbox smaller check-box-14 pb-3">
                        <input type="checkbox" class="custom-control-input" id="selected_{{$row->id}}"
                            value="{{$row->id}}" wire:model.lazy="selected.{{$row->id}}">
                        <label class="custom-control-label"
                            for="selected_{{$row->id}}">@if($loadingSetting->table_id_column_onOff) {!!$row->id!!}
                            @endif</label>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
    <div class="card-inner ">
        <div class="row g-gs">
            @foreach($listTodo as $key => $row)
            <div class="{!!$layout_table_todo_card_div!!}" wire:key="f4ds5ddf7g746518ert65{!!$key!!}e">
                <div class="card card-bordered">
                    <div class="card-inner ">
                        <div class="project">
                            <div class="project-head">
                                @include('todo::includes.tables.actions.logo', ['row' =>
                                $row->user,'todo' =>
                                $row,'custom'
                                =>'user','loadingSetting'=>$loadingSetting,'key'=>$key.'154795649841668165'])
                                @include('todo::includes.tables.actions.buttonCard', ['row' =>
                                $row,'loadingSetting'=>$loadingSetting])
                            </div>
                            <div class="project-details">
                                <table class="table table-striped">
                                    <tbody>
                                        @foreach($loadingSetting->table_todo_column as $key => $style)
                                        @if($key == 'time' && $style != 'd-none' )
                                        <tr>
                                            <td>{{ __('Time') }}</td>
                                            <td><span
                                                    class="{!!$loadingSetting->table_date_time_column_style!!}">{{convertDateTime($loadingSetting->table_date_time_format,$row->time)}}</span>
                                            </td>
                                        </tr>
                                        @elseif($key == 'reminder' && $style != 'd-none' )
                                        <tr>
                                            <td>{{ __('Reminder') }}</td>
                                            <td>{!!convertReminderTag($row->reminder,$loadingSetting)!!}
                                            </td>
                                        </tr>
                                        @elseif($key == 'time_remaining' && $style != 'd-none' )
                                        <tr>
                                            <td>{{ __('Time Remaining') }}</td>
                                            <td>{!!$row->time_remaining!!}
                                            </td>
                                        </tr>
                                        @elseif($key == 'time_interval' && $style != 'd-none' )
                                        <tr>
                                            <td>{{ __('Time Interval') }}</td>
                                            <td>{!!$row->time_remaining!!}
                                            </td>
                                        </tr>
                                        @elseif($key == 'time_interval_between' && $style != 'd-none' )
                                        <tr>
                                            <td>{{ __('Time Interval Between') }}</td>
                                            <td>{!!$row->time_interval_between!!}
                                            </td>
                                        </tr>


                                        @elseif($key == 'title' && $style != 'd-none' )
                                        <tr>
                                            <td>{{ __('Title') }}</td>
                                            <td>{!!$row->title!!}
                                            </td>
                                        </tr>

                                        @elseif($key == 'tag' && $style != 'd-none' )
                                        <tr>
                                            <td>{{ __('Tag') }}</td>
                                            <td>{!!convertTag($row->tag,$loadingSetting)!!}
                                            </td>
                                        </tr>
                                
                                        @elseif($key == 'description' && $style != 'd-none' )
                                        <tr>
                                            <td>{{ __('Description') }}</td>
                                            <td> <span>
                                                    <a type="button" data-bs-container="body"
                                                        data-bs-trigger="hover focus"
                                                        class="reloadPopover {!! $loadingSetting->table_link_click_button_style !!}"
                                                        data-bs-toggle="popover" data-bs-placement="top"
                                                        data-bs-content="{!!$row->description!!}"><span
                                                            class="text-ellipsis">{!!cutStringLog($row->description)!!}</span></a>
                                                </span>
                                            </td>
                                        </tr>
                                        @elseif($key == 'photo_path' && $style != 'd-none' )
                                        <tr>
                                            <td>{{ __('Photo') }}</td>
                                            <td> <span>
                                                    <a type="button" data-bs-container="body"
                                                        data-bs-trigger="hover focus"
                                                        class="reloadPopover {!! $loadingSetting->table_link_click_button_style !!}"
                                                        data-bs-toggle="popover" data-bs-placement="top"
                                                        data-bs-content="{!!$row->description!!}"><span
                                                            class="text-ellipsis">{!!cutStringLog($row->description)!!}</span></a>
                                                </span>
                                            </td>
                                        </tr>
                                        @elseif($key == 'created_at' && $style != 'd-none' )
                                        <tr>
                                            <td>{{ __('Created At') }}</td>
                                            <td><span
                                                    class="{!!$loadingSetting->table_date_time_column_style!!}">{{convertDateTime($loadingSetting->table_date_time_format,$row->created_at)}}</span>
                                            </td>
                                        </tr>
                                        @elseif($key == 'updated_at' && $style != 'd-none')
                                        <tr>
                                            <td>{{ __('Updated At') }}</td>
                                            <td><span
                                                    class="{!!$loadingSetting->table_date_time_column_style!!}">{{convertDateTime($loadingSetting->table_date_time_format,$row->updated_at)}}</span>
                                            </td>
                                        </tr>
                                        @elseif($key == 'user_created' && $style != 'd-none')
                                        <tr>
                                            <td>{{ __('User Created') }}</td>
                                            <td>
                                                <a href="javascript:void(0);"
                                                    onclick="Livewire.dispatch('userActionInfo',{code : '{{ $row->user_created }}', custom:'corporation' })"
                                                    data-bs-toggle="modal" data-bs-target="#userActionInfo"
                                                    class="{!! $loadingSetting->table_link_click_button_style !!}">
                                                    <span>{!!$row->userCreate->name!!}</span>
                                                </a>
                                            </td>
                                        </tr>
                                        @elseif($key == 'user_updated' && $style != 'd-none')
                                        <tr>
                                            <td>{{ __('User Updated') }}</td>
                                            <td>
                                                <a href="javascript:void(0);"
                                                    onclick="Livewire.dispatch('userActionInfo',{code : '{{ $row->user_updated }}', custom:'user' })"
                                                    data-bs-toggle="modal" data-bs-target="#userActionInfo"
                                                    class="{!! $loadingSetting->table_link_click_button_style !!}">
                                                    <span>{!!$row->userUpdate->namne!!}</span>
                                                </a>
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="custom-control custom-checkbox smaller check-box-14 pb-3">
                        <input type="checkbox" class="custom-control-input" id="selected_{{$row->id}}"
                            value="{{$row->id}}" wire:model.lazy="selected.{{$row->id}}">
                        <label class="custom-control-label"
                            for="selected_{{$row->id}}">@if($loadingSetting->table_id_column_onOff) {!!$row->id!!}
                            @endif</label>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif
</div>