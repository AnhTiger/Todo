<script>
jQuery.event.special.touchstart = {
    setup: function( _, ns, handle ) {
        this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
    }
};
jQuery.event.special.touchmove = {
    setup: function( _, ns, handle ) {
        this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
    }
};
jQuery.event.special.wheel = {
    setup: function( _, ns, handle ){
        this.addEventListener("wheel", handle, { passive: true });
    }
};
jQuery.event.special.mousewheel = {
    setup: function( _, ns, handle ){
        this.addEventListener("mousewheel", handle, { passive: true });
    }
};
</script>  
<script>
    window.addEventListener("popstate", function(e){
        location.reload();
    });
</script>  
<script data-navigate-once>
    document.addEventListener("DOMContentLoaded", () => {
            self.NioApp.TGL.content(".toggle");
            self.NioApp.TGL.expand(".toggle-expand");
            // self.NioApp.TGL.expand(".nk-nav-toggle");
            self.NioApp.TGL.expand(".toggle-opt");
            self.NioApp.Stepper(".stepper-init");
            self.NioApp.Tagify(".js-tagify");
            self.NioApp.PassSwitch();
            self.NioApp.CurrentLink();
            self.NioApp.ClassNavMenu();
            self.NioApp.BS.modalfix();
            self.NioApp.BS.ddfix();
            self.NioApp.BS.tabfix();
            self.NioApp.BS.ddfix();
    });
    document.addEventListener('livewire:navigated', () => {
            self.NioApp.TGL.content(".toggle");
            self.NioApp.TGL.expand(".toggle-expand");
            // self.NioApp.TGL.expand(".nk-nav-toggle");
            self.NioApp.TGL.expand(".toggle-opt");
            self.NioApp.Stepper(".stepper-init");
            self.NioApp.Tagify(".js-tagify");
            self.NioApp.PassSwitch();
            self.NioApp.CurrentLink();
            self.NioApp.ClassNavMenu();
            self.NioApp.BS.modalfix();
            self.NioApp.BS.ddfix();
            self.NioApp.BS.tabfix();
            self.NioApp.BS.ddfix();
    })
</script>  