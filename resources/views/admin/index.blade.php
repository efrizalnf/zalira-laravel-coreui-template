<!DOCTYPE html>
<html lang="en">

<head>
    <title>CoreUI Free Bootstrap Admin Template</title>
    @include('admin.head')
</head>

<body>
    @include('admin.sidebar')
    <div class="wrapper d-flex flex-column min-vh-100">
        @include('admin.nav-header')
        <div class="body flex-grow-1">
            @yield('main-content')
        </div>
        @include('admin.footer')
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('admin/vendors/@coreui/coreui/js/coreui.bundle.min.js')}}"></script>
    <script src="{{ asset('admin/vendors/simplebar/js/simplebar.min.js')}}"></script>
    <script>
        const header = document.querySelector('header.header');

        document.addEventListener('scroll', () => {
            if (header) {
                header.classList.toggle('shadow-sm', document.documentElement.scrollTop > 0);
            }
        });
    </script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{asset('admin/vendors/chart.js/js/chart.umd.js')}}"></script>
    <script src="{{asset('admin/vendors/@coreui/chartjs/js/coreui-chartjs.js')}}"></script>
    <script src="{{asset('admin/vendors/@coreui/utils/js/index.js')}}"></script>
    <script src="{{asset('admin/js/main.js')}}"></script>
    <script>
    </script>

</body>

</html>