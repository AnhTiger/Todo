@if(($loadingSettingGlobal->style_footer == 0))
@include('admin::partials.footer')
@elseif(($loadingSettingGlobal->style_footer == 1))
@include('admin::partials.footer1')
@elseif(($loadingSettingGlobal->style_footer == 2))
@include('admin::partials.footer2')
@endif