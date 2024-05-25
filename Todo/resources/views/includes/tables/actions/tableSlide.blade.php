<div class="nk-block" wire:key="655446984354554ff7698544654135">
    <div class="custom-control custom-control-sm custom-checkbox ps-5 pb-1  pt-1">
        <input type="checkbox" class="custom-control-input" id="selectMutilId" wire:model.lazy="selected_status"
            onclick="Livewire.dispatch('selectMutilId')">
        <label class="custom-control-label overline-title overline-title-alt form-label-outlined" for="selectMutilId">
            {{ __('Chosen All') }}</label>
    </div>
    <div id="carouselExConInd" class="carousel slide" data-bs="carousel">
        <ol class="carousel-indicators" wire:ignore.seft>
            @foreach($listTodo as $key => $row)
            @if($key == 0)
            <li data-bs-target="#carouselExConInd" data-bs-slide-to="{{$key}}" class="active bg-gray-500"></li>
            @else
            <li data-bs-target="#carouselExConInd" class="bg-gray-500" data-bs-slide-to="{{$key}}"></li>
            @endif
            @endforeach
        </ol>
        <div class="carousel-inner">
        @foreach($listTodo as $keyMain => $row)
            @if($keyMain == 0)
            <div class="carousel-item active" wire:key="rowSl4544dside{{$row->id}}">
            @else
            <div class="carousel-item" wire:key="rowSlf46546dside{{$row->id}}">
                @endif
                <div class=" mx-auto col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-inner-group">
                            <div class="card-inner">
                                <div class="user-card user-card-s2">
                                    @include('todo::includes.tables.actions.logoSlide', ['row' =>
                                    $row->user,'todo' =>
                                    $row,'custom'
                                    =>'user','loadingSetting'=>$loadingSetting,'key'=>$keyMain.'54t57tr1641e67'])
                                </div>
                            </div>
                            <div class="card-inner card-inner-sm">
                                <ul class="btn-toolbar justify-center gx-1">
                                    <li>
                                        @if($row->notifiable_id == $getUserInfo->id)
                                        @include('todo::includes.tables.actions.button', ['row' =>
                                        $row,'loadingSetting'=>$loadingSetting])
                                        @endif
                                    </li>
                                </ul>
                            </div>
                            <div class="card-inner">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <div class="profile-stats">
                                            <div class="amount fs-7 pb-1">
                                                {!!convertDateTimeString($loadingSetting->table_date_time_format,$row->time)!!}
                                            </div>
                                            <div
                                                class="sub-text {!!$loadingSetting->table_button_date_lable_text_style!!}">
                                                {{ __('Time') }}</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="profile-stats">
                                            <div class="amount fs-7 pb-1">
                                                sssssssssssss
                                            </div>
                                            <div class="sub-text">{{ __('Classify') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-inner">
                                <h6 class="overline-title mb-2">Short Details</h6>
                                <div class="row g-3">
                                    @foreach($loadingSetting->table_todo_column as $key => $style)
                                    @if($key == 'reminder' && $style != 'd-none' )
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <span class="sub-text">{{ __('Reminder') }}</span>
                                        <span>{!!$loadingSetting->icon_reminder!!}{!!convertReminderTag($row->reminder,$loadingSetting)!!}</span>
                                    </div>
                                    @elseif($key == 'time_remaining' && $style != 'd-none' )
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <span class="sub-text">{{ __('Time_ Remaining') }}</span>
                                        <span>{!!$loadingSetting->icon_time_remaining!!}{!!$row->time_remaining!!}</span>
                                    </div>
                                    @elseif($key == 'time_interval' && $style != 'd-none' )
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <span class="sub-text">{{ __('Time Interval') }}</span>
                                        <span>{!!$loadingSetting->icon_time_interval!!}{!!$row->time_interval!!}</span>
                                    </div>
                                    @elseif($key == 'time_interval_between' && $style != 'd-none' )
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <span class="sub-text">{{ __('Time Interval Between') }}</span>
                                        <span>{!!$loadingSetting->icon_time_interval_between!!}{!!$row->time_interval_between!!}</span>
                                    </div>
                                    @elseif($key == 'title' && $style != 'd-none' )
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <span class="sub-text">{{ __('Title') }}</span>
                                        <span>{!!$loadingSetting->icon_title!!}{!!$row->title!!}</span>
                                    </div>
                                    @elseif($key == 'tag' && $style != 'd-none' )
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <span class="sub-text">{{ __('Tag') }}</span>
                                        <span>{!!$loadingSetting->icon_tag!!}{!!convertTag($row->tag,$loadingSetting)!!}</span>
                                    </div>
                                    @elseif($key == 'description' && $style != 'd-none' )
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <span class="sub-text">{{ __('Description') }}</span>
                                        <span>{!!$loadingSetting->icon_description!!}
                                            <a type="button" data-bs-container="body" data-bs-trigger="hover focus"
                                                class="reloadPopover {!! $loadingSetting->table_link_click_button_style !!}"
                                                data-bs-toggle="popover" data-bs-placement="top"
                                                data-bs-content="{!!$row->description!!}"><span
                                                    class="text-ellipsis">{!!cutStringLog($row->description)!!}</span></a>
                                        </span>
                                    </div>
                                    @elseif($key == 'photo_path' && $style != 'd-none' )
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <span class="sub-text">{{ __('Photo') }}</span>
                                        <span></span>
                                    </div>
                                    @elseif($key == 'created_at' && $style != 'd-none' )
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <span class="sub-text">{{ __('Created At') }}</span>
                                        <span>{!!$loadingSetting->icon_created_at!!} <span
                                                class="{!!$loadingSetting->table_date_time_column_style!!}">{{convertDateTime($loadingSetting->table_date_time_format,$row->created_at)}}</span></span>
                                    </div>
                                    @elseif($key == 'updated_at' && $style != 'd-none' )
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <span class="sub-text">{{ __('Updated At') }}</span>
                                        <span>{!!$loadingSetting->icon_updated_at!!} <span
                                                class="{!!$loadingSetting->table_date_time_column_style!!}">{{convertDateTime($loadingSetting->table_date_time_format,$row->updated_at)}}</span></span>
                                    </div>
                                    @elseif($key == 'user_created' && $style != 'd-none' )
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <span class="sub-text">{{ __('User Created') }}</span>
                                        <span>

                                            {!!$loadingSetting->icon_user_created!!}
                                            <a href="javascript:void(0);"
                                                onclick="Livewire.dispatch('userActionInfo',{code : '{{ $row->user_created }}', custom:'user' })"
                                                data-bs-toggle="modal" data-bs-target="#userActionInfo"
                                                class="{!! $loadingSetting->table_link_click_button_style !!}">
                                                <span>{!!$row->userCreate->name!!}</span>
                                            </a>
                                        </span>
                                    </div>
                                    @elseif($key == 'user_updated' && $style != 'd-none' )
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <span class="sub-text">{{ __('User Updated') }}</span>
                                        <span>
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
                    </div>
                </div>
                <div class="carousel-caption unset-position pb-5 ">
                    <span class="sub-text">{{ __('Page') }} {!!getPageNumber($keyMain,$listTodo)!!}</span>
                    <span class="sub-text">{{ __('Current User') }} : {!!$row->user->name!!}</span>
                    <span class="sub-text">{{ __('Next User') }} :
                        @if(isset($listTodo->items()[$keyMain+1])) @php echo($listTodo->items()[$keyMain+1]->user->name) @endphp @endif</span>
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="selected_{{$row->id}}"
                            value="{{$row->id}}" wire:model.lazy="selected.{{$row->id}}">
                        <label class="custom-control-label" for="selected_{{$row->id}}">
                            @if($loadingSetting->table_id_column_onOff) <a
                                class="{!!$loadingSetting->table_id_column_style!!}">{!!$row->id!!}</a> @endif
                        </label>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @if($loadingSetting->table_pagination_type != 0)
        <a class="carousel-control-prev unset-color unset-bottom mt-5" href="#carouselExConInd" role="button"
            data-bs-slide="prev">
            <em class="icon ni ni-back-ios xx-large"></em>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next unset-color unset-bottom mt-5" href="#carouselExConInd" role="button"
            data-bs-slide="next">
            <em class="icon ni ni-forward-ios xx-large"></em>
            <span class="visually-hidden">Next</span>
        </a>
        @endif

    </div>
</div>