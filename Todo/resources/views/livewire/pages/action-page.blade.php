<div>
    <div class="modal fade {{$loadingSetting->modal_action_style}} " wire:ignore.self role="dialog"
        id="action-todo-table" tabindex="-1" aria-hidden="true" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered {{$loadingSetting->modal_action_style_size}}" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@if ($format_form == 'create') {{ __('Create') }} @elseif ($format_form ==
                        'edit') {{ __('Edit') }} @elseif ($format_form == 'show') {{ __('Info') }} @endif
                        {{ __('Todo List') }} </h5>
                    <a href="javascript:void(0);" class="close" data-bs-dismiss="modal" aria-label="Close">
                        {!!$loadingSetting->icon_exit!!}
                    </a>
                </div>
                <div class="modal-body">
                    <form class="gy-3"
                        wire:submit.prevent="@if ($format_form == 'create') create @elseif ($format_form == 'edit') edit  @elseif ($format_form == 'show') show @endif">
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="user_id">{{ __('User') }}<span
                                            class="required">*</span></label>
                                    <span class="form-note">{{ __('The Name of User') }}</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap" @if($first_action_load) wire:ignore @endif>
                                        <select {{ $format_edit_disabled }} class="form-select  action-modal-select2"
                                            id="user_id" wire:model.lazy="form.user_id" data-search="on"
                                            data-placeholder="{{ __('Select Name') }}">
                                            <option data-classify='user' value='null'>{{ __('Select Name') }}</option>
                                            @foreach($listUser as $item)
                                            <option data-imagesrc='{!!checkExistLogo($item->profile_photo_path)!!}'
                                                data-name='{!!$item->name!!}' data-code='{!!$item->code!!}'
                                                data-description='{!!$item->description!!}' value="{{ $item->id }}">
                                                {{ __('User Name') }} : {{ $item->name }} - {{ __('Description') }} :
                                                {{ $item->description }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('form.user_id') <span class="invalid">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="title">{{ __('Title') }} <span
                                            class="required">*</span></label>
                                    <span class="form-note">{{ __('Title') }}</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" id="title" class="form-control @error('title') error @enderror"
                                            wire:model.lazy="form.title" placeholder="{{ __('Title') }}">
                                        @error('form.title') <span class="invalid">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="time">{{ __('Time') }}<span
                                            class="required">*</span></label>
                                    <span class="form-note">{{ __('Time to receive notification') }}</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-left">
                                            {!!$loadingSetting->icon_calendar!!}
                                        </div>
                                        <input type="text"
                                            class="form-control  date-picker-form @error('color') error @enderror"
                                            data-date-format="yyyy-mm-dd" wire:model.lazy="form.time"
                                            placeholder="{{ __('Date') }}">
                                        @error('form.time') <span class="invalid">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="tag">{{ __('Tag') }}<span
                                            class="required">*</span></label>
                                    <span
                                        class="form-note">{{ __('Tags related to the project') }}</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap" wire:ignore>
                                        <input type="text" id="tag"
                                            class="form-control @error('tag') error @enderror"
                                            wire:model.lazy="form.tag" placeholder="{{ __('Tag') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="status">{{ __('Reminder') }}</label>
                                    <span class="form-note">{{ __('Type of reminder.') }}</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <ul class="row g-3 overflow-y-auto">
                                            @include('todo::includes.tables.actions.reminderList',
                                            ['loadingSetting'=>$loadingSetting,'getUserInfo'=>$getUserInfo,'keyMain'=>'54tdgf878r97t987r954df987'])
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="status">{{ __('Repeat Countdown Timer') }}</label>
                                    <span
                                        class="form-note">{{ __('Time to catch notice before the time comes.') }}</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap number-spinner-wrap">
                                        <button type="button" class="btn btn-icon btn-outline-light number-spinner-btn number-minus"
                                             onclick="@this.set('form.time_interval', parseInt(parseInt($(this).next().val())-1))" >
                                            <em class="icon ni ni-minus"></em>
                                        </button>
                                        <input type="number" class="form-control number-spinner" value="1"
                                            wire:model.live="form.time_interval" onclick="Livewire.dispatch('actionChangeButtonSpiner',{key :'time_interval',value:$(this).val() })">
                                        <button type="button" class="btn btn-icon btn-outline-light number-spinner-btn number-plus"
                                            onclick="@this.set('form.time_interval', parseInt(parseInt($(this).prev().val())+1))">
                                            <em class="icon ni ni-plus"></em>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="status">{{ __('Time Remaining') }}</label>
                                    <span class="form-note">{{ __('Number of possible repetitions.') }}</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap number-spinner-wrap">
                                        <button type="button" class="btn btn-icon btn-outline-light number-spinner-btn number-minus"
                                             onclick="@this.set('form.time_remaining', parseInt(parseInt($(this).next().val())-1))" >
                                            <em class="icon ni ni-minus"></em>
                                        </button>
                                        <input type="number" class="form-control number-spinner" value="1"
                                            wire:model.live="form.time_remaining" onclick="Livewire.dispatch('actionChangeButtonSpiner',{key :'time_remaining',value:$(this).val() })">
                                        <button type="button" class="btn btn-icon btn-outline-light number-spinner-btn number-plus"
                                            onclick="@this.set('form.time_remaining', parseInt(parseInt($(this).prev().val())+1))">
                                            <em class="icon ni ni-plus"></em>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"
                                        for="status">{{ __('Time interval between notifications') }}</label>
                                    <span
                                        class="form-note">{{ __('Calculate the exact moment. Otherwise, the system may miss notifications') }}</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap number-spinner-wrap">
                                        <button type="button" class="btn btn-icon btn-outline-light number-spinner-btn number-minus"
                                             onclick="@this.set('form.time_interval_between', parseInt(parseInt($(this).next().val())-1))" >
                                            <em class="icon ni ni-minus"></em>
                                        </button>
                                        <input type="number" class="form-control number-spinner" value="1"
                                            wire:model.live="form.time_interval_between" onclick="Livewire.dispatch('actionChangeButtonSpiner',{key :'time_interval_between',value:$(this).val() })">
                                        <button type="button" class="btn btn-icon btn-outline-light number-spinner-btn number-plus"
                                            onclick="@this.set('form.time_interval_between', parseInt(parseInt($(this).prev().val())+1))">
                                            <em class="icon ni ni-plus"></em>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="status">{{ __('Status') }}<span
                                            class="required">*</span></label>
                                    <span class="form-note">{{ __('Status for the record') }}</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap" @if($first_action_load) wire:ignore @endif>
                                        <select class="form-select  action-modal-select2" id="status"
                                            wire:model.lazy="form.status" data-search="on"
                                            data-placeholder="{{ __('Select Source') }}">
                                            <option data-classify='todo_null' value='null'>{{ __('Select Status') }}
                                            </option>
                                            <option data-classify='todo' value="0">{{ __('Prevent') }}</option>
                                            <option data-classify='todo' value="1">{{ __('Watting') }}
                                            </option>
                                            <option data-classify='todo' value="2">{{ __('Done') }}</option>
                                        </select>
                                        @error('form.status') <span class="invalid">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="description">{{ __('Description') }}</label>
                                    <span class="form-note">{{ __('The description for the record') }}</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <x-input.tinymce wire:model.lazy="form.description" />
                                        @error('form.description') <span class="invalid">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group" {{ $format_edit_hidden }}>
                                    <label class="form-label" for="log">{{ __('Log') }}</label>
                                    <span
                                        class="form-note">{{ __('The log for the record,auto created by System') }}</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap" {{ $format_edit_hidden }}>
                                        <textarea class="form-control no-resize" {{ $format_edit_hidden }}
                                            wire:model.defer="form.log"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-lg-7 offset-lg-5">
                                <div class="form-group mt-2">
                                    @if ($format_form == 'create')
                                    <button type="submit" class="btn btn-primary">
                                        {!!$loadingSetting->icon_button_save!!}
                                        <span>{{ __('Create') }}</span>
                                    </button>
                                    @elseif ($format_form == 'edit')
                                    <button type="submit" class="btn btn-primary">
                                        {!!$loadingSetting->icon_button_save!!}
                                        <span>{{ __('Update') }}</span>
                                    </button>
                                    @elseif ($format_form == 'show')
                                    @endif
                                    <a wire:navigate.hover href="{{ route('admin.kpis.index') }}" class="btn btn-light">
                                        {!!$loadingSetting->icon_back_left_fill!!}
                                        <span>{{ __('Back') }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- select region modal -->
    @include('admin::partials.modal')
    @include('admin::partials.select2_js')
    @include('admin::partials.tagify_js_tag')
    @include('admin::partials.date_picker_js')
</div>