@script
<script>
    $(document).ready(function() {    
        Livewire.on('refreshTooltip', function () {
            jQuery(document).ready(function () {
                $('.reloadTooltip').tooltip('dispose'); 
                $('.reloadTooltip').tooltip();                       
            });           
        });    
    });
</script>
@endscript