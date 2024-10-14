<!DOCTYPE html>
<html lang="en">

<head>
  @include('includes.head')
</head>

<body class="d-flex">

  <div class="sidebar">
    @include('includes.sidebar')
  </div>

  <div class="w-full">
    @yield('content')
  </div>

</body>

</html>