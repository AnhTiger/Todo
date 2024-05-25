@script
<script>
    $(document).ready(function() {    
        Livewire.on('refreshPopover', function () {
            jQuery(document).ready(function () {
                $('.reloadPopover').popover('dispose'); 
                $('.reloadPopover').popover();                            
            });           
        });    
    });
</script>
<script>
    document.addEventListener('livewire:navigated', () => {
        $('.reloadPopover').popover('dispose'); 
        $('.reloadPopover').popover();      
    })
</script>
@endscript