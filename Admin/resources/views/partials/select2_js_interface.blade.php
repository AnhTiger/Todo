@script
<script>
    $(document).ready(function() {
        $('.form-chart-select2').select2(
            {
                allowClear: true,
                templateResult: formatIcon,
                templateSelection: formatIcon2
            }
        );
        $('.form-chart-select2').on('change', function (e) {
            let data = $(this).select2("val");
            let nameSelect = $(this).attr('wire:model.lazy');
            if(!(nameSelect == null ||nameSelect == "undefined" ||nameSelect == "")){
                @this.set(nameSelect, data);
            }else{
                nameSelect = $(this).attr('wire:model.defer');
                if(!(nameSelect == null ||nameSelect == "undefined" ||nameSelect == "")){
                    @this.set(nameSelect, data);
                }
            }
        });

        $('.form-chart-select2-tooltip').select2(
            {
                allowClear: true,
                templateResult: formatToolTip,
                templateSelection: formatToolTip
            }
        );
        $('.form-chart-select2-tooltip').on('change', function (e) {
            let data = $(this).select2("val");
            let nameSelect = $(this).attr('wire:model.lazy');
            if(!(nameSelect == null ||nameSelect == "undefined" ||nameSelect == "")){
                @this.set(nameSelect, data);
            }else{
                nameSelect = $(this).attr('wire:model.defer');
                if(!(nameSelect == null ||nameSelect == "undefined" ||nameSelect == "")){
                    @this.set(nameSelect, data);
                }
            }
        });

        function  formatToolTip ( option ) { 

            if (isNaN(option.id) || option.id == null ) { 
                return option. text ; 

            }else{

                var tooktipLabel = $(option. element ). data ( 'tooltip' ); 
                var lable = ""; 
                if(!(tooktipLabel == null ||tooktipLabel == "undefined" ||tooktipLabel == "")){
                    $lable = $( '<span  data-toggle="tooltip" data-container="body" data-html="true" title=\''+tooktipLabel+'\'>' + option. text + '</span>') ; 
                }else{
                    $lable = $( '<span>' + option. text + '</span>') ; 
                }
                return $lable; 
            } 
        } 

        function  formatIcon ( option ) { 
            if (isNaN(option.id) || option.id == null ) { 
                return option. text ; 

            }else{
                var optimage = $(option. element ). data ( 'imagesrc' ); 
                var optname = $(option. element ). data ( 'name' ); 
                var optcode = $(option. element ). data ( 'code' ); 
                var optdescription = $(option. element ). data ( 'description' ); 

                var string = "";
                var count = 0;
                if(optname == null ||optname == "undefined" ||optname == ""){
                    optname = "";
                }else{
                    count ++;
                }
                if(optcode == null ||optcode == "undefined" ||optcode == ""){
                    optcode = "";
             
                }else{
                    count ++;
                }
                if(optdescription == null ||optdescription == "optdescription" ||optdescription == ""){
                    optdescription = "";
                  
                }else{
                    count ++;
                } 
                var locale = '{!! Session()->get('applocale') !!}';
                if(locale == "" || locale == null){

                    locale = '{!! config('app.fallback_locale') !!}';
                    
                }
                if(locale == "vn"){
                    string = "<span class='ps-1'><strong>Tên</strong> : "+ optname + " - <strong>Mã</strong> : "+optcode+ " - <strong>Mô tả</strong> : "+optdescription +"</span>";
                }
                else{
                    string = "<span class='ps-1'><strong>Name</strong> : "+ optname + " - <strong>Code</strong> : "+optcode+ " - <strong>Description</strong> : "+optdescription +"</span>";
                }

                var lable = ""; 
                if(count == 0){
                    string = option. text;
                }
                if(!(optimage == null ||optimage == "undefined" ||optimage == "")){
                    $lable = $( '<span class="d-inline-flex"><img src="' + optimage + '" class="user-avatar img-avatar img-100-cycle" /> ' + string + '</span>') ; 
                }else{
                    $lable = $( '<span>' + string + '</span>') ; 
                }

                return $lable; 
            } 
        }  
        function  formatIcon2 ( option ) { 
            if (isNaN(option.id) || option.id == null ) { 
                return option. text ; 

            }else{
                var optimage = $(option. element ). data ( 'imagesrc' ); 
                var optname = $(option. element ). data ( 'name' ); 
                var optcode = $(option. element ). data ( 'code' ); 
                var optdescription = $(option. element ). data ( 'description' ); 

                var string = "";
                var count = 0;
                if(optname == null ||optname == "undefined" ||optname == ""){
                    optname = "";
                }else{
                    count ++;
                }
                if(optcode == null ||optcode == "undefined" ||optcode == ""){
                    optcode = "";
             
                }else{
                    count ++;
                }
                if(optdescription == null ||optdescription == "optdescription" ||optdescription == ""){
                    optdescription = "";
                  
                }else{
                    count ++;
                } 
                var locale = '{!! Session()->get('applocale') !!}';
                if(locale == "" || locale == null){

                    locale = '{!! config('app.fallback_locale') !!}';
                    
                }
                if(locale == "vn"){
                    string = "<span class='ps-1'><strong>Tên</strong> : "+ optname + " - <strong>Mã</strong> : "+optcode+ " - <strong>Mô tả</strong> : "+optdescription +"</span>";
                }
                else{
                    string = "<span class='ps-1'><strong>Name</strong> : "+ optname + " - <strong>Code</strong> : "+optcode+ " - <strong>Description</strong> : "+optdescription +"</span>";
                }

                var lable = ""; 
                if(count == 0){
                    string = option. text;
                }
                if(!(optimage == null ||optimage == "undefined" ||optimage == "")){
                    $lable = $( '<span class="d-inline-flex"><img src="' + optimage + '" class="user-avatar img-avatar img-60-cycle" /> ' + string + '</span>') ; 
                }else{
                    $lable = $( '<span>' + string + '</span>') ; 
                }

                return $lable; 
            } 
        }  
        Livewire.on('refreshSelect2Interface', function () {
            jQuery(document).ready(function () {

                $('.form-chart-select2').select2(
                    {
                        allowClear: true,
                        templateResult: formatIcon,
                        templateSelection: formatIcon2
                    }
                ); 
                $('.form-chart-select2-tooltip').select2(
                    {
                        allowClear: true,
                        templateResult: formatToolTip,
                        templateSelection: formatToolTip
                    }
                ); 
            });           
        });    
    });
</script>
@endscript

