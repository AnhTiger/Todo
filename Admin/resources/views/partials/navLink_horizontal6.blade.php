@if($loadingSettingGlobal->style_menu)
<ul class="nk-menu nk-menu-main ui-s2">
    @foreach($menuMain as $menu)
    @if(arrCompare(jsonToArray($menu['permission']),$listArrPermission,$userInfoGlobal))
    @if($menu['children'])
    <li class="nk-menu-item has-sub">
        <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
            <span class="nk-menu-text">{!!checkIconMenu($menu['icon'])!!} {{ __(':key', [ 'key' => $menu['name']]) }}</span>
        </a>
        <ul class="nk-menu-sub">
        @foreach($menu['children'] as $menuChildren)
        @if(arrCompare(jsonToArray($menuChildren['permission']),$listArrPermission,$userInfoGlobal))
        @if($menuChildren['children'])
        <li class="nk-menu-item has-sub">
            <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">	                            
                <span class="nk-menu-text">{!!checkIconMenu($menuChildren['icon'])!!} {{ __(':key', [ 'key' => $menuChildren['name']]) }}</span>
            </a>
            <ul class="nk-menu-sub">
            @foreach($menuChildren['children'] as $menuChildrenChildren)
            @if(arrCompare(jsonToArray($menuChildrenChildren['permission']),$listArrPermission,$userInfoGlobal))
            @if($menuChildrenChildren['children'])
            <li class="nk-menu-item has-sub">
                <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">                                
                    <span class="nk-menu-text">{!!checkIconMenu($menuChildrenChildren['icon'])!!} {{ __(':key', [ 'key' => $menuChildrenChildren['name']]) }}</span>
                </a>
                <ul class="nk-menu-sub">
                @foreach($menuChildrenChildren['children'] as $menuChildrenChildrenChildren)
                @if(arrCompare(jsonToArray($menuChildrenChildrenChildren['permission']),$listArrPermission,$userInfoGlobal))
                @if($menuChildrenChildrenChildren['children'])
                <li class="nk-menu-item has-sub">
                    <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">	
                        <span class="nk-menu-text">{!!checkIconMenu($menuChildrenChildrenChildren['icon'])!!} {{ __(':key', [ 'key' => $menuChildrenChildrenChildren['name']]) }}</span>
                    </a>
                    <ul class="nk-menu-sub">
                    @foreach($menuChildrenChildrenChildren['children'] as $menuChildrenChildrenChildrenChildren)
                        @if(arrCompare(jsonToArray($menuChildrenChildrenChildrenChildren['permission']),$listArrPermission,$userInfoGlobal))
                        <li class="nk-menu-item">
                        <a wire:navigate.hover href="{!!$menuChildrenChildrenChildrenChildren['route']!!}"  class="nk-menu-link">						
                            <span class="nk-menu-text">{!!checkIconMenu($menuChildrenChildrenChildrenChildren['icon'])!!} {{ __(':key', [ 'key' => $menuChildrenChildrenChildrenChildren['name']]) }}</span>
                        </a>
                        </li>
                        @endif
                    @endforeach
                    </ul>
                @else
                    <li class="nk-menu-item">
                        <a wire:navigate.hover href="{!!$menuChildrenChildrenChildren['route']!!}"  class="nk-menu-link">					
                            <span class="nk-menu-text">{!!checkIconMenu($menuChildrenChildrenChildren['icon'])!!} {{ __(':key', [ 'key' => $menuChildrenChildrenChildren['name']]) }}</span>
                        </a>
                    </li>
                @endif
                @endif
                @endforeach
                </ul>
            </li>
            @else    
                <li class="nk-menu-item">
                    <a wire:navigate.hover href="{!!$menuChildrenChildren['route']!!}"  class="nk-menu-link">			
                        <span class="nk-menu-text">{!!checkIconMenu($menuChildrenChildren['icon'])!!} {{ __(':key', [ 'key' => $menuChildrenChildren['name']]) }}</span>
                    </a>
                </li>
            @endif
            @endif
            @endforeach
            </ul>
        </li>
        @else
            <li class="nk-menu-item">
                <a wire:navigate.hover href="{!!$menuChildren['route']!!}"  class="nk-menu-link">
                    <span class="nk-menu-text">{!!checkIconMenu($menuChildren['icon'])!!} {{ __(':key', [ 'key' => $menuChildren['name']]) }}</span>
                </a>
            </li>
        @endif
        @endif
        @endforeach
        </ul>
    </li>
    @else
    <li class="nk-menu-item has-sub">
        <a wire:navigate.hover href="{!!$menu['route']!!}" class="nk-menu-link">
            <span class="nk-menu-text">{!!checkIconMenu($menu['icon'])!!} {{ __(':key', [ 'key' => $menu['name']]) }}</span>
        </a>
    </li>
    @endif
    @endif
    @endforeach
</ul><!-- .nk-menu -->
@else

<ul class="nk-menu nk-menu-main ui-s2">
    @foreach($menuMain as $menu)
    @if(arrCompare(jsonToArray($menu['permission']),$listArrPermission,$userInfoGlobal))
    <li class="nk-menu-item has-sub">
        <a wire:navigate.hover href="{!!$menu['route']!!}" class="nk-menu-link">
        <span class="nk-menu-text">{!!checkIconMenu($menu['icon'])!!} {{ __(':key', [ 'key' => $menu['name']]) }}</span>
        </a>
    </li>
    @endif
    @endforeach
</ul><!-- .nk-menu -->

@endif