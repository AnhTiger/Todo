
<li class="dropdown chats-dropdown">
    <span class="{!!$loadingSettingGlobal->time_count_down_expire_tfa!!}" id = "timeCountDownGlobal"></span>
    <script data-navigate-once>
    document.addEventListener("DOMContentLoaded", () => {
    var countDownDate = new Date({!!getTimeExprireTFAJavascript($userInfoGlobal)!!}).getTime();
    var ActionVerify = 0;
    var countDownDateJS = setInterval(function() {
        
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        document.getElementById("timeCountDownGlobal").innerHTML = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s " + " {!!$loadingSettingGlobal->icon_count_down!!}";


        if (distance < 0) {
            clearInterval(countDownDateJS);
            document.getElementById("timeCountDownGlobal").innerHTML = "EXPIRED";
            var host = "{!!getHostForAction()!!}";
                if(ActionVerify == 0){
                    window.location.href = host+"/admin";

                }
        }
        if(ActionVerify == 0 && days == 0 && hours == 0 ){
            if(minutes == 10 && seconds == 0 ){
                NioApp.Toast('{{ __('You only have 10 minutes left before your session ends. A new confirmation email has been sent to you. Please authenticate to avoid interruptions.') }}', 'info', {
                    position: 'top-left',
                    showDuration: 200,
                    hideDuration: 1000,
                    timeOut: 0,
                    extendedTimeOut: 1000
                }); 
                Livewire.dispatch('SendActionEmailForTFAGlobal');
                console.log("Hello world!");

            }else if((minutes == 5) && seconds == 0 ){

                NioApp.Toast('{{ __('You only have 6 minutes left before your session ends. A new confirmation email has been sent to you. Please authenticate to avoid interruptions.') }}', 'error', {
                    position: 'top-left',
                    progressBar: true,
                    showDuration: 200,
                    hideDuration: 1000,
                    timeOut: 0,
                    extendedTimeOut: 1000
                }); 
            }else if((minutes == 3) && seconds == 0 ){
                NioApp.Toast('{{ __('You only have 3 minutes left before your session ends. A new confirmation email has been sent to you. Please authenticate to avoid interruptions.') }}', 'error', {
                    position: 'top-left',
                    progressBar: true,
                    showDuration: 200,
                    hideDuration: 1000,
                    timeOut: 0,
                    extendedTimeOut: 1000
                }); 
            }

        }
    }, 1000);

        window.Echo.channel('messageTFATrigger{!!host()!!}')
            .listen('.sendMessageTFATrigger', (id) => {
                    var get_trigger = "{!!getHost()."_verified".config('app.tfa_trigger_cookies').$userInfoGlobal->id!!}";
                    console.log(id);
                    if(id['id'] ===  get_trigger){

                        ActionVerify = 1;
                        clearInterval(countDownDateJS);
                        NioApp.Toast('{{ __('You have just confirmed 2 steps. Please reload the website to refresh the time.') }}', 'success', {
                            position: 'top-right',
                            progressBar: true,
                            showDuration: 200,
                            hideDuration: 1000,
                            timeOut: 0,
                            extendedTimeOut: 1000
                        }); 

                    }
            });
        });

    </script>
</li>
