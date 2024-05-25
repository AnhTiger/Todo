@if(($row != null && isset($row->id)))
<div wire:key = "lqwewqrogoCard2actwtionsdddds{!!$row->id!!}" class="user-avatar unset-margin-right md unset-margin pb-2 {!!$loadingSetting->table_showhide_logo_style!!}" wire:key = "logoCard1actions{!!$row->id!!}">
    <a href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#viewrLrwdertwtrtoffgoCard{{ $row->code }}{{ $row->id }}"  class="{!! $loadingSetting->table_link_click_button_style !!}">            
        <img class="img-avatar img-120-cycle unset-max-width" alt = "{{$row->name}}_Avatar" src="{!!checkExistLogo($row->profile_photo_path)!!}"></img> 
    </a> 
    @if(checkUserOnline($row)== 1)
    <div class="status dot dot-lg dot-success"></div>
    @elseif(checkUserOnline($row)== 0)
    <div class="status dot dot-lg dot-danger"></div>
    @endif
</div>
<div class="user-info">
    <h6>
        <a href="javascript:void(0);" onclick="Livewire.dispatch('loadingCommonInfo',{id : {{ $todo->id }}, custom:'{!!$custom!!}' })"  data-bs-toggle="modal" data-bs-target="#commonInfo" class="{!!$loadingSetting->table_link_click_button_style!!}">
                {!!$row->name!!}{!!identifiedUserBelong($row->user_id,$listUserPriority,$loadingSetting)!!}
        </a> 
    </h6>
    <span class="sub-text fw-normal">{!!$loadingSetting->icon_email!!}<a href='mailto:{!!$row->email!!}'>{!!$row->email!!}</a></span>
</div>
<div wire:key = "rlogoCard2a534d6rsewrwctions{!!$row->id!!}"> 
    <div class="modal fade {!!$loadingSetting->modal_view_more_info_form_style!!}" wire:ignore.self role="dialog" id="viewrLrwdertwtrtoffgoCard{{ $row->code }}{{ $row->id }}" tabindex="-1" aria-hidden="true" data-bs-keyboard="false">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">{!!$row->name!!}</h6>
                    <a href="javascript:void(0);" class="close" data-bs-dismiss="modal" aria-label="Close">
                        {!!$loadingSetting->icon_exit!!}
                    </a>
                </div>  
                <div class="modal-body">    
                    <img class="rounded-top" style="max-height: {!!$loadingSetting->size_height_avatar!!}px; max-width: {!!$loadingSetting->size_width_avatar!!}px;" alt = "{!!$row->name!!}_Avatar" src="{!!checkExistLogo($row->profile_photo_path) !!}"></img> 
                    <a class= "sub-text {!!$loadingSetting->table_link_click_button_style_download !!}" download="{!!$row->profile_photo_path!!}" href="{!!checkExistLogo($row->profile_photo_path) !!}" title="action">{!!$loadingSetting->icon_download!!}{{ __('Download') }}</a>
                </div>
            </div>                
        </div>
    </div>
</div>
@endif