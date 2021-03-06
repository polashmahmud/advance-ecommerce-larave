<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.layouts.head')
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('backend.layouts.nav')
<!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        @include('backend.layouts.setting-panel')
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        @include('backend.layouts.sidebar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @include('backend.layouts.Notification')
                @yield('content')
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('backend.layouts.footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{ asset('backend/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('backend/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('backend/vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('backend/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('backend/js/dataTables.select.min.js') }}"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('backend/js/off-canvas.js') }}"></script>
<script src="{{ asset('backend/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('backend/js/template.js') }}"></script>
<script src="{{ asset('backend/js/settings.js') }}"></script>
<script src="{{ asset('backend/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('backend/js/dashboard.js') }}"></script>
<script src="{{ asset('backend/js/Chart.roundedBarCharts.js') }}"></script>
<!-- End custom js for this page-->
</body>

</html>

