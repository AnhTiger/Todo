@if(($row != null && isset($row->id)))
<a href="javascript:void(0);"
    onclick="Livewire.dispatch('loadingCommonInfo',{id : '{!!$todo->id!!}', custom:'{!!$custom!!}' })"
    data-bs-toggle="modal" data-bs-target="#commonInfo" class="{!!$loadingSetting->table_link_click_button_style!!}">
    <span
        class="link span">{!!$row->name!!}{!!identifiedUserBelong($row->id,$listUserPriority,$loadingSetting)!!}</span>
</a>
@endif