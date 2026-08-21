<nav class="navbar">
    <div class="navbar-container">
       

        <ul class="navbar-menu">
            <li><a href="{{ Route('beranda') }}" class="navbar-link {{ request()->is('/') ? 'active' : '' }}">Beranda</a></li>
            <li><a href="{{ route('profile') }}" class="navbar-link {{ request()->is('profile') ? 'active' : '' }}">Profile</a></li>
            <li><a href="{{ route('data-guru') }}" class="navbar-link {{ request()->is('data-guru') ? 'active' : '' }}">Guru</a></li>
            <li><a href="{{ route('mata-pelajaran') }}" class="navbar-link {{ request()->is('mapel') ? 'active' : '' }}">Mata Pelajaran</a></li>
            <li><a href="{{ route('contact') }}" class="navbar-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
            <li><a href="{{ route('fasilitas') }}" class="navbar-link {{ request()->is('fasilitas') ? 'active' : '' }}">fasilitas</a></li>
            <li><a href="{{ route('prestasi') }}" class="navbar-link {{ request()->is('prestasi') ? 'active' :''}}">prestasi</a></li>
            <li><a href="{{ route('gallery') }}" class="navbar-link {{ request()->is('gallery') ? 'active' : '' }}">Gallery</a></li>
        </ul>

        <button class="navbar-toggle" id="navbar-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>