<header class="navbar sticky-top bg-primary flex-md-nowrap p-0 shadow" data-bs-theme="blue">
  <a class="navbar-brand col-md-4 col-lg-3 me-0 px-3 fs-6 text-white d-flex align-items-center" href="/profil">
    <img src="/img/img1.png" alt="Logo" width="30" height="30">
    <span>Welcome, {{ auth()->user()->name }}</span>
  </a>
  <ul class="navbar-nav ms-auto px-3 d-flex align-items-center">
    <li class="nav-item text-nowrap">
      <form action="/logout" method="post">
        @csrf
        <button type="submit" class="dropdown-item text-white d-flex align-items-center">
          <i class="bi bi-box-arrow-left me-2"></i> Logout
        </button>
      </form>
    </li>
  </ul>
</header>
