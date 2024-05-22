<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
  <div class="container">
    <!-- Menambahkan logo (misalnya logo gambar) di sini -->
    <a class="navbar-brand" href="/"><img src="/img/img1.png" alt="Logo" width="30" height="30"> Home</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">      
        <li class="nav-item">
          <a class="nav-link" href="/daftarmenu"><i class="bi bi-card-list"> List Menu</i></a>
        </li>       
        <li class="nav-item">
          <a class="nav-link" href="/popular"><i class="bi bi-hand-thumbs-up"> Menu Populer</i></a>
        </li>  
      </ul>      

      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
              </form>  
            </li>
          </ul>
        </li>
        @else 
        <li class="nav-item">
          <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
<script>
  // Mendapatkan URL halaman saat ini
  let currentUrl = window.location.href;

  // Mengambil semua elemen tautan navbar
  let navLinks = document.querySelectorAll('.navbar-nav a');

  // Loop melalui setiap tautan navbar untuk memeriksa URL
  navLinks.forEach(link => {
    // Memeriksa apakah URL dari tautan sama dengan URL halaman saat ini
    if (link.href === currentUrl) {
      // Menambahkan kelas 'active' ke tautan yang sesuai
      link.classList.add('active');
    }
  });
</script>
