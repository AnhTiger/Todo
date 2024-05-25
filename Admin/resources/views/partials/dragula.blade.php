<script>
    $(document).ready(function() {
        "use strict";
        NioApp,
        jQuery,
        dragula([document.querySelector("#moveColumnDragula"), document.querySelector("#moveColumnDragula")]).on("drop", function(e) {
            const data = $('#moveColumnDragula > div >div >input').map(function() {
                return $(this).val();
            }).get()
            Livewire.dispatch('applyColumnSorting',{data : data });
        }),
        dragula([document.querySelector("#moveTabLayoutDragulaStyle1"), document.querySelector("#moveTabLayoutDragulaStyle1")]).on("drop", function(e) {
            const data = $('#moveTabLayoutDragulaStyle1 > div >div >input').map(function() {
                return $(this).val();
            }).get()
            Livewire.dispatch('applyDetailLayoutSorting',{data : data });
        }),
        dragula([document.querySelector("#moveTabDragulaStyle1"), document.querySelector("#moveTabDragulaStyle1")]).on("drop", function(e) {
            const data = $('#moveTabDragulaStyle1 > div >div >input').map(function() {
                return $(this).val();
            }).get()
            Livewire.dispatch('applyDetailSorting',{data : data });
        }),
        dragula([document.querySelector("#moveTabProfileDragulaStyle1"), document.querySelector("#moveTabProfileDragulaStyle1")]).on("drop", function(e) {
            const data = $('#moveTabProfileDragulaStyle1 > div >div >input').map(function() {
                return $(this).val();
            }).get()
            Livewire.dispatch('applyDetailProfileSorting',{data : data });
        }),
        dragula([document.querySelector("#moveTabRevenueDragulaStyle1"), document.querySelector("#moveTabRevenueDragulaStyle1")]).on("drop", function(e) {
            const data = $('#moveTabRevenueDragulaStyle1 > div >div >input').map(function() {
                return $(this).val();
            }).get()
            Livewire.dispatch('applyDetailRevenueSorting',{data : data });
        }),
        dragula([document.querySelector("#moveTabActivityDragulaStyle1"), document.querySelector("#moveTabActivityDragulaStyle1")]).on("drop", function(e) {
            const data = $('#moveTabActivityDragulaStyle1 > div >div >input').map(function() {
                return $(this).val();
            }).get()
            Livewire.dispatch('applyDetailActivitySorting',{data : data });
        }),
        dragula([document.querySelector("#moveTabOverviewDragulaStyle1"), document.querySelector("#moveTabOverviewDragulaStyle1")]).on("drop", function(e) {
            const data = $('#moveTabOverviewDragulaStyle1 > div >div >input').map(function() {
                return $(this).val();
            }).get()
            Livewire.dispatch('applyDetailOverviewSorting',{data : data });
        }),
        dragula([document.querySelector("#moveTabRevenueLayoutDragulaStyle1"), document.querySelector("#moveTabRevenueLayoutDragulaStyle1")]).on("drop", function(e) {
            const data = $('#moveTabRevenueLayoutDragulaStyle1 > div >div >input').map(function() {
                return $(this).val();
            }).get()
            Livewire.dispatch('applyDetailRevenueLayoutSorting',{data : data });
        }),
        dragula([document.querySelector("#moveTabActivityLayoutDragulaStyle1"), document.querySelector("#moveTabActivityLayoutDragulaStyle1")]).on("drop", function(e) {
            const data = $('#moveTabActivityLayoutDragulaStyle1 > div >div >input').map(function() {
                return $(this).val();
            }).get()
            Livewire.dispatch('applyDetailActivityLayoutSorting',{data : data });
        }),
        dragula([document.querySelector("#moveTabOverviewLayoutDragulaStyle1"), document.querySelector("#moveTabOverviewLayoutDragulaStyle1")]).on("drop", function(e) {
            const data = $('#moveTabOverviewLayoutDragulaStyle1 > div >div >input').map(function() {
                return $(this).val();
            }).get()
            Livewire.dispatch('applyDetailOverviewLayoutSorting',{data : data });
        }),
        dragula([document.querySelector("#basicLeftList"), document.querySelector("#basicRightList")]),
        dragula([document.querySelector("#themeLeft"), document.querySelector("#themeRight")]).on("drag", function(e) {
            e.className = e.className.replace("bg-white", "")
        }).on("drop", function(e) {
            e.className += " bg-warning-dim"
        }),
        dragula([document.querySelector("#removeSpillLeft"), document.querySelector("#removeSpillRight")], {
            removeOnSpill: !0
        }),
        dragula([document.querySelector("#not-removeSpillLeft"), document.querySelector("#not-removeSpillRight")], {
            removeOnSpill: !1
        }),
        dragula([document.querySelector("#both-copySpillLeft"), document.querySelector("#both-copySpillRight")], {
            copy: !0
        }),
        dragula([document.querySelector("#aside-copySpillLeft"), document.querySelector("#aside-copySpillRight")], {
            copy: function(e, t) {
                return t === document.querySelector("#aside-copySpillLeft")
            },
            accepts: function(e, t) {
                return t !== document.querySelector("#aside-copySpillLeft")
            }
        }),
        dragula([document.querySelector("#dragHandleLeft"), document.querySelector("#dragHandleRight")], {
            moves: function(e, t, r) {
                return r.classList.contains("handle")
            }
        }),
        dragula([document.querySelector("#dragContainer")]);
    });
</script>
<script>
    $(document).ready(function() {
        Livewire.on('reloadDragula', function () {
            jQuery(document).ready(function () {
                "use strict";
        NioApp,
        jQuery,
        dragula([document.querySelector("#moveColumnDragula"), document.querySelector("#moveColumnDragula")]).on("drop", function(e) {
            const data = $('#moveColumnDragula > div >div >input').map(function() {
                return $(this).val();
            }).get()
            Livewire.dispatch('applyColumnSorting',{data : data });
        }),
        dragula([document.querySelector("#moveTabLayoutDragulaStyle1"), document.querySelector("#moveTabLayoutDragulaStyle1")]).on("drop", function(e) {
            const data = $('#moveTabLayoutDragulaStyle1 > div >div >input').map(function() {
                return $(this).val();
            }).get()
            Livewire.dispatch('applyDetailLayoutSorting',{data : data });
        }),
        dragula([document.querySelector("#moveTabDragulaStyle1"), document.querySelector("#moveTabDragulaStyle1")]).on("drop", function(e) {
            const data = $('#moveTabDragulaStyle1 > div >div >input').map(function() {
                return $(this).val();
            }).get()
            Livewire.dispatch('applyDetailSorting',{data : data });
        }),
        dragula([document.querySelector("#moveTabProfileDragulaStyle1"), document.querySelector("#moveTabProfileDragulaStyle1")]).on("drop", function(e) {
            const data = $('#moveTabProfileDragulaStyle1 > div >div >input').map(function() {
                return $(this).val();
            }).get()
            Livewire.dispatch('applyDetailProfileSorting',{data : data });
        }),
        dragula([document.querySelector("#moveTabRevenueDragulaStyle1"), document.querySelector("#moveTabRevenueDragulaStyle1")]).on("drop", function(e) {
            const data = $('#moveTabRevenueDragulaStyle1 > div >div >input').map(function() {
                return $(this).val();
            }).get()
            Livewire.dispatch('applyDetailRevenueSorting',{data : data });
        }),
        dragula([document.querySelector("#moveTabActivityDragulaStyle1"), document.querySelector("#moveTabActivityDragulaStyle1")]).on("drop", function(e) {
            const data = $('#moveTabActivityDragulaStyle1 > div >div >input').map(function() {
                return $(this).val();
            }).get()
            Livewire.dispatch('applyDetailActivitySorting',{data : data });
        }),
        dragula([document.querySelector("#moveTabOverviewDragulaStyle1"), document.querySelector("#moveTabOverviewDragulaStyle1")]).on("drop", function(e) {
            const data = $('#moveTabOverviewDragulaStyle1 > div >div >input').map(function() {
                return $(this).val();
            }).get()
            Livewire.dispatch('applyDetailOverviewSorting',{data : data });
        }),
        dragula([document.querySelector("#moveTabRevenueLayoutDragulaStyle1"), document.querySelector("#moveTabRevenueLayoutDragulaStyle1")]).on("drop", function(e) {
            const data = $('#moveTabRevenueLayoutDragulaStyle1 > div >div >input').map(function() {
                return $(this).val();
            }).get()
            Livewire.dispatch('applyDetailRevenueLayoutSorting',{data : data });
        }),
        dragula([document.querySelector("#moveTabActivityLayoutDragulaStyle1"), document.querySelector("#moveTabActivityLayoutDragulaStyle1")]).on("drop", function(e) {
            const data = $('#moveTabActivityLayoutDragulaStyle1 > div >div >input').map(function() {
                return $(this).val();
            }).get()
            Livewire.dispatch('applyDetailActivityLayoutSorting',{data : data });
        }),
        dragula([document.querySelector("#moveTabOverviewLayoutDragulaStyle1"), document.querySelector("#moveTabOverviewLayoutDragulaStyle1")]).on("drop", function(e) {
            const data = $('#moveTabOverviewLayoutDragulaStyle1 > div >div >input').map(function() {
                return $(this).val();
            }).get()
            Livewire.dispatch('applyDetailOverviewLayoutSorting',{data : data });
        }),
        dragula([document.querySelector("#basicLeftList"), document.querySelector("#basicRightList")]),
        dragula([document.querySelector("#themeLeft"), document.querySelector("#themeRight")]).on("drag", function(e) {
            e.className = e.className.replace("bg-white", "")
        }).on("drop", function(e) {
            e.className += " bg-warning-dim"
        }),
        dragula([document.querySelector("#removeSpillLeft"), document.querySelector("#removeSpillRight")], {
            removeOnSpill: !0
        }),
        dragula([document.querySelector("#not-removeSpillLeft"), document.querySelector("#not-removeSpillRight")], {
            removeOnSpill: !1
        }),
        dragula([document.querySelector("#both-copySpillLeft"), document.querySelector("#both-copySpillRight")], {
            copy: !0
        }),
        dragula([document.querySelector("#aside-copySpillLeft"), document.querySelector("#aside-copySpillRight")], {
            copy: function(e, t) {
                return t === document.querySelector("#aside-copySpillLeft")
            },
            accepts: function(e, t) {
                return t !== document.querySelector("#aside-copySpillLeft")
            }
        }),
        dragula([document.querySelector("#dragHandleLeft"), document.querySelector("#dragHandleRight")], {
            moves: function(e, t, r) {
                return r.classList.contains("handle")
            }
        }),
        dragula([document.querySelector("#dragContainer")]);
            });           
        });
    });
</script>