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

        @include('partials.guru.navbar')

        @include('partials.guru.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            @yield('content')

            @include('partials.footer')
            
        </div>

    </div>
    <!-- ./wrapper -->

    @include('partials.script')

</body>

</html>
