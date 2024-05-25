
<script>
    var checkIcon = {!!$loadingSettingGlobal->style_light_dark!!};
    if(checkIcon == 1){
        document.getElementById("icon_dark_mode_global").style.display = "none";
        document.getElementById("icon_auto_mode_global").style.display = "none";
        document.getElementById("icon_light_mode_global").style.display = "block";
        $('body').removeClass('dark-mode');

    }else if(checkIcon == 0){
        document.getElementById("icon_light_mode_global").style.display = "none";
        document.getElementById("icon_auto_mode_global").style.display = "none";
        document.getElementById("icon_dark_mode_global").style.display = "block";
        $('body').removeClass('dark-mode');
        $('body').addClass('dark-mode');
    }else if(checkIcon == 2){
        document.getElementById("icon_dark_mode_global").style.display = "none";
        document.getElementById("icon_light_mode_global").style.display = "none";
        document.getElementById("icon_auto_mode_global").style.display = "block";
        $('body').removeClass('dark-mode');
        $('body').addClass('dark-mode');
    }

    function darkSwitchFunction() {
        var value =  $('#lable-check-dark-switch').val();

        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $.ajax({
            type: 'POST',
            url:"{{ route('admin.darkMode') }}",
            data: {'value' : value},
            success:function(data){
                console.log(data);
            }
        });
        var nowStatus = 0;
        if (value == 1) {
            $('body').removeClass('dark-mode');
            $('body').addClass('dark-mode');
            $("#lable-check-dark-switch").val("0");
            nowStatus = 0;
        }else if(value == 0) {
            $('body').removeClass('dark-mode');
            $("#lable-check-dark-switch").val("2");
            nowStatus = 2;
        }else if(value == 2) {
            $('body').removeClass('dark-mode');
            $("#lable-check-dark-switch").val("1");
            nowStatus = 1;
        }
        if(nowStatus == 1){
            document.getElementById("icon_dark_mode_global").style.display = "none";
            document.getElementById("icon_auto_mode_global").style.display = "none";
            document.getElementById("icon_light_mode_global").style.display = "block";
        }else if(nowStatus == 0){
            document.getElementById("icon_light_mode_global").style.display = "none";
            document.getElementById("icon_auto_mode_global").style.display = "none";
            document.getElementById("icon_dark_mode_global").style.display = "block";
        }else if(nowStatus == 2){
            document.getElementById("icon_dark_mode_global").style.display = "none";
            document.getElementById("icon_light_mode_global").style.display = "none";
            document.getElementById("icon_auto_mode_global").style.display = "block";
        }
    }

</script>