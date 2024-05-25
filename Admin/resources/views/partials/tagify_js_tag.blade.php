@script
<script>
    $(document).ready(function() {
        window.TAGIFY_DEBUG = false
        var input_tag_global = document.querySelector('#tag');
            new Tagify(input_tag_global, {
            callbacks: {
                "invalid": onInvalidTag
            },
        });       
        
        var input_tag_global_chat = document.querySelector('#tag_chat');
            new Tagify(input_tag_global_chat, {
            callbacks: {
                "invalid": onInvalidTag
            },
        });      


        function onInvalidTag(e){
            console.log("invalid", e.detail)
        } 
        $("#tag_chat" ).on( "change", function() {

            var tagify_tag_global_chat = new Tagify(document.querySelector('#tag_chat'));
            if(tagify_tag_global_chat != null){
                    const data_tag_global_chat = [];
                    tagify_tag_global_chat.value.forEach((item) => {
                        data_tag_global_chat.push(item.value);
                    });
                    if(data_tag_global_chat.length){
                        Livewire.dispatch('loadingMountTagifyTagChat',{data_tag : data_tag_global_chat });
                    }

            }

        });
        $("#tag" ).on( "change", function() {

            var tagify_tag_global = new Tagify(document.querySelector('#tag'));
            if(tagify_tag_global != null){
                    const data_tag_global = [];
                    tagify_tag_global.value.forEach((item) => {
                        data_tag_global.push(item.value);
                    });
                    if(data_tag_global.length){
                        Livewire.dispatch('loadingMountTagifyTag',{data_tag : data_tag_global });
                    }

            }

        });
    });
</script>
@endscript