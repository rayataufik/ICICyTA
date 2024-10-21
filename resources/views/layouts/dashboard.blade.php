<!DOCTYPE html>
<html lang="en">

<head>
  @include('includes.head')
</head>

<body class="d-flex flex-column sidebar-m">
  <nav class="navbar navbar-expand-md navbar-light bg-light w-100 d-md-none">
    <div class="container-fluid">
      <a class="navbar-brand" href="/dashboard/home">
        <img src="/images/logo-humic.png" alt="Logo" width="40" height="32">
        ICICyTA
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/speakers">Speakers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/call-for-papers">Call for Papers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/for-author">For Author</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/registration">Registration Fee</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/commitee">Commitee</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/footer">Footer</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="d-flex">
    <div class="sidebar d-none d-md-block">
      @include('includes.sidebar')
    </div>

    <div class="content w-full">
      @yield('content')
    </div>
  </div>

</body>

</html>