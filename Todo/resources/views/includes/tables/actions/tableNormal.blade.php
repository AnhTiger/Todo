<div class="card-inner table-responsive" wire:key="56f4g65dr4f65g65g">
    <table class="nk-tb-list nk-tb-ulist {!!$loadingSetting->style_table!!}">
        <thead>
            <tr class="nk-tb-item nk-tb-head">
                <th class="nk-tb-col nk-tb-col-check">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="selectMutilId"
                            wire:model.lazy="selected_status" onclick="Livewire.dispatch('selectMutilId')">
                        <label class="custom-control-label" for="selectMutilId"><span
                                class="sub-text">{{ __('ID') }}</span></label>
                    </div>
                </th>
                @if($loadingSetting->table_todo_position_button_action == 0)
                <th class="nk-tb-col text-start">
                    <span class="sub-text">{{ __('Action') }}</span>
                </th>
                @endif
                @foreach($loadingSetting->table_todo_column as $key => $style)
                @if($key == 'time' && $style != 'd-none')
                <th class="nk-tb-col {!!$style!!}">
                    <span class="sub-text link span"
                        onclick="Livewire.dispatch('orderColumn',{key : '{{$key}}' })">{{ __('Time') }}
                        {!!checkKeyOrderByTable($key,$loadingSetting->table_todo_key_order,$loadingSetting)!!}
                    </span>
                </th>
                @elseif($key == 'user_id' && $style != 'd-none')
                <th class="nk-tb-col {!!$style!!}">
                    <span class="sub-text link span"
                        onclick="Livewire.dispatch('orderColumn',{key : '{{$key}}' })">{{ __('User') }}
                        {!!checkKeyOrderByTable($key,$loadingSetting->table_todo_key_order,$loadingSetting)!!}
                    </span>
                </th>
                @elseif($key == 'status' && $style != 'd-none')
                <th class="nk-tb-col {!!$style!!}">
                    <span class="sub-text link span"
                        onclick="Livewire.dispatch('orderColumn',{key : '{{$key}}' })">{{ __('Status') }}
                        {!!checkKeyOrderByTable($key,$loadingSetting->table_todo_key_order,$loadingSetting)!!}
                    </span>
                </th>
                @elseif($key == 'reminder' && $style != 'd-none' )
                <th class="nk-tb-col {!!$style!!}">
                    <span class="sub-text link span"
                        onclick="Livewire.dispatch('orderColumn',{key : '{{$key}}' })">{{ __('Reminder') }}
                        {!!checkKeyOrderByTable($key,$loadingSetting->table_todo_key_order,$loadingSetting)!!}
                    </span>
                </th>
                @elseif($key == 'time_remaining' && $style != 'd-none' )
                <th class="nk-tb-col {!!$style!!}">
                    <span class="sub-text link span"
                        onclick="Livewire.dispatch('orderColumn',{key : '{{$key}}' })">{{ __('Time Remaining') }}
                        {!!checkKeyOrderByTable($key,$loadingSetting->table_todo_key_order,$loadingSetting)!!}
                    </span>
                </th>
                @elseif($key == 'time_interval' && $style != 'd-none' )
                <th class="nk-tb-col {!!$style!!}">
                    <span class="sub-text link span"
                        onclick="Livewire.dispatch('orderColumn',{key : '{{$key}}' })">{{ __('Time Interval') }}
                        {!!checkKeyOrderByTable($key,$loadingSetting->table_todo_key_order,$loadingSetting)!!}
                    </span>
                </th>
                @elseif($key == 'time_interval_between' && $style != 'd-none' )
                <th class="nk-tb-col {!!$style!!}">
                    <span class="sub-text link span"
                        onclick="Livewire.dispatch('orderColumn',{key : '{{$key}}' })">{{ __('Time Interval Between') }}
                        {!!checkKeyOrderByTable($key,$loadingSetting->table_todo_key_order,$loadingSetting)!!}
                    </span>
                </th>
                @elseif($key == 'title' && $style != 'd-none' )
                <th class="nk-tb-col {!!$style!!}">
                    <span class="sub-text link span"
                        onclick="Livewire.dispatch('orderColumn',{key : '{{$key}}' })">{{ __('Title') }}
                        {!!checkKeyOrderByTable($key,$loadingSetting->table_todo_key_order,$loadingSetting)!!}
                    </span>
                </th>
                @elseif($key == 'tag' && $style != 'd-none' )
                <th class="nk-tb-col {!!$style!!}">
                    <span class="sub-text link span"
                        onclick="Livewire.dispatch('orderColumn',{key : '{{$key}}' })">{{ __('Tag') }}
                        {!!checkKeyOrderByTable($key,$loadingSetting->table_todo_key_order,$loadingSetting)!!}
                    </span>
                </th>
                @elseif($key == 'description' && $style != 'd-none')
                <th class="nk-tb-col {!!$style!!}">
                    <span class="sub-text link span"
                        onclick="Livewire.dispatch('orderColumn',{key : '{{$key}}' })">{{ __('Description') }}
                        {!!checkKeyOrderByTable($key,$loadingSetting->table_todo_key_order,$loadingSetting)!!}
                    </span>
                </th>
                @elseif($key == 'photo_path' && $style != 'd-none')
                <th class="nk-tb-col {!!$style!!}">
                    <span class="sub-text link span"
                        onclick="Livewire.dispatch('orderColumn',{key : '{{$key}}' })">{{ __('Photo') }}
                        {!!checkKeyOrderByTable($key,$loadingSetting->table_todo_key_order,$loadingSetting)!!}
                    </span>
                </th>
                @elseif($key == 'log' && $style != 'd-none')
                <th class="nk-tb-col {!!$style!!}">
                    <span class="sub-text link span"
                        onclick="Livewire.dispatch('orderColumn',{key : '{{$key}}' })">{{ __('Log') }}
                        {!!checkKeyOrderByTable($key,$loadingSetting->table_todo_key_order,$loadingSetting)!!}
                    </span>
                </th>
                @elseif($key == 'updated_at' && $style != 'd-none' )
                <th class="nk-tb-col {!!$style!!}">
                    <span class="sub-text link span"
                        onclick="Livewire.dispatch('orderColumn',{key : '{{$key}}' })">{{ __('Updated At') }}
                        {!!checkKeyOrderByTable($key,$loadingSetting->table_todo_key_order,$loadingSetting)!!}
                    </span>
                </th>
                @elseif($key == 'user_created' && $style != 'd-none')
                <th class="nk-tb-col {!!$style!!}">
                    <span class="sub-text link span"
                        onclick="Livewire.dispatch('orderColumn',{key : '{{$key}}' })">{{ __('User Created') }}
                        {!!checkKeyOrderByTable($key,$loadingSetting->table_todo_key_order,$loadingSetting)!!}
                    </span>
                </th>
                @elseif($key == 'created_at' && $style != 'd-none' )
                <th class="nk-tb-col {!!$style!!}">
                    <span class="sub-text link span"
                        onclick="Livewire.dispatch('orderColumn',{key : '{{$key}}' })">{{ __('Created At') }}
                        {!!checkKeyOrderByTable($key,$loadingSetting->table_todo_key_order,$loadingSetting)!!}
                    </span>
                </th>
                @elseif($key == 'user_updated' && $style != 'd-none')
                <th class="nk-tb-col {!!$style!!}">
                    <span class="sub-text link span"
                        onclick="Livewire.dispatch('orderColumn',{key : '{{$key}}' })">{{ __('User Updated') }}
                        {!!checkKeyOrderByTable($key,$loadingSetting->table_todo_key_order,$loadingSetting)!!}
                    </span>
                </th>
                @endif
                @endforeach
                @if($loadingSetting->table_todo_position_button_action == 1)
                <th class="nk-tb-col text-end">
                    <span class="sub-text">{{ __('Action') }}</span>
                </th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($listTodo as $key => $row)
            <tr wire:key="rowNormal{{$row->id}}" class="nk-tb-item">
                <td class="nk-tb-col nk-tb-col-check">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="selected_{{$row->id}}"
                            value="{{$row->id}}" wire:model.lazy="selected.{{$row->id}}">
                        <label class="custom-control-label" for="selected_{{$row->id}}">
                            @if($loadingSetting->table_id_column_onOff) <a
                                class="{!!$loadingSetting->table_id_column_style!!}">{!!$row->id!!}</a> @endif </label>
                    </div>
                </td>

                @if($loadingSetting->table_todo_position_button_action == 0)
                <td class="nk-tb-col">
                    @include('todo::includes.tables.actions.button', ['row' => $row,'loadingSetting'=>$loadingSetting])
                </td>
                @endif
                @foreach($loadingSetting->table_todo_column as $key => $style)
                @if($key == 'time' && $style != 'd-none' )
                <td class="nk-tb-col {!!$style!!}">

                    <span
                        class="{!!$loadingSetting->table_date_time_column_style!!}">{{convertDateTime($loadingSetting->table_date_time_format,$row->time)}}</span>
                </td>
                @elseif($key == 'user_id' && $style != 'd-none' )
                <td class="nk-tb-col {!!$style!!}">

                    @include('todo::includes.tables.actions.logo', ['row' =>
                    $row->user,'todo' =>
                    $row,'custom' =>'user','loadingSetting'=>$loadingSetting,'key'=>$key.'154798165'])
                </td>
                @elseif($key == 'status' && $style != 'd-none' )
                <td class="nk-tb-col {!!$style!!}">
                    @include('todo::includes.tables.fields.status', ['row' => $row,'loadingSetting'=>$loadingSetting])
                </td>
                @elseif($key == 'reminder' && $style != 'd-none' )
                <td class="nk-tb-col {!!$style!!}">
                    {!!convertReminderTag($row->reminder,$loadingSetting)!!}
                </td>
                @elseif($key == 'time_remaining' && $style != 'd-none' )
                <td class="nk-tb-col {!!$style!!}">
                    {!!$row->time_remaining!!}
                </td>
                @elseif($key == 'time_interval' && $style != 'd-none' )
                <td class="nk-tb-col {!!$style!!}">
                    {!!$row->time_interval!!}
                </td>
                @elseif($key == 'time_interval_between' && $style != 'd-none' )
                <td class="nk-tb-col {!!$style!!}">
                    {!!$row->time_interval_between!!}
                </td>
                @elseif($key == 'title' && $style != 'd-none' )
                <td class="nk-tb-col {!!$style!!}">
                    {!!$row->title!!}
                </td>
                @elseif($key == 'tag' && $style != 'd-none' )
                <td class="nk-tb-col {!!$style!!}">
                {!!convertTag($row->tag,$loadingSetting)!!}
                </td>
                @elseif($key == 'description' && $style != 'd-none' )
                <td class="nk-tb-col {!!$style!!}">
                    <span>
                        <a type="button" data-bs-container="body" data-bs-trigger="hover focus"
                            class="reloadPopover {!! $loadingSetting->table_link_click_button_style !!}"
                            data-bs-toggle="popover" data-bs-placement="top"
                            data-bs-content="{!!$row->description!!}"><span
                                class="text-ellipsis">{!!cutStringLog($row->description)!!}</span></a>
                    </span>
                </td>
                @elseif($key == 'photo_path' && $style != 'd-none' )

                <td class="nk-tb-col {!!$style!!}">
                </td>
                @elseif($key == 'log' && $style != 'd-none' )
                <td class="nk-tb-col {!!$style!!}">
                    <span>
                        @include('todo::includes.tables.actions.log', ['row' =>
                        $row,'loadingSetting'=>$loadingSetting])
                    </span>
                </td>
                @elseif($key == 'created_at' && $style != 'd-none' )
                <td class="nk-tb-col {!!$style!!}">

                    <span
                        class="{!!$loadingSetting->table_date_time_column_style!!}">{{convertDateTime($loadingSetting->table_date_time_format,$row->created_at)}}</span>
                </td>
                @elseif($key == 'updated_at' && $style != 'd-none' )
                <td class="nk-tb-col {!!$style!!}">

                    <span
                        class="{!!$loadingSetting->table_date_time_column_style!!}">{{convertDateTime($loadingSetting->table_date_time_format,$row->updated_at)}}</span>
                </td>
                @elseif($key == 'user_created' && $style != 'd-none' )
                <td class="nk-tb-col {!!$style!!}">
                    <a href="javascript:void(0);"
                        onclick="Livewire.dispatch('userActionInfo',{code : '{{ $row->user_created }}', custom:'corporation' })"
                        data-bs-toggle="modal" data-bs-target="#userActionInfo"
                        class="{!! $loadingSetting->table_link_click_button_style !!}">
                        <span>{!!$row->userCreate->name!!}</span>
                    </a>
                </td>
                @elseif($key == 'user_updated' && $style != 'd-none' )
                <td class="nk-tb-col {!!$style!!}">
                    <a href="javascript:void(0);"
                        onclick="Livewire.dispatch('userActionInfo',{code : '{{ $row->user_updated }}', custom:'corporation' })"
                        data-bs-toggle="modal" data-bs-target="#userActionInfo"
                        class="{!! $loadingSetting->table_link_click_button_style !!}">
                        <span>{!!$row->userUpdate->namne!!}</span>
                    </a>
                </td>
                @endif
                @endforeach
                @if($loadingSetting->table_todo_position_button_action == 1)
                <td class="nk-tb-col">
                    @include('todo::includes.tables.actions.button', ['row' => $row,'loadingSetting'=>$loadingSetting])
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>