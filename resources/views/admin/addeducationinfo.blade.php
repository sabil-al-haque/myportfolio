<!DOCTYPE html>
<html lang="en">

<head>

  @include('admin.csslink')
  <!-- Bootstrap dataTable -->
  <link href="admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Select2 -->
    <link href="admin/vendor/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap DatePicker -->
    <link href="admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" >

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
            <div class="card-body">
                <form action="{{ url('addeducationinfostore') }}" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Your exam_name</label>
                    <input type="text" name="exam_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      placeholder="Enter title">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Your exam_year</label>
                    <input type="text" name="exam_year" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Your institute</label>
                    <input type="text" name="institute" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Your details</label>
                    <input type="text" name="details" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      placeholder="Enter Name">
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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


  <!-- Select2 -->
  <script src="admin/vendor/select2/dist/js/select2.min.js"></script>

  <!-- Bootstrap Datepicker -->
  <script src="admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Javascript for this page -->
    <script>
        $(document).ready(function () {


          $('.select2-single').select2();

          // Select2 Single  with Placeholder
          $('.select2-single-placeholder').select2({
            placeholder: "Select a Province",
            allowClear: true
          });

          // Select2 Multiple
          $('.select2-multiple').select2();

          // Bootstrap Date Picker
          $('#simple-date1 .input-group.date').datepicker({
            format: 'dd/mm/yyyy',
            todayBtn: 'linked',
            todayHighlight: true,
            autoclose: true,
          });

          $('#simple-date2 .input-group.date').datepicker({
            startView: 1,
            format: 'dd/mm/yyyy',
            autoclose: true,
            todayHighlight: true,
            todayBtn: 'linked',
          });

          $('#simple-date3 .input-group.date').datepicker({
            startView: 2,
            format: 'dd/mm/yyyy',
            autoclose: true,
            todayHighlight: true,
            todayBtn: 'linked',
          });

          $('#simple-date4 .input-daterange').datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true,
            todayHighlight: true,
            todayBtn: 'linked',
          });

          // TouchSpin

          $('#touchSpin1').TouchSpin({
            min: 0,
            max: 100,
            boostat: 5,
            maxboostedstep: 10,
            initval: 0
          });

          $('#touchSpin2').TouchSpin({
            min:0,
            max: 100,
            decimals: 2,
            step: 0.1,
            postfix: '%',
            initval: 0,
            boostat: 5,
            maxboostedstep: 10
          });

          $('#touchSpin3').TouchSpin({
            min: 0,
            max: 100,
            initval: 0,
            boostat: 5,
            maxboostedstep: 10,
            verticalbuttons: true,
          });

          $('#clockPicker1').clockpicker({
            donetext: 'Done'
          });

          $('#clockPicker2').clockpicker({
            autoclose: true
          });

          let input = $('#clockPicker3').clockpicker({
            autoclose: true,
            'default': 'now',
            placement: 'top',
            align: 'left',
          });

          $('#check-minutes').click(function(e){
            e.stopPropagation();
            input.clockpicker('show').clockpicker('toggleView', 'minutes');
          });

        });
      </script>


</body>

</html>
