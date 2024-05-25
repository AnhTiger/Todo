@if (isset($row->status))
    @if(loadingSetting()->table_status_component_type == "string")
        @if ($row->status == 1)
            <span class="{{loadingSetting()->table_status_component_activated_style}}">{{loadingSetting()->table_status_component_activated_string}}</span>
        @elseif ($row->status == 10)
            <span class="{{loadingSetting()->table_status_component_in_process_style}}">{{loadingSetting()->table_status_component_in_process_string}}</span>
        @elseif ($row->status == 0)
            <span class="{{loadingSetting()->table_status_component_deactivated_style}}">{{loadingSetting()->table_status_component_deactivated_string}}</span>
        @endif
    @elseif(loadingSetting()->table_status_component_type == "icon")
        @if ($row->status == 1)
        <svg style="width:1.2em;height:1.2em;" class="d-inline-block text-success" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
        </svg>        
        @elseif ($row->status == 10)
        <svg style="width:1.2em;height:1.2em;" class="d-inline-block text-success" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
        </svg>        
        @elseif ($row->status == 0)
        <svg style="width:1.2em;height:1.2em;" class="d-inline-block text-danger" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
        </svg>           
        @endif
    @endif
@endif