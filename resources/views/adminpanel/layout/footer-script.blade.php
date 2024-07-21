<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- Toastr -->
<script src="{{ asset('customdownload/js/toastr.js') }}" ></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- Custom File Input -->
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<script src="{{ asset('customdownload/js/fixed.js') }}"></script>
<script src="{{ asset('customdownload/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('customdownload/js/toastr.js') }}" ></script>
<script src="{{ asset('customdownload/js/popper.js') }}"></script>
<script src="{{ asset('customdownload/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>

{{-- Toastr --}}
@if (Session::has('success'))
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-center",
        "timeOut": "3000",
    }
    toastr.success("{!! Session::get('success') !!}");
</script>
@endif

@if (Session::has('error'))
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-center",
        "timeOut": "3000",
    }
    toastr.error("{!! Session::get('error') !!}");
</script>
@endif

{{-- Datatable --}}
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>

<script>
  $(function () {
    bsCustomFileInput.init();
  });
</script>

<script>
  if ($('.content-wrapper').css('min-height') !=  '777px' ) {
        $('.menubar').hide();
  }

$(document).ready(function() {
  $('.nav-link').removeClass('active');
  var pgurl = document.location.href;
  console.log($('#dash').attr("href")+'/');
  console.log(pgurl);
  if ($('#dash').attr("href")+'/' == pgurl) {
      $('#dashboard').addClass("active");
  }
  $(".nav-link").each(function() {
      if ($(this).attr("href") == pgurl) {
          if ($(this).data('id') == 'notice') {
              $('#first').addClass("active");
              $('#notice').addClass("active");
              $('#first').parent().addClass("menu-open");
          }
          if ($(this).data('id') == 'warning') {
              $('#first').addClass("active");
              $('#warning').addClass("active");
              $('#first').parent().addClass("menu-open");
          }
          if ($(this).data('id') == 'user') {
              $('#user').addClass("active");
          }
          if ($(this).data('id') == 'file') {
              $('#file').addClass("active");
          }
          if ($(this).data('id') == 'leave') {
              $('#leave').addClass("active");
          }
          if ($(this).data('id') == 'holiday') {
              $('#holiday').addClass("active");
          }
      }
  })
  $(".nav-link").each(function() {
      if ($(this).attr("href") == pgurl) {
          $(this).addClass("active");
          if ($(this).data('id') == 'first') {
              $('#first').addClass("active");
              $('#first').parent().addClass("menu-open");
          }
      }
  })
});
</script>