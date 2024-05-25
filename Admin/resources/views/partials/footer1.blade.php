<div class="nk-footer">
    <div class="container-fluid">
        <div class="nk-footer-wrap">
            <div class="row w-100 ">
                <div class="col-lg-3">
                    <div class="nk-block-content text-center ">
                        <p> © {{date('Y')}} Diginext Corporation. Created by <a href="anhpt.ptanh@gmail.com"
                        target="_blank">Phạm Tuấn Anh</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="nk-block-content text-center">
                        <p class="text-soft">{!!$loadingSettingGlobal->icon_address!!} {{ get_setting('site_address') ?? 'VietNam' }}</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="nk-block-content text-center ">
                        <p class="text-soft"><a href="mailto: {{ get_setting('site_email') ?? 'anhpt.ptanh@gmail.com' }}">{!!$loadingSettingGlobal->icon_email!!} : {{ get_setting('site_email') ?? 'anhpt.ptanh@gmail.com' }}
                            </a>
                        </p>
                    </div>
                </div>
				<div class="col-lg-3">
                    <div class="nk-block-content text-center ">
                        <p class="text-soft">
                            <a href="tel: {{ get_setting('site_phone') ?? '0399599333' }} ">{!!$loadingSettingGlobal->icon_phone!!} : {{ get_setting('site_phone') ?? '0399599333' }} </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>