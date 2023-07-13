
<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head')
</head>

<body class="g-sidenav-show  bg-gray-200">
    @include('admin.layouts.header')
    <!-- End Navbar -->
    @yield('content')
    @include('admin.layouts.footer')
</body>

</html>