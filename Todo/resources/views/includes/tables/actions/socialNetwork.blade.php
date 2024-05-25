<li class="nk-block-tools-opt">
    <a href="javascript:void(0);"
        data-bs-toggle="modal" data-bs-target="#viewSocialNetwork{{$row->id}}" >@if(is_array(json_decode($row->social_network,true)) && count(json_decode($row->social_network,true))> 0)<img src="{!!$loadingSetting->social_network_gif_column!!}" class="w-40px">@endif
    </a>
</li>
<div wire:key = "socialNetwFSDFDork{!!$row->id!!}">  
    <div class="modal fade {!!$loadingSetting->modal_view_more_info_form_style!!}"  role="dialog" id="viewSocialNetwork{{$row->id}}" tabindex="-1" aria-hidden="true" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered {!!$loadingSetting->modal_view_more_info_form_style_size!!}" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('Social Network') }}</h5>
                    <a href="javascript:void(0);" class="close" data-bs-dismiss="modal" aria-label="Close">
                        {!!$loadingSetting->icon_exit!!}
                    </a>
                </div>
                <div class="modal-body">
                    <div class="card card-bordered card-full">
                        <div class="card-inner-group">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">{{ __('List') }}</h6>
                                    </div>
                                    <div class="card-tools">
                                        <a wire:navigate.hover href="{{ route('admin.option.index') }}" class="link">{{ __('Create more social networks') }} <span class="text-danger">{!!$loadingSetting->icon_link_to!!}</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-inner card-inner-md">
                                @if(is_array(json_decode($row->social_network,true)))
                                @foreach (json_decode($row->social_network,true) as $key=> $StatusNetWork)
                                <div class="user-card">
                                    <div class="user-avatar bg-primary-dim">
                                        <img class="user-avatar img-avatar" src="{!!getIconStatus($key,$this->getStatusParrent)!!}"></img>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">{!!$key!!}</span>
                                        <span class="sub-text"><b>{{ __('Url') }}</b> : <p class="ff-italic">{!!$StatusNetWork!!}</p></span>
                                    </div>
                                    <div class="user-action">
                                        <div class="drodown">
                                            <li class="col-sm-6 col-lg-6 w-100">
                                                <a href="{{$StatusNetWork}}" class="{!!$loadingSetting->social_network_button!!}"><span >{{ __('Connect to') }} {!!$key!!}</span>
                                                    {!!$loadingSetting->icon_back_right!!}
                                                </a>
                                            </li>
                                        </div>
                                    </div>
                                </div><br>                                         
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
</div>