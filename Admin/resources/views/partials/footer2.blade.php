<div class="nk-footer">
    <div class="container-fluid">

            <div class="row g-3 align-items-center">
                <div class="col-md-3">
                    <div class="footer-logo">
                        <a href="/admin" class="logo-link">
                            <img class="logo-light logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                                srcset="{{ get_setting('site_logo') }} 2x" alt="logo">
                            <img class="logo-dark logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
                                srcset="{{ get_setting('site_logo') }} 2x" alt="logo-dark">
                        </a>
                    </div>
                </div>
                <div class="col-md-9 d-flex justify-content-md-end">
                    <ul class="link gx-4">
                        <li>
                            <a wire:navigate.hover href="/preview" >{{ __('All Preview')}}</a>
                        </li>
                        <li>
                            <a wire:navigate.hover href="/features" >{{ __('Features')}}</a>
                        </li>
                        <li>
                            <a wire:navigate.hover href="/doc" >{{ __('Doc')}}</a>
                        </li>
                        <li>
                            <a wire:navigate.hover href="/help" >{{ __('Need Help?')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row g-3 align-items-center pt-4">
                <div class="col-md-8">
                    <div class="text-base">
                    <p>© {{date('Y')}} Diginext Corporation. Created by <a href="anhpt.ptanh@gmail.com"
                    target="_blank">Phạm Tuấn Anh</a></p>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-md-end">
                    <ul class="social link gx-4">
                        @if(get_setting('site_facebook'))
                            <li>
                                <a target="_blank" href="{{get_setting('site_facebook')}}" >
                                    <em class="icon ni ni-facebook-f"></em>
                                </a>
                            </li>
                        @endif
                        @if(get_setting('site_instagram'))
                        <li>
                            <a target="_blank" href="{{get_setting('site_instagram')}}" >
                                <em class="icon ni ni-instagram"></em>
                            </a>
                        </li>
                        @endif
                        @if(get_setting('site_tiktok'))
                        <li>
                            <a target="_blank" href="{{get_setting('site_tiktok')}}" >
                                <em class="icon fa-brands fa-tiktok"></em>
                            </a>
                        </li>
                        @endif
                        @if(get_setting('site_twitter'))
                        <li>
                            <a target="_blank" href="{{get_setting('site_twitter')}}" >
                                <em class="icon ni ni-twitter"></em>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
    </div>
</div>