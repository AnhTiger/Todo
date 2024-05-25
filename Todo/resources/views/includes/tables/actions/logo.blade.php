@if(($row != null && isset($row->id)))
<div class="user-card" wire:key = "logo1acd5sad4366fsftions{!!$row->id!!}">
    <div class="user-avatar {!!$loadingSetting->table_showhide_logo_style!!}">
        <a href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#viewLwdfttedttsdtytryrydrtertogo{{ $row->code }}{{ $row->id }}"  class="{!! $loadingSetting->table_link_click_button_style !!}">            
            <img class="user-avatar img-avatar" alt = "{{$row->name}}_Avatar" src="{!!checkExistLogo($row->profile_photo_path)!!}"></img> 
        </a> 
        @if(checkUserOnline($row)== 1)
        <div class="status dot dot-lg dot-success"></div>
        @elseif(checkUserOnline($row)== 0)
        <div class="status dot dot-lg dot-danger"></div>
        @endif        
    </div>
    <div class="user-info">
        <a href="javascript:void(0);" onclick="Livewire.dispatch('loadingCommonInfo',{id : '{!!$todo->id!!}', custom:'{!!$custom!!}' })"  data-bs-toggle="modal" data-bs-target="#commonInfo" class="{!!$loadingSetting->table_link_click_button_style!!}">     
            <span class="link span">{!!$row->name!!}{!!identifiedUserBelong($row->id,$listUserPriority,$loadingSetting)!!}</span>
        </a> 
    </div>  
</div>
<div wire:key = "logo2actr5wqerdwqerir454325ons{!!$row->id!!}">
    <div class="modal fade {!!$loadingSetting->modal_view_more_info_form_style!!}" wire:ignore.self role="dialog" id="viewLwdfttedttsdtytryrydrtertogo{{ $row->code }}{{ $row->id }}" tabindex="-1" aria-hidden="true" data-bs-keyboard="false">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">{!!$row->name!!}</h6>
                    <a href="javascript:void(0);" class="close" data-bs-dismiss="modal" aria-label="Close">
                        {!!$loadingSetting->icon_exit!!}
                    </a>
                </div>  
                <div class="modal-body">    
                    <img class="rounded-top" style="max-height: {!!$loadingSetting->size_height_avatar!!}px; max-width: {!!$loadingSetting->size_width_avatar!!}px;"  alt = "{!!$row->name!!}_Avatar" src="{!!checkExistLogo($row->profile_photo_path) !!}"></img> 
                    <a class= "sub-text {!!$loadingSetting->table_link_click_button_style_download !!}" download="{!!$row->profile_photo_path!!}" href="{!!checkExistLogo($row->profile_photo_path) !!}" title="action">{!!$loadingSetting->icon_download!!}{{ __('Download') }}</a>
                </div>
            </div>                
        </div>
    </div>
</div>
@endif