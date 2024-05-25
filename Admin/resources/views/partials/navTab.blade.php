@script
<script>
    $(document).ready(function() {
        Livewire.on('refreshTab', function () {
            jQuery(document).ready(function () {
                const bsTab = new bootstrap.Tab('#refreshTab');
                bsTab.dispose();      
            });           
        });
    });
</script>
@endscript