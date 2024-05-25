@script
<script>
    $(document).ready(function() {
        window.TAGIFY_DEBUG = false
        var input_phone_global = document.querySelector('#phone');
            new Tagify(input_phone_global, {
            pattern: /^[0-9]+$/,
            callbacks: {
                "invalid": onInvalidTag
            },
        });   
        var input_address_global = document.querySelector('#address');
            new Tagify(input_address_global, {
            delimiters       : null,
            callbacks: {
            "invalid": onInvalidTag
            },
        });                      
        function onInvalidTag(e){
            console.log("invalid", e.detail)
        } 

        $("#phone" ).on( "change", function() {

            var tagify_phone_global = new Tagify(document.querySelector('#phone'));
            if(tagify_phone_global != null){
                    const data_phone_global = [];
                    tagify_phone_global.value.forEach((item) => {
                        data_phone_global.push(item.value);
                    });
                    if(data_phone_global.length){
                        Livewire.dispatch('loadingMountTagifyPhone',{data_phone : data_phone_global });
                    }

            }

        });        
        $("#address" ).on( "change", function() {

            var tagify_address_global = new Tagify(document.querySelector('#address'));
            if(tagify_address_global != null){
                    const data_address_global = [];
                    tagify_address_global.value.forEach((item) => {
                        data_address_global.push(item.value);
                    });
                    if(data_address_global.length){
                        Livewire.dispatch('loadingMountTagifyAddress',{data_address : data_address_global });
                    }
            }

        });             
    });
</script>
@endscript