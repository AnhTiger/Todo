<div wire:key = "4y65t7y897t647657y89768">    
    <div class="modal fade {!!$loadingSetting->modal_view_more_info_form_style!!}" wire:ignore.self role="dialog" id="commonInfo" tabindex="-1" aria-hidden="true" data-bs-keyboard="false">
        <div class="modal-dialog {!!$loadingSetting->modal_view_more_info_form_style_size!!}" role="document">
            <div class="modal-content">
                @if($check_more_info !=null)
                <div class="modal-header">
                <h6 class="modal-title">{{ __('Information') }} {{$check_more_info_actived_value}}</h6>
                    <a href="javascript:void(0);" class="close" data-bs-dismiss="modal" aria-label="Close">
                        {!!$loadingSetting->icon_exit!!}
                    </a>
                </div>
                @if($loadingSetting->interface_type_more_info_table)
                <div class="card card-preview">
                    <div class="card-inner">
                        @if(isset($check_more_info->user_name) || isset($check_more_info->team_name) || isset($check_more_info->department_name) ||  isset($check_more_info->company_name) ||  isset($check_more_info->corporation_name) ||  isset($check_more_info->position_name))
                        <ul class="nav nav-tabs mt-n3" role="tablist">
                            @if(isset($check_more_info->user_name))
                            <li class="nav-item" role="presentation">
                                <a class="nav-link @if($check_more_info_actived =="user_name" ) active @endif" data-bs-toggle="tab" href="#organization_information_1_more_info" aria-selected="true" tabindex="-1" role="tab">
                                {!!$loadingSetting->icon_user!!}
                                <span>{{ __('User') }}</span>
                                </a>
                            </li>  
                            @endif
                            @if(isset($check_more_info->position_name))                           
                            <li class="nav-item" role="presentation">
                                <a class="nav-link @if($check_more_info_actived =="position_name" ) active @endif" data-bs-toggle="tab" href="#organization_information_2_more_info" aria-selected="true" tabindex="-1" role="tab">
                                {!!$loadingSetting->icon_position!!}
                                <span>{{ __('Position') }}</span>
                                </a>
                            </li>  
                            @endif
                            @if(isset($check_more_info->team_name))  
                            <li class="nav-item" role="presentation">
                                <a class="nav-link @if($check_more_info_actived =="team_name" ) active @endif" data-bs-toggle="tab" href="#organization_information_3_more_info" aria-selected="true" tabindex="-1" role="tab">
                                {!!$loadingSetting->icon_team!!}
                                <span>{{ __('Team') }}</span>
                                </a>
                            </li>
                            @endif
                            @if(isset($check_more_info->department_name))
                            <li class="nav-item" role="presentation">
                                <a class="nav-link @if($check_more_info_actived =="department_name" ) active @endif" data-bs-toggle="tab" href="#organization_information_4_more_info" aria-selected="false" tabindex="-1" role="tab">
                                {!!$loadingSetting->icon_department!!}
                                <span>{{ __('Department') }}</span>
                                </a>
                            </li>
                            @endif
                            @if(isset($check_more_info->company_name))
                            <li class="nav-item" role="presentation">
                                <a class="nav-link @if($check_more_info_actived =="company_name" ) active @endif" data-bs-toggle="tab" href="#organization_information_5_more_info" aria-selected="false" tabindex="-1" role="tab">
                                {!!$loadingSetting->icon_company!!}
                                <span>{{ __('Company') }}</span>
                                </a>
                            </li>
                            @endif
                            @if(isset($check_more_info->corporation_name))
                            <li class="nav-item" role="presentation">
                                <a class="nav-link @if($check_more_info_actived =="corporation_name" ) active @endif" data-bs-toggle="tab" href="#organization_information_6_more_info" aria-selected="false" tabindex="-1" role="tab">
                                {!!$loadingSetting->icon_corporation!!}
                                <span>{{ __('Corporation') }}</span>
                                </a>
                            </li>
                            @endif
                            @if(isset($check_more_info->checkBelongUserInculue))   
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" onclick="Livewire.dispatch('refreshcommonInfoTableDbUser')"   data-bs-toggle="tab" href="#organization_information_7_more_info" aria-selected="false" tabindex="-1" role="tab">
                                {!!$loadingSetting->icon_user_belong!!}
                                <span>{{ __('User Belongs') }}</span>
                                </a>
                            </li>
                            @endif      
                            @if(isset($check_more_info->checkBelongTeamInculue))
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" onclick="Livewire.dispatch('refreshcommonInfoTableDbTeam')"   data-bs-toggle="tab" href="#organization_information_8_more_info" aria-selected="false" tabindex="-1" role="tab">
                                {!!$loadingSetting->icon_team_belong!!}
                                <span>{{ __('Team Belongs') }}</span>
                                </a>
                            </li>
                            @endif  
                            @if(isset($check_more_info->checkBelongDepartmentInculue))   
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" onclick="Livewire.dispatch('refreshcommonInfoTableDbDepartment')"   data-bs-toggle="tab" href="#organization_information_9_more_info" aria-selected="false" tabindex="-1" role="tab">
                                {!!$loadingSetting->icon_department_belong!!}
                                <span>{{ __('Department Belongs') }}</span>
                                </a>
                            </li>
                            @endif  
                            @if(isset($check_more_info->checkBelongCompanyInculue))  
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" onclick="Livewire.dispatch('refreshcommonInfoTableDbCompany')"   data-bs-toggle="tab" href="#organization_information_10_more_info" aria-selected="false" tabindex="-1" role="tab">
                                {!!$loadingSetting->icon_company_belong!!}
                                <span>{{ __('Company Belongs') }}</span>
                                </a>
                            </li>
                            @endif
                        </ul>
                        @endif
                        @if(isset($check_more_info->user_name) || isset($check_more_info->team_name) || isset($check_more_info->department_name) || isset($check_more_info->company_name) || isset($check_more_info->corporation_name) || isset($check_more_info->position_name))
                        <div class="tab-content" id ="organization_information_more_info_all">
                            @if(isset($check_more_info->user_name))
                            <div class="tab-pane @if($check_more_info_actived =="user_name" ) active @endif" id="organization_information_1_more_info" role="tabpanel">
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_logo!!}{{ __('Logo') }} :</span>
                                    <div><img style="max-height: {!!$loadingSetting->size_height_avatar!!}px; max-width: {!!$loadingSetting->size_width_avatar!!}px;" alt = "{{$check_more_info->user_profile_photo_path}}_Avatar" src="{{checkExistLogo($check_more_info->user_profile_photo_path) }}"></img>
                                    <a class= "sub-text {!!$loadingSetting->table_link_click_button_style_download !!}" download="{!!$check_more_info->user_profile_photo_path!!}" href="{!!checkExistLogo($check_more_info->user_profile_photo_path) !!}" title="action">{!!$loadingSetting->icon_download!!}{{ __('Download') }}</a>
                                    </div>                                       
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_name!!}{{ __('Name') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!($check_more_info->user_name) !!}
                                    @can('user-detail')
                                        <a wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.users.detail', now()->addMinutes($loadingSetting->time_expired_url), ['user' => $check_more_info->user_id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
                                    @endcan
                                    </div>                                                   
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_sex!!}{{ __('Sex') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!checkSex($check_more_info->user_sex,$loadingSetting) !!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_email!!}{{ __('Email') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->user_email)!!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_phone!!}{{ __('Phone') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->user_phone)!!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_address!!}{{ __('Address') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->user_address)!!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_birth_day!!}{{ __('Birth Day') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!convertDateTimeString($loadingSetting->table_date_format,$check_more_info->user_birth_day)!!}</div>
                            </div>
                            @endif  
                            @if(isset($check_more_info->position_name))                          
                            <div class="tab-pane @if($check_more_info_actived =="position_name" ) active @endif" id="organization_information_2_more_info" role="tabpanel">
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_name!!}{{ __('Name') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!$check_more_info->position_name!!}
                                    @can('position-detail')
                                        <a wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.positions.detail', now()->addMinutes($loadingSetting->time_expired_url), ['position' => $check_more_info->position_id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
                                    @endcan
                                    </div>  
                            </div>
                            @endif  
                            @if(isset($check_more_info->team_name))   
                            <div class="tab-pane @if($check_more_info_actived =="team_name" ) active @endif" id="organization_information_3_more_info" role="tabpanel">
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_logo!!}{{ __('Logo') }} :</span>
                                    <div><img style="max-height: {!!$loadingSetting->size_height_avatar!!}px; max-width: {!!$loadingSetting->size_width_avatar!!}px;" alt = "{{$check_more_info->team_profile_photo_path}}_Avatar" src="{{checkExistLogo($check_more_info->team_profile_photo_path) }}"></img>
                                    <a class= "sub-text {!!$loadingSetting->table_link_click_button_style_download !!}" download="{!!$check_more_info->team_profile_photo_path!!}" href="{!!checkExistLogo($check_more_info->team_profile_photo_path) !!}" title="action">{!!$loadingSetting->icon_download!!}{{ __('Download') }}</a>
                                    </div>                                     
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_name!!}{{ __('Name') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!$check_more_info->team_name!!}
                                    @can('team-detail')
                                        <a wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.teams.detail', now()->addMinutes($loadingSetting->time_expired_url), ['team' => $check_more_info->team_id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
                                    @endcan
                                    </div>    
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_email!!}{{ __('Email') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->team_email)!!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_phone!!}{{ __('Phone') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->team_phone)!!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_address!!}{{ __('Address') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->team_address)!!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_birth_day!!}{{ __('Birth Day') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!convertDateTimeString($loadingSetting->table_date_format,$check_more_info->team_birth_day)!!}</div>
                            </div>
                            @endif  
                            @if(isset($check_more_info->department_name))   
                            <div class="tab-pane @if($check_more_info_actived =="department_name" ) active @endif" id="organization_information_4_more_info" role="tabpanel">
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_logo!!}{{ __('Logo') }} :</span>
                                    <div><img style="max-height: {!!$loadingSetting->size_height_avatar!!}px; max-width: {!!$loadingSetting->size_width_avatar!!}px;" alt = "{{$check_more_info->department_profile_photo_path}}_Avatar" src="{{checkExistLogo($check_more_info->department_profile_photo_path) }}"></img>
                                    <a class= "sub-text {!!$loadingSetting->table_link_click_button_style_download !!}" download="{!!$check_more_info->department_profile_photo_path!!}" href="{!!checkExistLogo($check_more_info->department_profile_photo_path) !!}" title="action">{!!$loadingSetting->icon_download!!}{{ __('Download') }}</a>
                                    </div>                                      
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_name!!}{{ __('Name') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!$check_more_info->department_name!!}
                                    @can('department-detail')
                                        <a wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.departments.detail', now()->addMinutes($loadingSetting->time_expired_url), ['department' => $check_more_info->department_id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
                                    @endcan
                                    </div>  
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_email!!}{{ __('Email') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->department_email)!!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_phone!!}{{ __('Phone') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->department_phone)!!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_address!!}{{ __('Address') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->department_address)!!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_birth_day!!}{{ __('Birth Day') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!convertDateTimeString($loadingSetting->table_date_format,$check_more_info->department_birth_day)!!}</div>
                            </div>
                            @endif  
                            @if(isset($check_more_info->company_name))   
                            <div class="tab-pane @if($check_more_info_actived =="company_name" ) active @endif" id="organization_information_5_more_info" role="tabpanel">
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_logo!!}{{ __('Logo') }} :</span>
                                    <div><img style="max-height: {!!$loadingSetting->size_height_avatar!!}px; max-width: {!!$loadingSetting->size_width_avatar!!}px;" alt = "{{$check_more_info->company_profile_photo_path}}_Avatar" src="{{checkExistLogo($check_more_info->company_profile_photo_path) }}"></img>
                                    <a class= "sub-text {!!$loadingSetting->table_link_click_button_style_download !!}" download="{!!$check_more_info->company_profile_photo_path!!}" href="{!!checkExistLogo($check_more_info->company_profile_photo_path) !!}" title="action">{!!$loadingSetting->icon_download!!}{{ __('Download') }}</a>
                                    </div>                                      
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_name!!}{{ __('Name') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!$check_more_info->company_name!!}
                                    @can('company-detail')
                                        <a wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.companies.detail', now()->addMinutes($loadingSetting->time_expired_url), ['company' => $check_more_info->company_id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
                                    @endcan
                                    </div>  
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_email!!}{{ __('Email') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->company_email)!!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_phone!!}{{ __('Phone') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->company_phone)!!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_address!!}{{ __('Address') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->company_address)!!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_birth_day!!}{{ __('Birth Day') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!convertDateTimeString($loadingSetting->table_date_format,$check_more_info->company_birth_day)!!}</div>
                            </div>
                            @endif  
                            @if(isset($check_more_info->corporation_name))   
                            <div class="tab-pane @if($check_more_info_actived =="corporation_name" ) active @endif" id="organization_information_6_more_info" role="tabpanel">
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_logo!!}{{ __('Logo') }} :</span>
                                    <div><img style="max-height: {!!$loadingSetting->size_height_avatar!!}px; max-width: {!!$loadingSetting->size_width_avatar!!}px;" alt = "{{$check_more_info->corporation_profile_photo_path}}_Avatar" src="{{checkExistLogo($check_more_info->corporation_profile_photo_path) }}"></img>
                                    <a class= "sub-text {!!$loadingSetting->table_link_click_button_style_download !!}" download="{!!$check_more_info->corporation_profile_photo_path!!}" href="{!!checkExistLogo($check_more_info->corporation_profile_photo_path) !!}" title="action">{!!$loadingSetting->icon_download!!}{{ __('Download') }}</a>
                                    </div>                                       
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_name!!}{{ __('Name') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!$check_more_info->corporation_name!!}
                                    @can('corporation-detail')
                                        <a wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.corporations.detail', now()->addMinutes($loadingSetting->time_expired_url), ['corporation' => $check_more_info->corporation_id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
                                    @endcan
                                    </div>  
                                    <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_email!!}{{ __('Email') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->corporation_email)!!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_phone!!}{{ __('Phone') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->corporation_phone)!!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_address!!}{{ __('Address') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->corporation_address)!!}</div>
                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_birth_day!!}{{ __('Birth Day') }} :</span>
                                    <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!convertDateTimeString($loadingSetting->table_date_format,$check_more_info->corporation_birth_day)!!}</div>
                            </div>
                            @endif  
                            <!-- More-->
                            @if(isset($check_more_info->checkBelongUserInculue)) 
                            <div class="tab-pane" id="organization_information_7_more_info" role="tabpanel">
                                <span class ="sub-text overline-title overline-title-alt ">{{ __('Have total')}} : {{count($check_more_info->checkBelongUserInculue)}} {{ __('users') }}</span>                                
                                <table id="commonInfoTableDb" class="{!!$loadingSetting->style_table!!} w-90">
                                    <thead>
                                        <tr>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($check_more_info->checkBelongUserInculue as $key=> $row)                                     
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
                                                                <a wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.users.detail', now()->addMinutes($loadingSetting->time_expired_url), ['user' => $row->id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
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
                            @if(isset($check_more_info->checkBelongTeamInculue)) 
                            <div class="tab-pane" id="organization_information_8_more_info" role="tabpanel">
                                <span class ="sub-text overline-title overline-title-alt ">{{ __('Have total')}} : {{count($check_more_info->checkBelongTeamInculue)}} {{ __('teams') }}</span>                                
                                <table id="commonInfoTableDbTeam" class="{!!$loadingSetting->style_table!!} w-90">
                                    <thead>
                                        <tr>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($check_more_info->checkBelongTeamInculue as $key=> $row)                                     
                                        <tr>
                                            <td>                                        
                                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{{ __('No.') }}{!!$key+1!!} :</span>
                                                <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">
                                                    <div class="user-card" wire:key = "logo1ac4324tions{!!$row->id!!}">
                                                        <div class="user-avatar {!!$loadingSetting->table_showhide_logo_style!!}">
                                                            <a href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#viewLogo{{ $row->id }}"  class="text-success">            
                                                            <img class="user-avatar img-avatar" alt = "{{$row->name}}_Avatar" src="{!!checkExistLogo($row->profile_photo_path)!!}"></img> 
                                                            </a> 
                                                        </div>
                                                        <div class="user-info">             
                                                            <span class="link span">{!!$row->name!!}{!!identifiedTeamBelong($row->id,$listTeamPriority,$loadingSetting)!!}</span>
                                                            @can('team-detail')
                                                                <a wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.teams.detail', now()->addMinutes($loadingSetting->time_expired_url), ['team' => $row->id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
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
                            @if(isset($check_more_info->checkBelongDepartmentInculue)) 
                            <div class="tab-pane" id="organization_information_9_more_info" role="tabpanel">
                                <span class ="sub-text">{{ __('Have total')}} : {{count($check_more_info->checkBelongDepartmentInculue)}} {{ __('departments') }}</span>                                
                                <table id="commonInfoTableDbDepartment" class="{!!$loadingSetting->style_table!!} w-90">
                                    <thead>
                                        <tr>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($check_more_info->checkBelongDepartmentInculue as $key=> $row)                                     
                                        <tr>
                                            <td>                                        
                                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{{ __('No.') }}{!!$key+1!!} :</span>
                                                <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">
                                                    <div class="user-card" wire:key = "logo135646ctions{!!$row->id!!}">
                                                        <div class="user-avatar {!!$loadingSetting->table_showhide_logo_style!!}">
                                                            <a href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#viewLogo{{ $row->id }}"  class="text-success">            
                                                            <img class="user-avatar img-avatar" alt = "{{$row->name}}_Avatar" src="{!!checkExistLogo($row->profile_photo_path)!!}"></img> 
                                                            </a> 
                                                        </div>
                                                        <div class="user-info">             
                                                            <span class="link span">{!!$row->name!!}{!!identifiedDepartmentBelong($row->id,$listDepartmentPriority,$loadingSetting)!!}</span>
                                                            @can('department-detail')
                                                                <a wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.departments.detail', now()->addMinutes($loadingSetting->time_expired_url), ['department' => $row->id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
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
                            @if(isset($check_more_info->checkBelongCompanyInculue)) 
                            <div class="tab-pane" id="organization_information_10_more_info" role="tabpanel">
                                <span class ="sub-text">{{ __('Have total')}} : {{count($check_more_info->checkBelongCompanyInculue)}} {{ __('companies') }}</span>                                
                                <table id="commonInfoTableDbCompany" class="{!!$loadingSetting->style_table!!} w-90">
                                    <thead>
                                        <tr>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($check_more_info->checkBelongCompanyInculue as $key=> $row)                                     
                                        <tr>
                                            <td>                                        
                                                <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{{ __('No.') }}{!!$key+1!!} :</span>
                                                <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">
                                                    <div class="user-card" wire:key = "logo1actisdwqons{!!$row->id!!}">
                                                        <div class="user-avatar {!!$loadingSetting->table_showhide_logo_style!!}">
                                                            <a href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#viewLogo{{ $row->id }}"  class="text-success">            
                                                            <img class="user-avatar img-avatar" alt = "{{$row->name}}_Avatar" src="{!!checkExistLogo($row->profile_photo_path)!!}"></img> 
                                                            </a> 
                                                        </div>
                                                        <div class="user-info">             
                                                            <span class="link span">{!!$row->name!!}{!!identifiedCompanyBelong($row->id,$listCompanyPriority,$loadingSetting)!!}</span>
                                                            @can('company-detail')
                                                                <a wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.companies.detail', now()->addMinutes($loadingSetting->time_expired_url), ['company' => $row->id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
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
                                @if(isset($check_more_info->user_name) || isset($check_more_info->team_name) || isset($check_more_info->department_name) ||  isset($check_more_info->company_name) || isset($check_more_info->corporation_name) || isset($check_more_info->position_name))
                                <ul class="nav link-list-menu border border-light round m-0" role="tablist">
                                    @if(isset($check_more_info->user_name))
                                    <li>
                                        <a class="@if($check_more_info_actived =="user_name" ) active @endif" data-bs-toggle="tab" href="#organization_information_1_more_info" aria-selected="true" tabindex="-1" role="tab">{!!$loadingSetting->icon_user!!}{{ __('User') }}</a>
                                    </li>
                                    @endif
                                    @if(isset($check_more_info->position_name))
                                    <li>
                                        <a class="@if($check_more_info_actived =="position_name" ) active @endif" data-bs-toggle="tab" href="#organization_information_2_more_info" aria-selected="true" tabindex="-1" role="tab">{!!$loadingSetting->icon_position!!}{{ __('Position') }}</a>
                                    </li>
                                    @endif
                                    @if(isset($check_more_info->team_name))
                                    <li>
                                        <a class="@if($check_more_info_actived =="team_name" ) active @endif" data-bs-toggle="tab" href="#organization_information_3_more_info" aria-selected="false" tabindex="-1" role="tab">{!!$loadingSetting->icon_team!!}{{ __('Team') }}</a>
                                    </li>
                                    @endif
                                    @if(isset($check_more_info->department_name))
                                    <li>
                                        <a class="@if($check_more_info_actived =="department_name" ) active @endif" data-bs-toggle="tab" href="#organization_information_4_more_info" aria-selected="false" tabindex="-1" role="tab">{!!$loadingSetting->icon_department!!}{{ __('Department') }}</a>
                                    </li>
                                    @endif
                                    @if(isset($check_more_info->company_name))
                                    <li>
                                        <a class="@if($check_more_info_actived =="company_name" ) active @endif" data-bs-toggle="tab" href="#organization_information_5_more_info" aria-selected="false" tabindex="-1" role="tab">{!!$loadingSetting->icon_company!!}{{ __('Company') }}</a>
                                    </li>
                                    @endif
                                    @if(isset($check_more_info->corporation_name))
                                    <li>
                                        <a class="@if($check_more_info_actived =="corporation_name" ) active @endif"  data-bs-toggle="tab" href="#organization_information_6_more_info" aria-selected="false" tabindex="-1" role="tab">{!!$loadingSetting->icon_corporation!!}{{ __('Corporation') }}</a>
                                    </li>
                                    @endif
                                    @if(isset($check_more_info->checkBelongUserInculue))
                                    <li>
                                        <a data-bs-toggle="tab" onclick="Livewire.dispatch('refreshcommonInfoTableDbUser')"   href="#organization_information_7_more_info" aria-selected="false" tabindex="-1" role="tab">{!!$loadingSetting->icon_user_belong!!}{{ __('User Belongs') }}</a>
                                    </li>                                    
                                    @endif
                                    @if(isset($check_more_info->checkBelongTeamInculue))
                                    <li>
                                        <a data-bs-toggle="tab" onclick="Livewire.dispatch('refreshcommonInfoTableDbTeam')"  href="#organization_information_8_more_info" aria-selected="false" tabindex="-1" role="tab">{!!$loadingSetting->icon_team_belong!!}{{ __('Team Belongs') }}</a>
                                    </li>                                    
                                    @endif
                                    @if(isset($check_more_info->checkBelongDepartmentInculue))
                                    <li>
                                        <a data-bs-toggle="tab" onclick="Livewire.dispatch('refreshcommonInfoTableDbDepartment')"  href="#organization_information_9_more_info" aria-selected="false" tabindex="-1" role="tab">{!!$loadingSetting->icon_department_belong!!}{{ __('Department Belongs') }}</a>
                                    </li>                                    
                                    @endif
                                    @if(isset($check_more_info->checkBelongCompanyInculue))
                                    <li>
                                        <a data-bs-toggle="tab" onclick="Livewire.dispatch('refreshcommonInfoTableDbCompany')"  href="#organization_information_10_more_info" aria-selected="false" tabindex="-1" role="tab">{!!$loadingSetting->icon_company_belong!!}{{ __('Company Belongs') }}</a>
                                    </li>                                    
                                    @endif                                                                                                            
                                </ul>
                                @endif                                
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content" id ="organization_information_more_info_all">
                                    @if(isset($check_more_info->user_name))
                                    <div class="tab-pane @if($check_more_info_actived =="user_name" ) active @endif" id="organization_information_1_more_info" role="tabpanel">
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_logo!!}{{ __('Logo') }} :</span>
                                        <div><img style="max-height: {!!$loadingSetting->size_height_avatar!!}px; max-width: {!!$loadingSetting->size_width_avatar!!}px;" alt = "{{$check_more_info->user_profile_photo_path}}_Avatar" src="{{checkExistLogo($check_more_info->user_profile_photo_path) }}"></img>
                                        <a class= "sub-text {!!$loadingSetting->table_link_click_button_style_download !!}" download="{!!$check_more_info->user_profile_photo_path!!}" href="{!!checkExistLogo($check_more_info->user_profile_photo_path) !!}" title="action">{!!$loadingSetting->icon_download!!}{{ __('Download') }}</a>
                                        </div>                                           
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_name!!}{{ __('Name') }} :</span>
                                            <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!$check_more_info->user_name!!}
                                            @can('user-detail')
                                                <a wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.users.detail', now()->addMinutes($loadingSetting->time_expired_url), ['user' => $check_more_info->user_id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
                                            @endcan
                                            </div>  
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_sex!!}{{ __('Sex') }} :</span>
                                            <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!checkSex($check_more_info->user_sex,$loadingSetting) !!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_email!!}{{ __('Email') }} :</span>
                                            <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->user_email)!!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_phone!!}{{ __('Phone') }} :</span>
                                            <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->user_phone)!!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_address!!}{{ __('Address') }} :</span>
                                            <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->user_address)!!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_birth_day!!}{{ __('Birth Day') }} :</span>
                                            <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!convertDateTimeString($loadingSetting->table_date_format,$check_more_info->user_birth_day)!!}</div>
                                    </div>
                                    @endif
                                    @if(isset($check_more_info->position_name))
                                    <div class="tab-pane @if($check_more_info_actived =="position_name" ) active @endif" id="organization_information_2_more_info" role="tabpanel">
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_name!!}{{ __('Name') }} :</span>
                                        <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{{$check_more_info->position_name}}
                                            @can('position-detail')
                                                <a wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.positions.detail', now()->addMinutes($loadingSetting->time_expired_url), ['position' => $check_more_info->position_id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
                                            @endcan
                                        </div>  
                                    </div>
                                    @endif
                                    @if(isset($check_more_info->team_name))                                   
                                    <div class="tab-pane @if($check_more_info_actived =="team_name" ) active @endif" id="organization_information_3_more_info" role="tabpanel">
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_logo!!}{{ __('Logo') }} :</span>
                                        <div><img style="max-height: {!!$loadingSetting->size_height_avatar!!}px; max-width: {!!$loadingSetting->size_width_avatar!!}px;" alt = "{{$check_more_info->team_profile_photo_path}}_Avatar" src="{{checkExistLogo($check_more_info->team_profile_photo_path) }}"></img>
                                        <a class= "sub-text {!!$loadingSetting->table_link_click_button_style_download !!}" download="{!!$check_more_info->team_profile_photo_path!!}" href="{!!checkExistLogo($check_more_info->team_profile_photo_path) !!}" title="action">{!!$loadingSetting->icon_download!!}{{ __('Download') }}</a>
                                        </div>                                           
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_name!!}{{ __('Name') }} :</span>
                                        <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!$check_more_info->team_name!!}
                                        @can('team-detail')
                                            <a wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.teams.detail', now()->addMinutes($loadingSetting->time_expired_url), ['team' => $check_more_info->team_id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
                                        @endcan
                                        </div> 
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_email!!}{{ __('Email') }} :</span>
                                        <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->team_email)!!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_phone!!}{{ __('Phone') }} :</span>
                                        <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->team_phone)!!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_address!!}{{ __('Address') }} :</span>
                                        <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->team_address)!!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_birth_day!!}{{ __('Birth Day') }} :</span>
                                        <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!convertDateTimeString($loadingSetting->table_date_format,$check_more_info->team_birth_day)!!}</div>
                                    </div>
                                    @endif
                                    @if(isset($check_more_info->department_name))
                                    <div class="tab-pane  @if($check_more_info_actived =="department_name" ) active @endif" id="organization_information_4_more_info" role="tabpanel">
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_logo!!}{{ __('Logo') }} :</span>
                                        <div><img style="max-height: {!!$loadingSetting->size_height_avatar!!}px; max-width: {!!$loadingSetting->size_width_avatar!!}px;" alt = "{{$check_more_info->department_profile_photo_path}}_Avatar" src="{{checkExistLogo($check_more_info->department_profile_photo_path) }}"></img>
                                        <a class= "sub-text {!!$loadingSetting->table_link_click_button_style_download !!}" download="{!!$check_more_info->department_profile_photo_path!!}" href="{!!checkExistLogo($check_more_info->department_profile_photo_path) !!}" title="action">{!!$loadingSetting->icon_download!!}{{ __('Download') }}</a>
                                        </div>                                         
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_name!!}{{ __('Name') }} :</span>
                                        <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!$check_more_info->department_name!!}
                                        @can('department-detail')
                                                <a wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.departments.detail', now()->addMinutes($loadingSetting->time_expired_url), ['department' => $check_more_info->department_id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
                                            @endcan
                                        </div> 
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_email!!}{{ __('Email') }} :</span>
                                        <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->department_email)!!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_phone!!}{{ __('Phone') }} :</span>
                                        <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->department_phone)!!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_address!!}{{ __('Address') }} :</span>
                                        <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->department_address)!!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_birth_day!!}{{ __('Birth Day') }} :</span>
                                        <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!convertDateTimeString($loadingSetting->table_date_format,$check_more_info->department_birth_day)!!}</div>
                                    </div>
                                    @endif
                                    @if(isset($check_more_info->company_name))
                                    <div class="tab-pane @if($check_more_info_actived =="company_name" ) active @endif" id="organization_information_5_more_info" role="tabpanel">
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_logo!!}{{ __('Logo') }} :</span>
                                        <div><img style="max-height: {!!$loadingSetting->size_height_avatar!!}px; max-width: {!!$loadingSetting->size_width_avatar!!}px;" alt = "{{$check_more_info->company_profile_photo_path}}_Avatar" src="{{checkExistLogo($check_more_info->company_profile_photo_path) }}"></img>
                                        <a class= "sub-text {!!$loadingSetting->table_link_click_button_style_download !!}" download="{!!$check_more_info->company_profile_photo_path!!}" href="{!!checkExistLogo($check_more_info->company_profile_photo_path) !!}" title="action">{!!$loadingSetting->icon_download!!}{{ __('Download') }}</a>
                                        </div>                                          
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_name!!}{{ __('Name') }} :</span>
                                        <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!$check_more_info->company_name!!}
                                        @can('company-detail')
                                                <a wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.companies.detail', now()->addMinutes($loadingSetting->time_expired_url), ['company' => $check_more_info->company_id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
                                            @endcan
                                        </div> 
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_email!!}{{ __('Email') }} :</span>
                                        <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->company_email)!!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_phone!!}{{ __('Phone') }} :</span>
                                        <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->company_phone)!!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_address!!}{{ __('Address') }} :</span>
                                        <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->company_address)!!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_birth_day!!}{{ __('Birth Day') }} :</span>
                                        <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!convertDateTimeString($loadingSetting->table_date_format,$check_more_info->company_birth_day)!!}</div>
                                    </div>
                                    @endif
                                    @if(isset($check_more_info->corporation_name))
                                    <div class="tab-pane  @if($check_more_info_actived =="corporation_name" ) active @endif" id="organization_information_6_more_info" role="tabpanel">
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_logo!!}{{ __('Logo') }} :</span>
                                        <div><img style="max-height: {!!$loadingSetting->size_height_avatar!!}px; max-width: {!!$loadingSetting->size_width_avatar!!}px;" alt = "{{$check_more_info->corporation_profile_photo_path}}_Avatar" src="{{checkExistLogo($check_more_info->corporation_profile_photo_path) }}"></img>
                                        <a class= "sub-text {!!$loadingSetting->table_link_click_button_style_download !!}" download="{!!$check_more_info->corporation_profile_photo_path!!}" href="{!!checkExistLogo($check_more_info->corporation_profile_photo_path) !!}" title="action">{!!$loadingSetting->icon_download!!}{{ __('Download') }}</a>
                                        </div>                                          
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_name!!}{{ __('Name') }} :</span>
                                            <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!$check_more_info->corporation_name!!}
                                            @can('corporation-detail')
                                                <a wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.corporations.detail', now()->addMinutes($loadingSetting->time_expired_url), ['corporation' => $check_more_info->corporation_id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
                                            @endcan
                                            </div>
                                            <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_email!!}{{ __('Email') }} :</span>
                                            <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->corporation_email)!!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_phone!!}{{ __('Phone') }} :</span>
                                            <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->corporation_phone)!!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_address!!}{{ __('Address') }} :</span>
                                            <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!arrayToTextBreakLine($check_more_info->corporation_address)!!}</div>
                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{!!$loadingSetting->icon_birth_day!!}{{ __('Birth Day') }} :</span>
                                            <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">{!!convertDateTimeString($loadingSetting->table_date_format,$check_more_info->corporation_birth_day)!!}</div>
                                    </div> 
                                    @endif                                      
                                    @if(isset($check_more_info->checkBelongUserInculue)) 
                                    <div class="tab-pane" id="organization_information_7_more_info" role="tabpanel">
                                        <span class ="sub-text overline-title overline-title-alt ">{{ __('Have total')}} : {{count($check_more_info->checkBelongUserInculue)}} {{ __('users') }}</span>                                       
                                        <table id="commonInfoTableDb" class="{!!$loadingSetting->style_table!!} w-90">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($check_more_info->checkBelongUserInculue as $key=> $row)                                     
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
                                                                        <a wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.users.detail', now()->addMinutes($loadingSetting->time_expired_url), ['user' => $row->id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
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
                                    @if(isset($check_more_info->checkBelongTeamInculue)) 
                                    <div class="tab-pane" id="organization_information_8_more_info" role="tabpanel">
                                        <span class ="sub-text overline-title overline-title-alt ">{{ __('Have total')}} : {{count($check_more_info->checkBelongTeamInculue)}} {{ __('teams') }}</span>                                       
                                        <table id="commonInfoTableDbTeam" class="{!!$loadingSetting->style_table!!} w-90">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($check_more_info->checkBelongTeamInculue as $key=> $row)                                     
                                                <tr>
                                                    <td>                                        
                                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{{ __('No.') }}{!!$key+1!!} :</span>
                                                        <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">
                                                            <div class="user-card" wire:key = "logo1ac234325tions{!!$row->id!!}">
                                                                <div class="user-avatar {!!$loadingSetting->table_showhide_logo_style!!}">
                                                                    <a href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#viewLogo{{ $row->id }}"  class="text-success">            
                                                                    <img class="user-avatar img-avatar" alt = "{{$row->name}}_Avatar" src="{!!checkExistLogo($row->profile_photo_path)!!}"></img> 
                                                                    </a> 
                                                                </div>
                                                                <div class="user-info">             
                                                                    <span class="link span">{!!$row->name!!}{!!identifiedTeamBelong($row->id,$listTeamPriority,$loadingSetting)!!}</span>
                                                                    @can('team-detail')
                                                                        <a wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.teams.detail', now()->addMinutes($loadingSetting->time_expired_url), ['team' => $row->id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
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
                                    @if(isset($check_more_info->checkBelongDepartmentInculue)) 
                                    <div class="tab-pane" id="organization_information_9_more_info" role="tabpanel">
                                        <span class ="sub-text overline-title overline-title-alt ">{{ __('Have total')}} : {{count($check_more_info->checkBelongDepartmentInculue)}} {{ __('departments') }}</span>
                                        <table id="commonInfoTableDbDepartment" class="{!!$loadingSetting->style_table!!} w-90">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($check_more_info->checkBelongDepartmentInculue as $key=> $row)                                     
                                                <tr>
                                                    <td>                                        
                                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{{ __('No.') }}{!!$key+1!!} :</span>
                                                        <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">
                                                            <div class="user-card" wire:key = "logo1act4352345cdions{!!$row->id!!}">
                                                                <div class="user-avatar {!!$loadingSetting->table_showhide_logo_style!!}">
                                                                    <a href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#viewLogo{{ $row->id }}"  class="text-success">            
                                                                    <img class="user-avatar img-avatar" alt = "{{$row->name}}_Avatar" src="{!!checkExistLogo($row->profile_photo_path)!!}"></img> 
                                                                    </a> 
                                                                </div>
                                                                <div class="user-info">             
                                                                    <span class="link span">{!!$row->name!!}{!!identifiedDepartmentBelong($row->id,$listDepartmentPriority,$loadingSetting)!!}</span>
                                                                    @can('department-detail')
                                                                        <a wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.departments.detail', now()->addMinutes($loadingSetting->time_expired_url), ['department' => $row->id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
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
                                    @if(isset($check_more_info->checkBelongCompanyInculue)) 
                                    <div class="tab-pane" id="organization_information_10_more_info" role="tabpanel">
                                        <span class ="sub-text overline-title overline-title-alt ">{{ __('Have total')}} : {{count($check_more_info->checkBelongCompanyInculue)}} {{ __('companies') }}</span>
                                        <table id="commonInfoTableDbCompany" class="{!!$loadingSetting->style_table!!} w-90">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($check_more_info->checkBelongCompanyInculue as $key=> $row)                                     
                                                <tr>
                                                    <td>                                        
                                                        <span class="{!!$loadingSetting->interface_type_contact_style_lable!!}">{{ __('No.') }}{!!$key+1!!} :</span>
                                                        <div class="{{$loadingSetting->interface_type_organization_information_style_value}}">
                                                            <div class="user-card" wire:key = "logo23131actions{!!$row->id!!}">
                                                                <div class="user-avatar {!!$loadingSetting->table_showhide_logo_style!!}">
                                                                    <a href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#viewLogo{{ $row->id }}"  class="text-success">            
                                                                    <img class="user-avatar img-avatar" alt = "{{$row->name}}_Avatar" src="{!!checkExistLogo($row->profile_photo_path)!!}"></img> 
                                                                    </a> 
                                                                </div>
                                                                <div class="user-info">             
                                                                    <span class="link span">{!!$row->name!!}{!!identifiedCompanyBelong($row->id,$listCompanyPriority,$loadingSetting)!!}</span>
                                                                    @can('company-detail')
                                                                        <a wire:navigate.hover href="{{ \URL::temporarySignedRoute('admin.companies.detail', now()->addMinutes($loadingSetting->time_expired_url), ['company' => $row->id]) }}" class="{!!$loadingSetting->table_link_click_button_style_download !!}">{!!$loadingSetting->icon_button_detail!!}</a>
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
        var myModalEl = document.getElementById('commonInfo')
        myModalEl.addEventListener('hidden.bs.modal', function (event) {
            Livewire.dispatch('resetCheckMoreInfo');
        })         
    </script>  
    <script>
        $(document).ready( function () {
            Livewire.on('refreshcommonInfoTableDbUser', function () {
                jQuery(document).ready(function () {
                    $('#commonInfoTableDb').DataTable( {
                        searching: false,
                        retrieve: true,
                        pageLength: {{$loadingSetting->table_todo_perPage}},
                        lengthMenu: {{prettyJson($loadingSetting->setPerPageAccepted)}},
                        language: {
                            url: '{{asset('public/backend/crm/js/databasevi.json')}}',
                        },
                    });       
                });           
            });   
            Livewire.on('refreshcommonInfoTableDbTeam', function () {
                jQuery(document).ready(function () {
                    $('#commonInfoTableDbTeam').DataTable( {
                        searching: false,
                        retrieve: true,
                        pageLength: {{$loadingSetting->table_todo_perPage}},
                        lengthMenu: {{prettyJson($loadingSetting->setPerPageAccepted)}},
                        language: {
                            url: '{{asset('public/backend/crm/js/databasevi.json')}}',
                        },
                    });       
                });           
            });   
            Livewire.on('refreshcommonInfoTableDbDepartment', function () {
                jQuery(document).ready(function () {
                    $('#commonInfoTableDbDepartment').DataTable( {
                        searching: false,
                        retrieve: true,
                        pageLength: {{$loadingSetting->table_todo_perPage}},
                        lengthMenu: {{prettyJson($loadingSetting->setPerPageAccepted)}},
                        language: {
                            url: '{{asset('public/backend/crm/js/databasevi.json')}}',
                        },
                    });       
                });           
            });  
            Livewire.on('refreshcommonInfoTableDbCompany', function () {
                jQuery(document).ready(function () {
                    $('#commonInfoTableDbCompany').DataTable( {
                        searching: false,
                        retrieve: true,
                        pageLength: {{$loadingSetting->table_todo_perPage}},
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
