<div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" id="sidebar" style="width: 280px; height:100vh">
  <a href="/dashboard/home" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
    <img src="/images/logo-humic.png" alt="" width="40" height="32">
    <span class="fs-4">ICICyTA</span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="/dashboard/home" class="nav-link {{ Request::is('dashboard/home') ? 'active' : 'link-body-emphasis' }} ">
        Hero Section
      </a>
    </li>
    <li>
      <a href="/dashboard/about" class="nav-link {{ Request::is('dashboard/about') ? 'active' : 'link-body-emphasis' }}">
        About Conference
      </a>
    </li>
    <li>
      <a href="/dashboard/speakers" class="nav-link {{ Request::is('dashboard/speakers') ? 'active' : 'link-body-emphasis' }}">
        Speakers
      </a>
    </li>
    <li>
      <a href="/dashboard/call-for-papers" class="nav-link {{ Request::is('dashboard/call-for-papers') ? 'active' : 'link-body-emphasis' }}">
        Call for Papers
      </a>
    </li>
    <li>
      <a href="/dashboard/for-author" class="nav-link {{ Request::is('dashboard/for-author') ? 'active' : 'link-body-emphasis' }}">
        For Author
      </a>
    </li>
    <li>
      <a href="/dashboard/registration" class="nav-link {{ Request::is('dashboard/registration') ? 'active' : 'link-body-emphasis' }}">
        Registration Fee
      </a>
    </li>
    <li>
      <a href="/dashboard/commitee" class="nav-link {{ Request::is('dashboard/commitee') ? 'active' : 'link-body-emphasis' }}">
        Commitee
      </a>
    </li>
    <li>
      <a href="/dashboard/footer" class="nav-link {{ Request::is('dashboard/footer') ? 'active' : 'link-body-emphasis' }}">
        Footer
      </a>
    </li>
  </ul>
  <hr>
  <div class="dropdown">
    <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
      <strong>Admin</strong>
    </a>
    <ul class="dropdown-menu text-small shadow">
      <li><a class="dropdown-item" href="#">New project...</a></li>
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item" href="#">Sign out</a></li>
    </ul>
  </div>
</div>