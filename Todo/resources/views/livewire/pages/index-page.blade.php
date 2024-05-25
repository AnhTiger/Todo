<div>
    @if($loadingSetting->table_todo_table_position_search)
    @if($loadingSetting->table_todo_compact_search)
    @include('todo::includes.tables.actions.searchCompact')
    @else
    @include('todo::includes.tables.actions.searchNormal')
    @endif
    @endif
    <!-- <div class="card-inner p-0 table-responsive"> -->
    @if($loadingSetting->table_todo_table_style == 1)
    @include('todo::includes.tables.actions.tableCompact')
    @elseif($loadingSetting->table_todo_table_style == 0)
    @include('todo::includes.tables.actions.tableNormal')
    @elseif($loadingSetting->table_todo_table_style == 2)
    @include('todo::includes.tables.actions.tableSlide')
    @elseif($loadingSetting->table_todo_table_style == 3)
    @include('todo::includes.tables.actions.tableProcess')
    @endif
    <div class="card-inner">
        <div class="g-3">
            {{ $listTodo->links(data: ['scrollTo' => false]) }}
        </div>
    </div>
    @if(!$loadingSetting->table_todo_table_position_search)
    @if($loadingSetting->table_todo_compact_search)
    @include('todo::includes.tables.actions.searchCompact')
    @else
    @include('todo::includes.tables.actions.searchNormal')
    @endif
    @endif
    @include('admin::partials.date_picker_js')
    @include('todo::includes.tables.actions.commonInfo')
    @include('todo::includes.tables.actions.userAction')
    @include('todo::includes.tables.actions.loadingStates')
    @include('admin::partials.modal')
    @include('admin::partials.select2_js_table')
    @include('admin::partials.noUiSlider')
    @include('admin::partials.dragula')
    @include('admin::partials.popover')
</div>