


</div>
<!-- Argon Scripts -->
<script src="<?= BASEURL ?>/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= BASEURL ?>/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= BASEURL ?>/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= BASEURL ?>/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= BASEURL ?>/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?= BASEURL ?>/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= BASEURL ?>/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= BASEURL ?>/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= BASEURL ?>/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="<?= BASEURL ?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASEURL ?>/vendor/js-cookie/js.cookie.js"></script>
<script src="<?= BASEURL ?>/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?= BASEURL ?>/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<script src="<?= BASEURL ?>/vendor/chart.js/dist/Chart.min.js"></script>
<script src="<?= BASEURL ?>/vendor/chart.js/dist/Chart.extension.js"></script>
<script src="<?= BASEURL ?>/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="<?= BASEURL ?>/js/argon.min9f1e.js?v=1.1.0"></script>
<script src="<?= BASEURL ?>/vendor/dropzone/dist/min/dropzone.min.js"></script>
<script src="<?= BASEURL ?>/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="<?= BASEURL ?>/js/script.js"></script>

<script>

  $('.mydatatable').DataTable({
    order: [
    [0, 'asc']
    ],
    pagingType: 'full_numbers'
  });
setInterval(function(){

    $.ajax({
      url : 'http://localhost/Inventaris_skensa/proses/notif',
      data: {},
      method:'post',
      dataType: 'json',
      success: function(data){
        $('#con_pinjam').html(data);
        $('#con_pinjam2').html(data);
      }
    });

},2000)
function load_unseen_notification(view = ''){
     $.ajax({
      url : 'http://localhost/Inventaris_skensa/proses/get_notif',
      method:"POST",
      data:{view:view},
      dataType: 'json',
      success: function(data){
        console.log(data);
        $('#notif').html(data.notification);
      }
    });
}
load_unseen_notification();
setInterval(function(){ 
    load_unseen_notification();; 
  }, 5000);

  </script>
</body>

</html>