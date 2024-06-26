<div wire:key = "loaderewrewre4ewtingStatesactions"> 
    <div class="modal fade {!!$loadingSetting->modal_view_more_info_form_style!!}" wire:ignore.self role="dialog" id="modalloadingStates" tabindex="-1" aria-hidden="true" data-bs-keyboard="false">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body" style="width:100%;"> 
                <span>Downloading</span>
                <span class="loader"></span>
                <style>
                    .loader {
                    width: 175px;
                    height: 80px;
                    display: block;
                    margin: auto;
                    background-image: radial-gradient(circle 25px at 25px 25px, #FFF 100%, transparent 0), radial-gradient(circle 50px at 50px 50px, #FFF 100%, transparent 0), radial-gradient(circle 25px at 25px 25px, #FFF 100%, transparent 0), linear-gradient(#FFF 50px, transparent 0);
                    background-size: 50px 50px, 100px 76px, 50px 50px, 120px 40px;
                    background-position: 0px 30px, 37px 0px, 122px 30px, 25px 40px;
                    background-repeat: no-repeat;
                    position: relative;
                    box-sizing: border-box;
                    }
                    .loader::after {
                    content: '';  
                    left: 50%;
                    bottom: 0;
                    transform: translate(-50%, 0);
                    position: absolute;
                    border: 15px solid transparent;
                    border-top-color: #FF3D00;
                    box-sizing: border-box;
                    animation: fadePush 1s linear infinite;
                    }
                    .loader::before {
                    content: '';  
                    left: 50%;
                    bottom: 30px;
                    transform: translate(-50%, 0);
                    position: absolute;
                    width: 15px;
                    height: 15px;
                    background: #FF3D00;
                    box-sizing: border-box;
                    animation: fadePush 1s linear infinite;
                    }

                    @keyframes fadePush {
                    0% {
                        transform: translate(-50%, -15px);
                        opacity: 0;
                    }
                    50% {
                        transform: translate(-50%, 0px);
                        opacity: 1;
                    }
                    100% {
                        transform: translate(-50%, 15px);
                        opacity: 0;
                    }
                    }
    
                </style> 
                </div>
            </div>                
        </div>
    </div>
</div>