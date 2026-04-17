<div class="navbar">
    <a href="/home" class="nav-link">
        Chirpe Home
    </a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="logout-btn">
            Logout
        </button>
    </form>
</div>