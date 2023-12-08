<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('partials.link')

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('partials.preloader')

        @include('partials.admin.navbar')

        @include('partials.admin.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            @yield('content')

            @include('partials.footer')
            
        </div>
    </div>
    <!-- ./wrapper -->

    @include('partials.script')

<<<<<<< HEAD
    @yield('script')
=======
    @include('sweetalert::alert')


>>>>>>> 63745d8c70cd44214fce2470e64a0cd6d9a649f3
</body>

</html>
