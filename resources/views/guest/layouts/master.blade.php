<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

@include('guest.layouts.links')

<title>HOPE</title>
</head>
<body>

@include('guest.layouts.header')

@yield('body')

@include('guest.layouts.footer')
@include('guest.layouts.scripts')

</body>
</html>