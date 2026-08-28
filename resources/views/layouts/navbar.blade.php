<nav class="navbar">
    <div class="navbar-container">
       

    <ul class="navbar-menu">
    <li><a href="{{ route('beranda') }}" class="navbar-link {{ request()->routeIs('beranda') ? 'active' : '' }}">Beranda</a></li>
    <li><a href="{{ route('profile') }}" class="navbar-link {{ request()->routeIs('profile') ? 'active' : '' }}">Profile</a></li>
    <li><a href="{{ route('data-guru') }}" class="navbar-link {{ request()->routeIs('data-guru*') ? 'active' : '' }}">Guru</a></li>
    <li><a href="{{ route('mata-pelajaran') }}" class="navbar-link {{ request()->routeIs('mata-pelajaran*') ? 'active' : '' }}">Mata Pelajaran</a></li>
    <li><a href="{{ route('contact') }}" class="navbar-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
    <li><a href="{{ route('fasilitas') }}" class="navbar-link {{ request()->routeIs('fasilitas*') ? 'active' : '' }}">Fasilitas</a></li>
    <li><a href="{{ route('prestasi') }}" class="navbar-link {{ request()->routeIs('prestasi*') ? 'active' : '' }}">Prestasi</a></li>
    <li><a href="{{ route('gallery') }}" class="navbar-link {{ request()->routeIs('gallery*') ? 'active' : '' }}">Gallery</a></li>
</ul>

        <button class="navbar-toggle" id="navbar-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>