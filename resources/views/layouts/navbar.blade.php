<header>
    <a href="#" class="logo"><i class="fas fa-utensils"></i>food</a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="/">home</a>
        <a href="galleries">gallery</a>
        <a href="order">order</a>
        @guest
            <a href="{{ route('login') }}">login</a>
        @else
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest
        <a class="nav-link" href="{{ route('shopping.cart') }}">
            <i class="fas fa-shopping-cart"></i><span
                class="badge bg-danger">{{ count((array) session('addcart')) }}</span>
        </a>
    </nav>
</header>
