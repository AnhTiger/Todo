  
<div wire:key = "45645f6dc47sss6545fd47ddf65ds465">
    <div class="modal fade {!!$loadingSetting->modal_view_more_info_form_style!!}" wire:ignore.self role="dialog" id="userActionInfo" tabindex="-1" aria-hidden="true" data-bs-keyboard="false">
        <div class="modal-dialog {!!$loadingSetting->modal_view_more_info_form_style_size!!}" role="document">
            <div class="modal-content">
                @if($check_more_info_user_update !=null)
                <div class="modal-header">
                <h6 class="modal-title">{{ __('User information is obtained when updating previous data') }}</h6>
                    <a href="javascript:void(0);" class="close" data-bs-dismiss="modal" aria-label="Close">
                        {!!$loadingSetting->icon_exit!!}
                    </a>
                </div>

                @if($loadingSetting->interface_type_more_info_table)
                <div class="card card-bordered card-preview">
                    <div class="card-inner">
                        @if(isset($check_more_info_user_update->user_name) || isset($check_more_info_user_update->team_name) || isset($check_more_info_user_update->department_name) ||  isset($check_more_info_user_update->company_name) ||  isset($check_more_info_user_update->corporation_name) ||  isset($check_more_info_user_update->position_name))
                        <ul class="nav nav-tabs mt-n3 active" role="tablist">
                            @if(isset($check_more_info_user_update->user_name))
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#userAction" aria-selected="true" tabindex="-1" role="tab">
                                {!!$loadingSetting->icon_user!!}
                                <span>{{ __('User') }}</span>
                                </a>
                            </li>
                            @endif  
                            @if(isset($check_more_info_user_update->checkBelongUserInculue))
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" onclick="Livewire.dispatch('refreshcommonInfoTableDbUser')"   data-bs-toggle="tab" href="#48789v8975f78746n53897568473865743" aria-selected="false" tabindex="-1" role="tab">
                                {!!$loadingSetting->icon_user_belong!!}
                                <span>{{ __('User Belongs') }}</span>
                                </a>
                            </li>
                            @endif                                                     
                        </ul>                        
                        @endif
                        @if(isset($check_more_info_user_update->user_name) || isset($check_more_info_user_update->team_name) || isset($check_more_info_user_update->department_name) || isset($check_more_info_user_update->company_name) || isset($check_more_info_user_update->corporation_name) || isset($check_more_info_user_update->position_name))
                        <div class="tab-content" id ="organization_information_more_info_all">
                            @if(isset($check_more_info_user_update->user_name))
                            <div class="tab-pane active" id="userAction" role="tabpanel">
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_logo!!}{{ __('Logo') }} :</span>
                                    <div><img  style="max-height: {!!$loadingSetting->size_height_avatar!!}px; max-width: {!!$loadingSetting->size_width_avatar!!}px;"  alt = "{!!$check_more_info_user_update->user_profile_photo_path!!}_Avatar" src="{{checkExistLogo($check_more_info_user_update->user_profile_photo_path) }}"></img>
                                    <a class= "sub-text {!!$loadingSetting->table_link_click_button_style_download !!}" download="{!!$check_more_info_user_update->user_profile_photo_path!!}" href="{!!checkExistLogo($check_more_info_user_update->user_profile_photo_path) !!}" title="action">{!!$loadingSetting->icon_download!!}{{ __('Download') }}</a>
                                    </div>                                      
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_name!!}{{ __('Name') }} :</span>
                                    <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!$check_more_info_user_update->user_name!!}
                                    @can('user-detail')
                                        <a 	wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.users.detail', now()->addMinutes($loadingSetting->time_expired_url), ['user' => $check_more_info_user_update->user_id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
                                    @endcan
                                    </div>                                                   
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_sex!!}{{ __('Sex') }} :</span>
                                    <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!checkSex($check_more_info_user_update->user_sex,$loadingSetting) !!}</div>                                    
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_email!!}{{ __('Email') }} :</span>
                                    <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!arrayToTextBreakLine($check_more_info_user_update->user_email)!!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_phone!!}{{ __('Phone') }} :</span>
                                    <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!arrayToTextBreakLine($check_more_info_user_update->user_phone)!!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_address!!}{{ __('Address') }} :</span>
                                    <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!arrayToTextBreakLine($check_more_info_user_update->user_address)!!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_birth_day!!}{{ __('Birth Day') }} :</span>
                                    <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!convertDateTimeString($loadingSetting->table_date_format,$check_more_info_user_update->user_birth_day)!!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_team!!}{{ __('Team') }} :</span>
                                    <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!$check_more_info_user_update->team_name!!}</div>     
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_position!!}{{ __('Position') }} :</span>
                                    <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!$check_more_info_user_update->position_name!!}</div>  
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_department!!}{{ __('Department') }} :</span>
                                    <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!$check_more_info_user_update->department_name!!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_company!!}{{ __('Company') }} :</span>
                                    <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!$check_more_info_user_update->company_name!!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_corporation!!}{{ __('Corporation') }} :</span>
                                    <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!$check_more_info_user_update->corporation_name!!}</div>
                            </div>
                            @endif    
                            @if(isset($check_more_info_user_update->checkBelongUserInculue)) 
                            <div class="tab-pane" id="48789v8975f78746n53897568473865743" role="tabpanel">
                                <span class ="sub-text overline-title overline-title-alt ">{{ __('Have total')}} : {{count($check_more_info_user_update->checkBelongUserInculue)}} {{ __('users') }}</span>                                
                                <table id="commonInfoTableDb" class="{!!$loadingSetting->style_table!!} w-90">
                                    <thead>
                                        <tr>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($check_more_info_user_update->checkBelongUserInculue as $key=> $row)                                     
                                        <tr>
                                            <td>                                        
                                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{{ __('No.') }}{!!$key+1!!} :</span>
                                                <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">
                                                    <div class="user-card" wire:key = "logo1actions{!!$row->id!!}">
                                                        <div class="user-avatar {!!$loadingSetting->table_showhide_logo_style!!}">
                                                            <a href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#viewLogo{{ $row->id }}"  class="text-success">            
                                                            <img class="user-avatar img-avatar" alt = "{{$row->name}}_Avatar" src="{!!checkExistLogo($row->profile_photo_path)!!}"></img> 
                                                            @if(checkUserOnline($row))
                                                            <div class="status dot dot-lg dot-success"></div>
                                                            @else
                                                            <div class="status dot dot-lg dot-danger"></div>
                                                            @endif
                                                            </a> 
                                                        </div>
                                                        <div class="user-info">             
                                                            <span class="link span">{!!$row->name!!}{!!identifiedUserBelong($row->id,$listUserPriority,$loadingSetting)!!}</span>
                                                            @can('user-detail')
                                                                <a 	wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.users.detail', now()->addMinutes($loadingSetting->time_expired_url), ['user' => $row->id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
                                                            @endcan
                                                        </div>  
                                                    </div>                               
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach      
                                    </tbody>
                                </table>
                            </div>
                            @endif                             
                        </div>
                        @endif                        
                    </div>
                </div>
                @else
                <div class="card card-bordered card-preview">
                    <div class="card-inner">
                        <div class="row g-gs">
                            <div class="col-md-4">
                                @if(isset($check_more_info_user_update->user_name) || isset($check_more_info_user_update->team_name) || isset($check_more_info_user_update->department_name) ||  isset($check_more_info_user_update->company_name) || isset($check_more_info_user_update->corporation_name) || isset($check_more_info_user_update->position_name))
                                <ul class="nav link-list-menu border border-light round m-0" role="tablist">
                                    @if(isset($check_more_info_user_update->user_name))
                                    <li>
                                        <a class="active" data-bs-toggle="tab" href="#userAction" aria-selected="true" tabindex="-1" role="tab">{!!$loadingSetting->icon_user!!}{{ __('User') }}</a>
                                    </li>
                                    @endif
                                    @if(isset($check_more_info_user_update->checkBelongUserInculue))
                                    <li>
                                        <a data-bs-toggle="tab" onclick="Livewire.dispatch('refreshcommonInfoTableDbUser')"   href="#430875546557647465b456456576" aria-selected="false" tabindex="-1" role="tab">{!!$loadingSetting->icon_user_belong!!}{{ __('User Belongs') }}</a>
                                    </li>                                    
                                    @endif
                                </ul>
                                @endif                                
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content" id ="organization_information_more_info_all">
                                    @if(isset($check_more_info_user_update->user_name))
                                    <div class="tab-pane active" id="userAction" role="tabpanel">
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_logo!!}{{ __('Logo') }} :</span>
                                            <div><img style="max-height: {!!$loadingSetting->size_height_avatar!!}px; max-width: {!!$loadingSetting->size_width_avatar!!}px;"  alt = "{!!$check_more_info_user_update->user_profile_photo_path!!}_Avatar" src="{{checkExistLogo($check_more_info_user_update->user_profile_photo_path) }}"></img>
                                            <a class= "sub-text {!!$loadingSetting->table_link_click_button_style_download !!}" download="{!!$check_more_info_user_update->user_profile_photo_path!!}" href="{!!checkExistLogo($check_more_info_user_update->user_profile_photo_path) !!}" title="action">{!!$loadingSetting->icon_download!!}{{ __('Download') }}</a>
                                            </div>                                               
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_name!!}{{ __('Name') }} :</span>
                                            <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!$check_more_info_user_update->user_name!!}
                                            @can('user-detail')
                                                <a 	wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.users.detail', now()->addMinutes($loadingSetting->time_expired_url), ['user' => $check_more_info_user_update->user_id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
                                            @endcan
                                            </div>                                                           
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_sex!!}{{ __('Sex') }} :</span>
                                            <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!checkSex($check_more_info_user_update->user_sex,$loadingSetting) !!}</div>                                    
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_email!!}{{ __('Email') }} :</span>
                                            <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!arrayToTextBreakLine($check_more_info_user_update->user_email)!!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_phone!!}{{ __('Phone') }} :</span>
                                            <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!arrayToTextBreakLine($check_more_info_user_update->user_phone)!!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_address!!}{{ __('Address') }} :</span>
                                            <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!arrayToTextBreakLine($check_more_info_user_update->user_address)!!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_birth_day!!}{{ __('Birth Day') }} :</span>
                                            <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!convertDateTimeString($loadingSetting->table_date_format,$check_more_info_user_update->user_birth_day)!!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_team!!}{{ __('Team') }} :</span>
                                            <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!$check_more_info_user_update->team_name!!}</div>     
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_position!!}{{ __('Position') }} :</span>
                                            <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!$check_more_info_user_update->position_name!!}</div>  
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_department!!}{{ __('Department') }} :</span>
                                            <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!$check_more_info_user_update->department_name!!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_company!!}{{ __('Company') }} :</span>
                                            <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!$check_more_info_user_update->company_name!!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_corporation!!}{{ __('Corporation') }} :</span>
                                            <div class="{!!$loadingSetting->interface_type_organization_information_style_value!!}">{!!$check_more_info_user_update->corporation_name!!}</div>
                                    </div>
                                    @endif                                     
                                    @if(isset($check_more_info_user_update->checkBelongUserInculue)) 
                                    <div class="tab-pane" id="430875546557647465b456456576" role="tabpanel">
                                        <span class ="sub-text overline-title overline-title-alt ">{{ __('Have total')}} : {{count($check_more_info_user_update->checkBelongUserInculue)}} {{ __('users') }}</span>                                       
                                        <table id="commonInfoTableDb" class="{!!$loadingSetting->style_table!!} w-90">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($check_more_info_user_update->checkBelongUserInculue as $key=> $row)                                     
                                                <tr>
                                                    <td>                                        
                                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{{ __('No.') }}{!!$key+1!!} :</span>
                                                        <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">
                                                            <div class="user-card" wire:key = "logo1a2345325ctions{!!$row->id!!}">
                                                                <div class="user-avatar {!!$loadingSetting->table_showhide_logo_style!!}">
                                                                    <a href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#viewLogo{{ $row->id }}"  class="text-success">            
                                                                    <img class="user-avatar img-avatar" alt = "{{$row->name}}_Avatar" src="{!!checkExistLogo($row->profile_photo_path)!!}"></img> 
                                                                    @if(checkUserOnline($row))
                                                                    <div class="status dot dot-lg dot-success"></div>
                                                                    @else
                                                                    <div class="status dot dot-lg dot-danger"></div>
                                                                    @endif
                                                                    </a> 
                                                                </div>
                                                                <div class="user-info">             
                                                                    <span class="link span">{!!$row->name!!}{!!identifiedUserBelong($row->id,$listUserPriority,$loadingSetting)!!}</span>
                                                                    @can('user-detail')
                                                                        <a 	wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.users.detail', now()->addMinutes($loadingSetting->time_expired_url), ['user' => $row->id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
                                                                    @endcan
                                                                </div>  
                                                            </div>                               
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach      
                                            </tbody>
                                        </table>
                                    </div>
                                    @endif                                                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                @endif 
                @else
                <div class="modal-header">
                    <a href="javascript:void(0);" class="close" data-bs-dismiss="modal" aria-label="Close">
                        {!!$loadingSetting->icon_exit!!}
                    </a>
                    @include('admin::partials.placeholder')
                </div>              
                @endif               
            </div>                
        </div>
    </div>
    <script>
        var myModalEl = document.getElementById('userActionInfo')
        myModalEl.addEventListener('hidden.bs.modal', function (event) {
            Livewire.dispatch('resetuserActionInfo');
        })
    </script>    
    <script>
        $(document).ready( function () {
            Livewire.on('refreshcommonInfoTableDbUser', function () {
                jQuery(document).ready(function () {
                    $('#commonInfoTableDb').DataTable( {
                        searching: false,
                        retrieve: true,
                        pageLength: {{$loadingSetting->table_notification_perPage}},
                        lengthMenu: {{prettyJson($loadingSetting->setPerPageAccepted)}},
                        language: {
                            url: '{{asset('public/backend/crm/js/databasevi.json')}}',
                        },
                    });       
                });           
            });        
        });            
    </script>    

</div>