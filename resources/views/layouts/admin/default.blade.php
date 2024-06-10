<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="Admin">
    <title>Admin UI</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <!-- End fonts -->
    <!-- core:css -->
    <link rel="stylesheet" href={{asset("admin/assets/vendors/core/core.css")}}>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href={{asset("admin/assets/vendors/flatpickr/flatpickr.min.css")}}>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href={{asset("admin/assets/fonts/feather-font/css/iconfont.css")}}>
    <link rel="stylesheet" href={{asset("admin/assets/vendors/flag-icon-css/css/flag-icon.min.css")}}>
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href={{asset("admin/assets/css/demo1/style.min.css")}}>
    <!-- End layout styles -->
    <link rel="shortcut icon" href={{asset("admin/assets/images/favicon.png")}} />
    @yield('styles')
</head>

<body>
     <div class="main-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('partials.admin._sidebar')
        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
           @include('partials.admin._navbar')
            <!-- partial -->

            <div class="page-content">

                {{-- <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                    <div>
                      <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
                    </div>
                </div> --}}

                 @include('includes.admin._flash-sms')
                @yield('content')
            </div>

            <!-- partial:partials/_footer.html -->
           @include('partials.admin._footer')
            <!-- partial -->

        </div>
    </div>

    <!-- core:js -->
    <script src={{asset("admin/assets/vendors/core/core.js")}}></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src={{asset("admin/assets/vendors/flatpickr/flatpickr.min.js")}}></script>
    <script src={{asset("admin/assets/vendors/apexcharts/apexcharts.min.js")}}></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src={{asset("admin/assets/vendors/feather-icons/feather.min.js")}}></script>
    <script src={{asset("admin/assets/js/template.js")}}></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src={{asset("admin/assets/js/dashboard-light.js")}}></script>
    <!-- End custom js for this page -->
    @yield('scripts')

</body>
</html>
