  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021-2023 <a href="https://d3teck.com">d3teck.com</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
    
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ url('public/backend/plugins/jquery/jquery.min.js' )}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('public/backend/plugins/jquery-ui/jquery-ui.min.js' )}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ url('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js' )}}"></script>
<!-- ChartJS -->
<script src="{{ url('public/backend/plugins/chart.js/Chart.min.js' )}}"></script>
<!-- Sparkline -->
<script src="{{ url('public/backend/plugins/sparklines/sparkline.js' )}}"></script>
<!-- JQVMap -->
<script src="{{ url('public/backend/plugins/jqvmap/jquery.vmap.min.js' )}}"></script>
<script src="{{ url('public/backend/plugins/jqvmap/maps/jquery.vmap.usa.js' )}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url('public/backend/plugins/jquery-knob/jquery.knob.min.js' )}}"></script>
<!-- daterangepicker -->
<script src="{{ url('public/backend/plugins/moment/moment.min.js' )}}"></script>
<script src="{{ url('public/backend/plugins/daterangepicker/daterangepicker.js' )}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ url('public/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js' )}}"></script>
<!-- Summernote -->
<script src="{{ url('public/backend/plugins/summernote/summernote-bs4.min.js' )}}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('public/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js' )}}"></script>
<!-- AdminLTE App -->
<script src="{{ url('public/backend/dist/js/adminlte.js' )}}"></script>


@yield('backend.scripts')

@section('backend.scripts')