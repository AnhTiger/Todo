@extends('admin::layouts.master')
@section('content')
<!-- content @s -->
<div class="nk-block-head-content">
    <div class="nk-block-head-sub">
        <a wire:navigate.hover class="back-to" href="{{url()->previous()}}">
        <em class="icon ni ni-arrow-left"></em>
        <span>{{ __('Back') }}</span>
        </a>
    </div>                    
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title fw-normal">{{ __('todo.Todo') }}</h3>
                <div class="nk-block-des">
                    <p class="lead">{{ __('Notices relevant to you') }}
                </div>
            </div>
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            @can('todo-create')
                                @include('todo::includes.tables.actions.createButton')
                            @endcan
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>                
</div>
<div class="nk-block">
    <div class="card card-bordered card-preview">
        @can('todo-index')
        <livewire:todo::pages.index-page :key="496798965451200654687"   />
        @endcan
        @can('kpi-create')
        <livewire:todo::pages.action-page :id=0  :key="459798489465112654652341"   />
        @endcan
    </div>
</div>
<!-- content @e -->
@endsection