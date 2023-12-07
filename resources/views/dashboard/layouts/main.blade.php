<!DOCTYPE html>
<html lang="en">

@include('dashboard.layouts.header')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('dashboard.layouts.navbar')
        @yield('container')


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
        <strong>Copyright &copy; 2023 <a href="padangpanjangkotabps.id">BPS Kota Padang Panjang</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0
        </div>
    </footer>

    </div>

</body>

</html>
