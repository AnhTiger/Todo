<div class="nk-block" wire:key="45616165ytrytry1560651654">
    <div class="custom-control custom-control-sm custom-checkbox ps-5 pb-1 pt-1">
        <input type="checkbox" class="custom-control-input" id="selectMutilId" wire:model.lazy="selected_status"
            onclick="Livewire.dispatch('selectMutilId')">
        <label class="custom-control-label overline-title overline-title-alt form-label-outlined"
            for="selectMutilId">{{ __('Chosen All') }}</label>
    </div>

    <div class="card-inner">
        <div class="timeline">

            <ul class="timeline-list">
                @foreach($listTodo as $keyMain => $row)
                <li class="timeline-item timeline-item-extend">
                    <div class="timeline-status bg-{!!randomColor()!!} is-outline"></div>
                    <div class="timeline-date timeline-date-extend">{!!$row->time!!} <em
                            class="icon ni ni-alarm-alt"></em>
                    </div>
                    <div class="timeline-data">
                        <h6 class="timeline-title link align-items-flex-start">
                            {!!$row->title!!}&emsp;

                            @include('todo::includes.tables.actions.buttonProcess',
                            ['row' => $row,'loadingSetting'=>$loadingSetting])
                        </h6>
                        <div class="timeline-des">
                            <p>{!!$row->description!!}</p>
                            <span class="time">{!!convertTag($row->tag,$loadingSetting)!!}</span>
                        </div>
                    </div>
                    <div class="custom-control custom-control-sm custom-checkbox notext check-box-process">
                        <input type="checkbox" class="custom-control-input" id="selected_{{$row->id}}"
                            value="{{$row->id}}" wire:model.lazy="selected.{{$row->id}}">
                        <label class="custom-control-label" for="selected_{{$row->id}}">
                            @if($loadingSetting->table_id_column_onOff) <a
                                class="{!!$loadingSetting->table_id_column_style!!}">{!!$row->id!!}</a> @endif
                        </label>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>