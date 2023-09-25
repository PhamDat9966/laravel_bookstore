<!DOCTYPE html>
<html lang="en">

<head>
    @include('bookstore.backend.html.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('bookstore.backend.html.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('bookstore.backend.html.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->

        @include('bookstore.backend.html.footer')
    </div>
    <!-- ./wrapper -->

    @include('bookstore.backend.html.script')
</body>

</html>
