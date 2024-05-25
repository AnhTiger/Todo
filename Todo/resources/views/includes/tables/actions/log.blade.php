@if(($row != null && isset($row->id)))
<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#sho3545ds45wLog{!!$row->id!!}" class="{!!$loadingSetting->table_link_click_button_style!!}">               
    <span class="text-ellipsis" >{!!$loadingSetting->icon_button_log!!}</span>
</a> 
<div wire:key = "logactions{!!$row->id!!}{!!mt_rand()!!}">
    <div class="modal fade {!!$loadingSetting->modal_view_more_info_form_style!!}" wire:ignore.self role="dialog" id="sho3545ds45wLog{!!$row->id!!}" tabindex="-1" aria-hidden="true" data-bs-keyboard="false">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">    
                    <pre><code >{!!prettyJson($row->log)!!}</code></pre>
                </div>
            </div>                
        </div>
    </div>
</div>
@endif