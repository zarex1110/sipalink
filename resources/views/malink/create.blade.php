@extends('malink.layouts.main')

@section('container')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create New Link</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class="col-sm-6">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Link Baru</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputJudul">Judul link</label>
                      <input type="text" class="form-control" id="exampleInputJudul" placeholder="Masukan Judul">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputLink">Link</label>
                      <input type="text" class="form-control" id="exampleInputLink" placeholder="Link">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputDeskripsi">Deskripsi</label>
                      <textarea class="form-control" rows="3" id="exampleInputDeskripsi" placeholder="Deskripsi ... "></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Preview Website (Optional)</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
    
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Create</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
        </div>
        

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