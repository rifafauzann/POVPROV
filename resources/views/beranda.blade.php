@extends('layouts.app')

@section('content')

<!-- Hero Section -->
    <section class="hero">
    <div class="hero-left">
        <div>
            <h2>PORPROV <span>KOTA BOGOR 2026</span></h2>
            <p class="tagline">Semangat Sportivitas, Bersatu untuk Prestasi!</p>
            <p class="desc">Kota Bogor siap menjadi tuan rumah yang ramah, berprestasi, dan menginspirasi pada ajang PORPROV Jawa Barat XV Tahun 2026</p>
            <div class="hero-btns">
                <a href="{{ url('/jadwal') }}" class="btn-yellow">
                    <svg width="15" height="15" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    LIHAT JADWAL
                </a>
                <a href="#peta-venue" class="btn-outline-white">
                    <svg width="15" height="15" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    PETA VENUE
                </a>
            </div>
        </div>
    </div>
    <div class="hero-right">
        {{-- Note for user: Change hero background image at public/images/hero-bg.png --}}
        <img class="bg" src="{{ asset('image/tugu-kujang-.jpeg') }}" alt="Kota Bogor">
        {{-- Note for user: Change mascot image at public/images/maskot.png --}}
        <img class="mascot" src="{{ asset('image/maskot.png') }}" alt="Maskot PORPROV">
    </div>
</section>

 <!-- Stats Section -->
    <section class="stats">
    <div class="container stats-container">

        <!-- Hotel -->
        <a href="#hotel" class="stat-card">
            <i class="fas fa-hotel stat-icon"></i>
            <div class="stat-info">
                <h3>80</h3>
                <p>Hotel</p>
            </div>
        </a>

        <!-- Cabang Olahraga -->
        <a href="#cabor" class="stat-card">
            <i class="fas fa-running stat-icon"></i>
            <div class="stat-info">
                <h3>28</h3>
                <p>Cabang Olahraga</p>
            </div>
        </a>

        <!-- Apotek -->
        <a href="#apotek" class="stat-card">
            <i class="fas fa-clinic-medical stat-icon"></i>
            <div class="stat-info">
                <h3>164</h3>
                <p>Apotek</p>
            </div>
        </a>

        <!-- Rumah Sakit -->
        <a href="#rumahsakit" class="stat-card">
            <i class="fas fa-hospital stat-icon green"></i>
            <div class="stat-info">
                <h3>22</h3>
                <p>Rumah Sakit</p>
            </div>
        </a>
    </div>
</section>

    <div class="container peta-container">
        <div class="peta-layout">

          <!-- MAP -->
            <div class="peta-map">
                <!-- Hapus atribut width dan height, biarkan CSS yang bekerja -->
                <iframe
                    src="https://www.google.com/maps?q=-6.5898,106.8065&output=embed"
                    loading="lazy">
                </iframe>

                <!-- Marker Buatan (Berada di atas iframe) -->
                <button id="marker-gor" class="custom-map-pin" title="Klik untuk lihat detail lokasi">
                    <i class="fas fa-map-marker-alt"></i>
                </button>

                <!-- Overlay Card (Disembunyikan secara default) -->
                <div id="info-card-gor" class="map-overlay-card hidden-card">
                    <!-- Tombol Close -->
                    <button id="close-card-btn" class="close-card" title="Tutup">
                        <i class="fas fa-times"></i>
                    </button>

                    <div class="card-header">
                        <i class="fas fa-map-marker-alt"></i> GOR PAJAJARAN
                    </div>

                    <div class="card-body">
                        <p class="address">
                            <i class="fas fa-map-marker-alt gray-icon"></i>
                            Jalan RM Tirto Adhi Soerjo No. 6 Bogor Jawa Barat 16161 Indonesia
                        </p>

                        <div class="cabang-olahraga">
                            <h5>CABANG OLAHRAGA</h5>

                            <div class="icons">
                                <div class="icon-item">
                                    <div class="circle-icon"><i class="fas fa-basketball-ball"></i></div>
                                    <span>Basket</span>
                                </div>
                                <div class="icon-item">
                                    <div class="circle-icon"><i class="fas fa-user-ninja"></i></div>
                                    <span>Judo</span>
                                </div>
                                <div class="icon-item">
                                    <div class="circle-icon"><i class="fas fa-volleyball-ball"></i></div>
                                    <span>Voli</span>
                                </div>
                                <div class="icon-item">
                                    <div class="circle-icon"><i class="fas fa-futbol"></i></div>
                                    <span>Bola</span>
                                </div>
                                <div class="icon-item">
                                    <div class="circle-icon"><i class="fas fa-fist-raised"></i></div>
                                    <span>Silat</span>
                                </div>
                                <div class="icon-item">
                                    <div class="circle-icon"><i class="fas fa-hand-rock"></i></div>
                                    <span>Karate</span>
                                </div>
                            </div>
                        </div>

                        <div class="tags">
                            <span class="tag">Hotel</span>
                            <span class="tag">Restoran</span>
                            <span class="tag">Kesehatan</span>
                            <span class="tag">Toko Obat</span>
                        </div>

                        <!-- LINK GOR -->
                        <a href="https://www.google.com/maps/search/?api=1&query=GOR+Pajajaran+Bogor"
                           target="_blank"
                           class="btn btn-blue btn-full mt-3">
                            <i class="fas fa-external-link-alt"></i>
                            Buka di Google Maps
                        </a>
                    </div>
                </div>
            </div>

           <!-- BAGIAN SAMPING MAPS (SIDEBAR FASKES BARU) -->
<div class="sidebar-faskes">
    <!-- Bagian Tombol Filter (Tambahkan data-filter) -->
    <div class="filter-container">
        <button class="btn-filter active" data-filter="all">Semua</button>
        <button class="btn-filter" data-filter="rs">Rumah Sakit</button>
        <button class="btn-filter" data-filter="puskesmas">Puskesmas</button>
        <button class="btn-filter" data-filter="klinik">Klinik</button>
    </div>

    <!-- Bagian Utama Daftar Faskes -->
    <div class="list-container">
        <div class="list-header">
            <h2>DAFTAR FASKES</h2>
            <span class="badge-lokasi">12 lokasi</span>
        </div>

        <!-- Area yang bisa di-scroll -->
        <div class="scroll-area" id="faskes-list">
            
            <!-- Card Faskes 1 (Rumah Sakit) -->
            <div class="card-faskes" data-kategori="rs">
                <div class="card-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <div class="card-content">
                    <div class="card-title-row">
                        <h3>RSU Tk IV Salak Bogor</h3>
                        <span class="badge-rs">RS</span>
                    </div>
                    <p class="address">Jl. Jenderal Sudirman No. 8</p>
                    <div class="meta-info">
                        <span class="distance"><i class="fas fa-location-arrow"></i> 3.2 km</span>
                        <span class="phone"><i class="fas fa-phone"></i> 022-2034953</span>
                    </div>
                    <p class="venue">Venue: <strong>Stadion Si Jalak Harupat</strong></p>
                </div>
            </div>

            <!-- Card Faskes 2 (Rumah Sakit) -->
            <div class="card-faskes" data-kategori="rs">
                <div class="card-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <div class="card-content">
                    <div class="card-title-row">
                        <h3>RS Boromeus</h3>
                        <span class="badge-rs">RS</span>
                    </div>
                    <p class="address">Jl. Ir. H. Juanda No.100, Bandung</p>
                    <div class="meta-info">
                        <span class="distance"><i class="fas fa-location-arrow"></i> 2.5 km</span>
                        <span class="phone"><i class="fas fa-phone"></i> 022-2034120</span>
                    </div>
                    <p class="venue">Venue: <strong>Stadion Si Jalak Harupat</strong></p>
                </div>
            </div>

            <!-- Card Faskes 3 (Contoh Puskesmas) -->
            <div class="card-faskes" data-kategori="puskesmas">
                <div class="card-icon" style="background-color: #4CAF50;"> <!-- Warna hijau beda dikit -->
                    <i class="fas fa-clinic-medical"></i>
                </div>
                <div class="card-content">
                    <div class="card-title-row">
                        <h3>Puskesmas Garuda</h3>
                        <span class="badge-rs" style="color: #4CAF50; background-color: #dcedc8;">PKM</span>
                    </div>
                    <p class="address">Jl. Garuda No.12, Bandung</p>
                    <div class="meta-info">
                        <span class="distance"><i class="fas fa-location-arrow"></i> 1.1 km</span>
                        <span class="phone"><i class="fas fa-phone"></i> 022-6011234</span>
                    </div>
                    <p class="venue">Venue: <strong>GOR Pajajaran</strong></p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END SIDEBAR FASKES -->

        </div>
    </div>
</section>

<!-- Script untuk Togle Map Card -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const marker = document.getElementById('marker-gor');
        const infoCard = document.getElementById('info-card-gor');
        const closeBtn = document.getElementById('close-card-btn');

        // Munculkan card saat marker (pin merah) diklik
        if (marker) {
            marker.addEventListener('click', function() {
                infoCard.classList.remove('hidden-card');
            });
        }

        // Tutup card saat tombol X diklik
        if (closeBtn) {
            closeBtn.addEventListener('click', function() {
                infoCard.classList.add('hidden-card');
            });
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // --- SCRIPT 1: TOGLE MAP CARD GOR ---
        const marker = document.getElementById('marker-gor');
        const infoCard = document.getElementById('info-card-gor');
        const closeBtn = document.getElementById('close-card-btn');

        if (marker) {
            marker.addEventListener('click', function() {
                infoCard.classList.remove('hidden-card');
            });
        }
        if (closeBtn) {
            closeBtn.addEventListener('click', function() {
                infoCard.classList.add('hidden-card');
            });
        }


        // --- SCRIPT 2: FILTER FASKES ---
        const filterButtons = document.querySelectorAll('.btn-filter');
        const faskesCards = document.querySelectorAll('.card-faskes');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                
                // 1. Hapus status 'active' (warna gelap) dari semua tombol
                filterButtons.forEach(btn => btn.classList.remove('active'));
                
                // 2. Berikan status 'active' ke tombol yang sedang diklik
                this.classList.add('active');

                // 3. Ambil jenis filter dari tombol yang diklik (all, rs, puskesmas, klinik)
                const filterValue = this.getAttribute('data-filter');

                // 4. Cek setiap card faskes
                faskesCards.forEach(card => {
                    const kategoriCard = card.getAttribute('data-kategori');
                    
                    // Jika filternya "all" ATAU kategori card cocok dengan tombol
                    if (filterValue === 'all' || filterValue === kategoriCard) {
                        card.style.display = 'flex'; // Tampilkan (pakai flex karena bawaan css-nya flex)
                    } else {
                        card.style.display = 'none'; // Sembunyikan
                    }
                });
            });
        });

    });
</script>

@endsection