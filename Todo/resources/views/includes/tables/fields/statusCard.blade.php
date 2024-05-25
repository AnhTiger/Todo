@if (isset($row->status))
    @if(loadingSetting()->table_status_component_type == "string")
        @if ($row->status)
            <div class="team-status bg-success text-white">
              {!!loadingSetting()->icon_status_success!!}
            </div>
        @else
            <div class="team-status bg-danger text-white">
              {!!loadingSetting()->icon_status_error!!}
            </div>
        @endif
    @elseif(loadingSetting()->table_status_component_type == "icon")
        @if ($row->status)
            <div class="team-status bg-success text-white">
              {!!loadingSetting()->icon_status_success!!}
            </div>
        @else
            <div class="team-status bg-danger text-white">
              {!!loadingSetting()->icon_status_error!!}
            </div>  
        @endif
    @endif
@endif