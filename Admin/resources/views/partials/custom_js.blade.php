<script>

  $(function() {
    var start = moment().subtract(29, 'days');
    var end = moment();
      function cb(start, end) {
        $('#filter_date span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
          Livewire.dispatch('dateFilterAction', { date : start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY') });
        }
        $('#filter_date').daterangepicker({
          autoApply: true,
          startDate: start,
          endDate: end,
          ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          }
        }, cb);
      cb(start, end);
  });

  $(function(){
    $("#datefilter_from").change(function(){
      let datefilter_from = $("#datefilter_from").val();
      Livewire.dispatch('dateFilterFrom',{ datefilter_from });
    });
  });

  $(function() {
    $("#datefilter_to").change(function(){
      let datefilter_to = $("#datefilter_to").val();
      Livewire.dispatch('dateFilterTo', { datefilter_to });
    });
  });

  $(function() {
    $('#singeDateFilter').daterangepicker({
      singleDatePicker: true,
      showDropdowns: true,
      minYear: 2022,
      maxYear: parseInt(moment().format('YYYY'),10)
    },function(start, end, label) {
      Livewire.dispatch('dateFilterActionCDRTeam',{ date : start.format('DD/MM/YYYY') });
    });
  });

  $(function() {
    var start = moment();
    var end = moment();
    function cb(start, end) {
        $('#filter_date_kpi span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
        Livewire.dispatch('dateFilterActionKpi', {date : start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY') });
    }
    $('#filter_date_kpi').daterangepicker({
        singleDatePicker: true,
        autoApply: true,
        startDate: start,
        endDate: end,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'This Week': [moment().startOf('isoWeek'), moment().endOf('isoWeek')],
            'Last Week': [moment().startOf('isoWeek').subtract(7, 'days'), moment().endOf('isoWeek').subtract(7, 'days')],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);
    cb(start, end);
  });

  function showAlertToast(content, type) {
    NioApp.Toast('<p> '+ content +' </p>', type, {
      position: 'top-right',
      progressBar: true,
      showDuration: 200,
      hideDuration: 1000,
      timeOut: 7000,
      extendedTimeOut: 1000

    });
  }

  @if(session()->has('success'))
  showAlertToast('{{ session('success') }}', 'success');
  @elseif(session()->has('error'))
  showAlertToast('{{ session('error') }}', 'error');
  @endif

document.addEventListener('livewire:init', () => {

    function showTrigerDelete(triggerDelete, deleteEmit, title = '{{ __("Are You Sure?") }}', text = '{{ __("Record will be deleted!") }}'){
    Livewire.on(triggerDelete, ({ idDelete }) => {
      Swal.fire({
        title: title,
        text: text,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#aaa',
        confirmButtonText: '{{ __("Confirm") }}',
        cancelButtonText: '{{ __("Cancel") }}'
      }).then((result) => {
             if (result.value) {
                 // calling destroy method to delete. id like $id in component.
                 Livewire.dispatch(deleteEmit, { id: idDelete })
                 // Listen event msgSuccess on Component. And show message
                 Livewire.on('msgSuccess', msgDel => {
                  showAlertToast(msgDel, 'success');
                })
               } else {
              }
            });
      });
    }

    function showTrigercreate(triggercreate, deleteEmit, title = '{{ __("Are You Sure?") }}', text = '{{ __("Create New Record!") }}'){
    Livewire.on(triggercreate, () => {
      Swal.fire({
        title: title,
        text: text,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#aaa',
        confirmButtonText: '{{ __("Confirm") }}',
        cancelButtonText: '{{ __("Cancel") }}'
      }).then((result) => {
             //if user clicks on delete
             if (result.value) {
                 // calling destroy method to delete. id like $id in component.
                 Livewire.dispatch(deleteEmit)
                 // Listen event msgSuccess on Component. And show message
                 Livewire.on('msgSuccess', msgDel => {
                  showAlertToast(msgDel, 'success');
                })
               }
                else {
              }
            });
      });
    }

    
    function showTrigerDeleteMedia(triggerDelete, deleteEmit, title = '{{ __("Are You Sure?") }}', text = '{{ __("Record will be deleted!") }}'){
      Livewire.on(triggerDelete, ({ idFolder }) => {
          //console.log(idFolder);
        Swal.fire({
          title: title,
          text: text,
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#aaa',
          confirmButtonText: '{{ __("Confirm") }}',
          cancelButtonText: '{{ __("Cancel") }}'
        }).then((result) => {
              //if user clicks on delete
              if (result.value) {
                  // calling destroy method to delete. id like $id in component.
                  Livewire.dispatch(deleteEmit, { idFolder: idFolder })
                  // Listen event msgSuccess on Component. And show message
                  Livewire.on('msgSuccess', msgDel => {
                    showAlertToast(msgDel, 'success');
                  })
                } else {
                  //Nothing
                }
              });
      });
    }

    function showTrigerDeleteMediaMutil(triggerDelete, deleteEmit, title = '{{ __("Are You Sure?") }}', text = '{{ __("Record will be deleted!") }}'){
      Livewire.on(triggerDelete, () => {
          //console.log(idFolder);
        Swal.fire({
          title: title,
          text: text,
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#aaa',
          confirmButtonText: '{{ __("Confirm") }}',
          cancelButtonText: '{{ __("Cancel") }}'
        }).then((result) => {
              //if user clicks on delete
              if (result.value) {
                  // calling destroy method to delete. id like $id in component.
                  Livewire.dispatch(deleteEmit)
                  // Listen event msgSuccess on Component. And show message
                  Livewire.on('msgSuccess', msgDel => {
                    showAlertToast(msgDel, 'success');
                  })
                } else {
                  //Nothing
                }
              });
      });
    }


  //Xoa. triggerDelete: Emit từ button click delete. deleteItem: Tên Function trong livewire
  showTrigerDeleteMedia('triggerRemoveTrash', 'emptyTrash', title = '{{ __("media.Empty trash") }}', text =
      '{{ __("media.Your request cannot rollback. Are you sure you wanna remove all items in trash?") }}');
  showTrigerDeleteMedia('triggerMoveFolderTrash', 'moveFolderTrash', title =
      '{{ __("media.Move items to trash") }}', text =
      '{{ __("media.Are you sure you want to move these items to trash?") }}');
  showTrigerDeleteMedia('triggerMoveFileTrash', 'moveFileTrash', title =
      '{{ __("media.Move items to trash") }}', text =
      '{{ __("media.Are you sure you want to move these items to trash?") }}');
  showTrigerDeleteMediaMutil('triggerMoveFileTrashMutil', 'moveFileTrashMutil', title =
      '{{ __("media.Move items to trash") }}', text =
      '{{ __("media.Are you sure you want to move these items to trash?") }}');
  showTrigerDeleteMedia('triggerDeletePermanentlyFloder', 'deletePermanentlyFloder', title =
      '{{ __("media.Delete item(s)") }}', text =
      '{{ __("media.Your request cannot rollback. Are you sure you wanna delete these items?") }}');

  showTrigerDeleteMedia('triggerDeletePermanentlyFile', 'deletePermanentlyFile', title =
      '{{ __("media.Delete item(s)") }}', text =
      '{{ __("media.Your request cannot rollback. Are you sure you wanna delete these items?") }}');

  showTrigerDeleteMedia('triggerDelete', 'deleteItem');   

  showTrigerDelete('triggerDelete', 'deleteItem');
  showTrigercreate('triggercreate', 'create');
  Livewire.on('responseSuccess', msgDel => {
    showAlertToast(msgDel, 'success');
  }) 
  Livewire.on('responsError', msgDel => {
    showAlertToast(msgDel, 'error');
  }) 
  
  Livewire.on('closeLayoutContactMainGlobal',()  => {
    document.querySelector('[data-target="layoutContactMainGlobal"]').click();
  });

  Livewire.on('closeLayoutSaleMainGlobal',()  => {
    document.querySelector('[data-target="layoutSaleMainGlobal"]').click();
  });

  Livewire.on('closeLayoutMenuLayoutMainGlobal',()  => {
    document.querySelector('[data-target="layoutMenuLayoutMainGlobal"]').click();
  });

  Livewire.on('closeLayoutUserInfoMainGlobal',()  => {
    document.querySelector('[data-target="layoutUserInfoMainGlobal"]').click();
  });

  Livewire.on('actionModalDispatch', (event) => {
      let modalId = event[0].modalId;
      let actionModal = event[0].actionModal;
      let flashMessage = event[0].flashMessage;
      let flashType = event[0].flashType;

      console.log(modalId, actionModal, flashMessage, flashType);

      if(actionModal == 'hide'){
          $(modalId).hide();
      }else if(actionModal == 'show'){
          $(modalId).show();
      }
      if(flashMessage != '' && flashType != ''){
          showAlertToast(flashMessage, flashType);
      }
  });

});
</script>