<!doctype html>
<html lang="en" class="light-theme">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @include('admin.auth.layout.links')
</head>
<body>
  <!--start wrapper-->
  <div class="wrapper">
    @yield('content')
  </div>
  <!--end wrapper-->

 @include('admin.auth.layout.scirpt')

</body>
</html>