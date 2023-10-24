<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  @include('partials.kepsek.link')
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('partials.kepsek.preloader')

  @include('partials.kepsek.navbar')
 
  @include('partials.kepsek.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        @yield('content')
        
      </div>
    </section>
  </div>

  @include('partials.kepsek.footer')

</div>
<!-- ./wrapper -->

@include('partials.kepsek.script')

</body>
</html>
