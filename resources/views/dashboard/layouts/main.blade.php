<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BN | Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assetsDB/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assetsDB/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/assetsDB/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/assetsDB/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/assetsDB/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="/assetsDB/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/assetsDB/css/style.css">

    <!-- End layout styles -->
    <link rel="icon" type="/image/x-icon" href="/assets/favicon.ico" />
    {{-- Trix Editor --}}
      <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
      <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
      
      
  </head>
  <body>
    <div class="container-scroller">
      
@include('dashboard.layouts.sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        
        @include('dashboard.layouts.header')
        {{-- Main --}}
        @yield('container')
        {{-- End Main --}}
        

          {{-- Modal Logout --}}
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        </div>
        <div class="modal-body">Apakah yakin untuk logout?</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
            <form action="/logout" method="post">
              @csrf
              <button class="btn btn-danger" type="submit">Logout</button>
            </form>
        </div>
    </div>
</div>
</div>


          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/assetsDB/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/assetsDB/vendors/chart.js/Chart.min.js"></script>
    <script src="/assetsDB/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="/assetsDB/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="/assetsDB/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/assetsDB/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/assetsDB/js/off-canvas.js"></script>
    <script src="/assetsDB/js/hoverable-collapse.js"></script>
    <script src="/assetsDB/js/misc.js"></script>
    <script src="/assetsDB/js/settings.js"></script>
    <script src="/assetsDB/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="/assetsDB/js/dashboard.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script> --}}
    <!-- End custom js for this page -->
    {{-- Sweet alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- Delet sweet all post --}}
    <script> 
      $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.btndelete').click(function (e) {
            e.preventDefault();

            var deleteid = $(this).closest("tr").find('.delete_id').val();
            var title = $(this).closest("tr").find('.titleD').val();

            swal({
                    title: "Apakah anda yakin?",
                    text: "Setelah dihapus, Anda tidak dapat memulihkan Postingan dengan judul "+ title +" ini lagi!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {

                        var data = {
                            "_token": $('input[name=_token]').val(),
                            'id': deleteid,
                        };
                        $.ajax({
                            type: "DELETE",
                            url: 'posts/' + deleteid,
                            data: data,
                            success: function (response) {
                                swal(response.status, {
                                        icon: "success",
                                    })
                                    .then((result) => {
                                        location.reload();
                                    });
                            }
                        });
                    }
                });
        });

    });
    </script>

    {{-- Delete Sweet single post --}}

    <script> 
      $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.btndeleteD').click(function (e) {
            e.preventDefault();

            //GET VALUE FROM CLASS DELETE_ID
            var deleteid = $(this).closest("tr").find('.delete_idS').val();
            var title = $(this).closest("tr").find('.titleD').val();

            swal({
                    title: "Apakah anda yakin?",
                    text: "Setelah dihapus, Anda tidak dapat memulihkan Postingan dengan judul "+ title +" ini lagi!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {

                        var data = {
                            "_token": $('input[name=_token]').val(),
                            'id': deleteid,
                        };
                        $.ajax({
                            type: "DELETE",
                            url: 'posts/' + deleteid,
                            data: data,
                            success: function (response) {
                                swal(response.status, {
                                        icon: "success",
                                    })
                                    .then((result) => {
                                        location.reload();
                                    });
                            }
                        });
                    }
                });
        });

    });
    </script>
    
    
  </body>
</html>