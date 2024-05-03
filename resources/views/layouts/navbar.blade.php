<header>
    <a href="#" class="logo"><i class="fas fa-utensils"></i>food</a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="home">home</a>
        <a href="gallery">gallery</a>
        <a href="order">order</a>
        <a href="login">login</a>
        <a class="nav-link" href="{{ route('shopping.cart') }}">
            <i class="fas fa-shopping-cart"></i><span
                class="badge bg-danger">{{ count((array) session('cart')) }}</span>
        </a>
    </nav>
</header>
