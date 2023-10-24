<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  @include('partials.guru.link')
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('partials.guru.preloader')

  @include('partials.guru.navbar')
 
  @include('partials.guru.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        @yield('content')
        
      </div>
    </section>
  </div>

  @include('partials.guru.footer')

</div>
<!-- ./wrapper -->

@include('partials.guru.script')

</body>
</html>
