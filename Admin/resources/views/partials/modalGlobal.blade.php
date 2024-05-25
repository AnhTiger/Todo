@script
<script>
$(document).ready(function() {
    Livewire.on('CloseModalActionChatUserGlobal', function() {
        jQuery(document).ready(function() {
            $('#createNewChatUserGlobal').modal('hide');

        });
    });
});
</script>
@endscript