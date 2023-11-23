@extends('malink.layouts.main')

@section('container')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Ringkasan</h3>
                </div>
              </div>
              <div class="card-body">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Jumlah Link</span>
                      <span class="info-box-number">1,410</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                
                <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="far fa-envelope"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Jumlah Kunjungan</span>
                      <span class="info-box-number">1,000</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                
                <a href="/create">
                  <button type="button" class="btn btn-block btn-primary">Tambah Link</button>
                </a> 

              </div>
            </div>
            <!-- /.card -->
          </div>

          <div class="col-md-8">
            <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title">Daftar Link</h3>
                    <a href="javascript:void(0);">View Report</a>
                  </div>
                </div>

                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Judul</th>
                          <th>Link</th>
                          <th>Deskripsi</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($links as $link)
                            <tr>
                            <td></td>
                            <td>{{$link->title}}</td>
                            <td>{{$link->link}}</td>
                            <td>{{$link->description}}</td>
                            <td>
                                <div class="btn">
                                    Edit
                                </div>
                                <div class="btn">
                                    Delete
                                </div>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>No</th>
                          <th>Judul</th>
                          <th>Link</th>
                          <th>Deskripsi</th>
                          <th>Action</th>
                        </tr>
                        </tfoot>
                      </table>
                </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="AdminLTE/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="AdminLTE/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="AdmiunLTE/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="AdminLTE/dist/js/pages/dashboard3.js"></script>

<!-- DataTables  & Plugins -->
<script src="AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="AdminLTE/plugins/jszip/jszip.min.js"></script>
<script src="AdminLTE/plugins/pdfmake/pdfmake.min.js"></script>
<script src="AdminLTE/plugins/pdfmake/vfs_fonts.js"></script>
<script src="AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

@endsection