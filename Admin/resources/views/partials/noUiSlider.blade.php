@script
<script>
    $(document).ready(function() {
        var html5Slider = document.getElementById('search_revenue');
        if(html5Slider !== null){
            noUiSlider.create(html5Slider, {
                start: [{{$loadingSettingGlobal->table_revenue_level_from}}, {{$loadingSettingGlobal->table_revenue_level_to}}],
                connect: true,
                range: {
                    'min': {{$loadingSettingGlobal->table_revenue_level_min}}/{{$loadingSettingGlobal->table_revenue_level_unit}},
                    'max': {{$loadingSettingGlobal->table_revenue_level_max}}/{{$loadingSettingGlobal->table_revenue_level_unit}}
                }
            });

            var inputSearchRevenueFrom = document.getElementById('inputSearchRevenueFrom');
            var inputSearchRevenueTo = document.getElementById('inputSearchRevenueTo');
            html5Slider.noUiSlider.on('update', function (values, handle) {

                var value = values[handle];
                if (handle) {
                    if(inputSearchRevenueTo !== null){
                        inputSearchRevenueTo.value = value;
                    }                    
                    @this.set('search_revenue_to', value);
                }else {
                    if(inputSearchRevenueFrom !== null){
                        inputSearchRevenueFrom.value = value;
                    }
                    @this.set('search_revenue_from', value);
                }
            });
            if(inputSearchRevenueFrom !== null){
                inputSearchRevenueFrom.addEventListener('change', function () {
                html5Slider.noUiSlider.set([null, this.value]);
                });
            }
            if(inputSearchRevenueTo !== null){
                inputSearchRevenueTo.addEventListener('change', function () {
                html5Slider.noUiSlider.set([null, this.value]);
                });
            }
        }
    });
</script>
@endscript