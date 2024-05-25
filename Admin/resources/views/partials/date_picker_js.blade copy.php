@script
<script>
    $(document).ready(function() {
        $('.date-picker-form').datepicker();
        $('.date-picker-form').on('change', function (e) {
            let nameSelect = $(this).attr('wire:model.lazy');
            if(!(nameSelect == null ||nameSelect == "undefined" ||nameSelect == "")){
                @this.set(nameSelect, e.target.value);
            }
        });            
        Livewire.on('reloadDatePicker', function () {
            jQuery(document).ready(function () {
                $('.date-picker-form').datepicker();
            });  
        });  
    });
</script>
@endscript