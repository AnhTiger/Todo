<li class="col-sm-6">
    <div class="custom-control custom-control-sm custom-control-pro custom-checkbox custom-control-full">
        <input type="checkbox" class="custom-control-input" name="cp1-action-listodo-email"
            id="cp1-action-listodo-email" value="email" wire:model.lazy="form.reminder.email">
        <label class="custom-control-label" for="cp1-action-listodo-email">
            <span class="user-card">
                <span class="user-avatar sq">
                    {!!$loadingSetting->icon_email!!}
                </span>
                <span class="user-info">
                    <span class="lead-text">{{ __('Email') }}</span>
                    <span class="sub-text">{{ __('Send via email') }}</span>
                </span>
            </span>
        </label>
    </div>
</li>
<li class="col-sm-6">
    <div class="custom-control custom-control-sm custom-control-pro custom-checkbox custom-control-full">
        <input type="checkbox" class="custom-control-input" name="cp1-action-listodo-telegram"
            id="cp1-action-listodo-telegram" value="telegram" wire:model.lazy="form.reminder.telegram">
        <label class="custom-control-label" for="cp1-action-listodo-telegram">
            <span class="user-card">
                <span class="user-avatar sq">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                <path fill="#29b6f6" d="M24 4A20 20 0 1 0 24 44A20 20 0 1 0 24 4Z"></path><path fill="#fff" d="M33.95,15l-3.746,19.126c0,0-0.161,0.874-1.245,0.874c-0.576,0-0.873-0.274-0.873-0.274l-8.114-6.733 l-3.97-2.001l-5.095-1.355c0,0-0.907-0.262-0.907-1.012c0-0.625,0.933-0.923,0.933-0.923l21.316-8.468 c-0.001-0.001,0.651-0.235,1.126-0.234C33.667,14,34,14.125,34,14.5C34,14.75,33.95,15,33.95,15z"></path><path fill="#b0bec5" d="M23,30.505l-3.426,3.374c0,0-0.149,0.115-0.348,0.12c-0.069,0.002-0.143-0.009-0.219-0.043 l0.964-5.965L23,30.505z"></path><path fill="#cfd8dc" d="M29.897,18.196c-0.169-0.22-0.481-0.26-0.701-0.093L16,26c0,0,2.106,5.892,2.427,6.912 c0.322,1.021,0.58,1.045,0.58,1.045l0.964-5.965l9.832-9.096C30.023,18.729,30.064,18.416,29.897,18.196z"></path>
                </svg>
                </span>
                <span class="user-info">
                    <span class="lead-text">{{ __('Telegram') }}</span>
                    <span class="sub-text">{{ __('Send via telegram') }}</span>
                </span>
            </span>
        </label>
    </div>
</li>
<li class="col-sm-6">
    <div class="custom-control custom-control-sm custom-control-pro custom-checkbox custom-control-full">
        <input type="checkbox" class="custom-control-input" name="cp1-action-listodo-app"
            id="cp1-action-listodo-app" value="app" wire:model.lazy="form.reminder.app">
        <label class="custom-control-label" for="cp1-action-listodo-app">
            <span class="user-card">
                <span class="user-avatar sq">
                    <em class="fa-solid fa-mobile-screen-button"></em>
                </span>
                <span class="user-info">
                    <span class="lead-text">{{ __('Popup') }}</span>
                    <span class="sub-text">{{ __('Send via app') }}</span>
                </span>
            </span>
        </label>
    </div>
</li>
<li class="col-sm-6">
    <div class="custom-control custom-control-sm custom-control-pro custom-checkbox custom-control-full">
        <input type="checkbox" class="custom-control-input" name="cp1-action-listodo-facebook"
            id="cp1-action-listodo-facebook" value="facebook" wire:model.lazy="form.reminder.facebook">
        <label class="custom-control-label" for="cp1-action-listodo-facebook">
            <span class="user-card">
                <span class="user-avatar sq">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path><path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"></path>
                </svg>
                </span>
                <span class="user-info">
                    <span class="lead-text">{{ __('Popup') }}</span>
                    <span class="sub-text">{{ __('Send via facebook') }}</span>
                </span>
            </span>
        </label>
    </div>
</li>
<li class="col-sm-6">
    <div class="custom-control custom-control-sm custom-control-pro custom-checkbox custom-control-full">
        <input type="checkbox" class="custom-control-input" name="cp1-action-listodo-zalo"
            id="cp1-action-listodo-zalo" value="zalo" wire:model.lazy="form.reminder.zalo">
        <label class="custom-control-label" for="cp1-action-listodo-zalo">
            <span class="user-card">
                <span class="user-avatar sq">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                    <path fill="#2962ff" d="M15,36V6.827l-1.211-0.811C8.64,8.083,5,13.112,5,19v10c0,7.732,6.268,14,14,14h10	c4.722,0,8.883-2.348,11.417-5.931V36H15z"></path><path fill="#eee" d="M29,5H19c-1.845,0-3.601,0.366-5.214,1.014C10.453,9.25,8,14.528,8,19	c0,6.771,0.936,10.735,3.712,14.607c0.216,0.301,0.357,0.653,0.376,1.022c0.043,0.835-0.129,2.365-1.634,3.742	c-0.162,0.148-0.059,0.419,0.16,0.428c0.942,0.041,2.843-0.014,4.797-0.877c0.557-0.246,1.191-0.203,1.729,0.083	C20.453,39.764,24.333,40,28,40c4.676,0,9.339-1.04,12.417-2.916C42.038,34.799,43,32.014,43,29V19C43,11.268,36.732,5,29,5z"></path><path fill="#2962ff" d="M36.75,27C34.683,27,33,25.317,33,23.25s1.683-3.75,3.75-3.75s3.75,1.683,3.75,3.75	S38.817,27,36.75,27z M36.75,21c-1.24,0-2.25,1.01-2.25,2.25s1.01,2.25,2.25,2.25S39,24.49,39,23.25S37.99,21,36.75,21z"></path><path fill="#2962ff" d="M31.5,27h-1c-0.276,0-0.5-0.224-0.5-0.5V18h1.5V27z"></path><path fill="#2962ff" d="M27,19.75v0.519c-0.629-0.476-1.403-0.769-2.25-0.769c-2.067,0-3.75,1.683-3.75,3.75	S22.683,27,24.75,27c0.847,0,1.621-0.293,2.25-0.769V26.5c0,0.276,0.224,0.5,0.5,0.5h1v-7.25H27z M24.75,25.5	c-1.24,0-2.25-1.01-2.25-2.25S23.51,21,24.75,21S27,22.01,27,23.25S25.99,25.5,24.75,25.5z"></path><path fill="#2962ff" d="M21.25,18h-8v1.5h5.321L13,26h0.026c-0.163,0.211-0.276,0.463-0.276,0.75V27h7.5	c0.276,0,0.5-0.224,0.5-0.5v-1h-5.321L21,19h-0.026c0.163-0.211,0.276-0.463,0.276-0.75V18z"></path>
                    </svg>
                </span>
                <span class="user-info">
                    <span class="lead-text">{{ __('Popup') }}</span>
                    <span class="sub-text">{{ __('Send via zalo') }}</span>
                </span>
            </span>
        </label>
    </div>
</li>