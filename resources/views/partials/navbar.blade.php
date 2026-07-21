 <header class="navbar">
        <div class="container navbar-container">
            <div class="logo">
                <img src="image/logo-porprov.png" alt="Logo PORPROV">
                <div class="logo-text">
                    <span class="logo-title">PORPROV XV</span>
                    <span class="logo-subtitle">KOTA BOGOR 2026</span>
                </div>
            </div>
            <nav class="nav-menu">
                <ul>
                    <li><a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'active' : '' }}">BERANDA</a></li>
                    <li><a href="{{ route('berita') }}" class="{{ request()->routeIs('berita') ? 'active' : '' }}">BERITA</a></li>
                    <li><a href="{{ route('jadwal') }}" class="{{ request()->routeIs('jadwal') ? 'active' : '' }}">JADWAL</a></li>
                    <li><a href="{{ route('peta') }}" class="{{ request()->routeIs('peta') ? 'active' : '' }}">PETA VENUE</a></li>
                    <li><a href="{{ route('kesehatan') }}" class="{{ request()->routeIs('kesehatan') ? 'active' : '' }}">KESEHATAN</a></li>
                    <li><a href="{{ route('galeri') }}" class="{{ request()->routeIs('galeri') ? 'active' : '' }}">GALERI</a></li>
                </ul>
            </nav>
        
                <button class="btn-login">.</button>
            </div>
            <button class="mobile-menu-btn"><i class="fas fa-bars"></i></button>
        </div>
    </header>