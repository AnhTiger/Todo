@script
<script>
    $(document).ready(function() {
        window.TAGIFY_DEBUG = false
        var input_tag_user_global = document.querySelector('#tag_global');
            new Tagify(input_tag_user_global, {
            callbacks: {
                "invalid": onInvalidTag
            },
        });       
        function onInvalidTag(e){
            console.log("invalid", e.detail)
        } 
        $("#tag_global" ).on( "change", function() {

            var tagify_tag_user_global_chat = new Tagify(document.querySelector('#tag_global'));
            if(tagify_tag_user_global_chat != null){
                const data_tag_user_global_chat = [];
                tagify_tag_user_global_chat.value.forEach((item) => {
                    data_tag_user_global_chat.push(item.value);
                });
                if(data_tag_user_global_chat.length){
                    Livewire.dispatch('loadingMountTagifyTagChatGlobal',{data_tag : data_tag_user_global_chat });
                }
            }
        });
    });
</script>
@endscript