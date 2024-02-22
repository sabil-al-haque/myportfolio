<!DOCTYPE html>
<html lang="en">

<head>

  @include('admin.csslink')
  <link href="admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
@include('admin.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
@include('admin.topbar')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <div class="row mb-3">
                        <!-- DataTable with Hover -->
                        <div class="col-lg-12">
                            <div class="card mb-4">
                              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover</h6>
                              </div>
                              <div class="table-responsive p-3">
                                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                                  <thead class="thead-light">
                                    <tr>
                                      <th>Name</th>
                                      <th>Image</th>

                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tfoot>
                                    <tr>
                                      <th>Name</th>
                                      <th>Image</th>

                                      <th>Action</th>
                                    </tr>
                                  </tfoot>
                                  <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                      <td>{{ $item->name }}</td>
                                      <td>{{ $item->image }}</td>

                                      <td>
                                        <a href="{{ url('editaboutinfo') }}" class="btn btn-success">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{ url('deleteaboutinfo') }}" class="btn btn-danger mx-3" >
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                    </tr>

                                    @endforeach

                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>


          </div>
          <!--Row-->



          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">Sabil</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


@include('admin.script')

  <!-- Page level plugins -->
  <script src="admin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>


</body>

</html>
