@script
<script>
$(document).ready(function() {
    Livewire.on('CloseModalAction', function() {
        jQuery(document).ready(function() {
            $('#action').modal('hide');

        });
    });
    Livewire.on('CloseModalActionChat', function() {
        jQuery(document).ready(function() {
            $('#actionChat').modal('hide');

        });
    });
    Livewire.on('resetStepFormAction', function() {
        jQuery(document).ready(function() {
            self.NioApp.Stepper(".stepper-init");
            $("#ulResetActionForm").children().removeClass("done");

        });
    });
    Livewire.on('OpenModalAction', function() {
        jQuery(document).ready(function() {
            $('#action').modal('show');

        });
    });
    Livewire.on('ClosemodalloadingStates', function() {
        jQuery(document).ready(function() {
            $('#modalloadingStates').modal('hide');
            $('#modaluploadingStates').modal('hide');
            $('#loadinggallery').modal('hide');
            $('#action').modal('hide');
        });
    });
});
</script>
@endscript
<script>
    function uploadFileAction() {
        $('#modaluploadingStates').modal("show");
    }
    function downloadFileAction() {
        $('#modalloadingStates').modal("show");
    }
</script>