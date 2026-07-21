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
                
                <!-- ... (kode overlay card tetap sama) ... -->

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

            <!-- CARD -->
            <div class="peta-cards">

                <!-- HOTEL -->
                <div class="peta-card">
                    <img src="image/santika.jpg"
                        alt="Hotel"
                        class="peta-card-img">

                    <div class="peta-card-content">

                        <h4>Hotel Santika Bogor</h4>

                        <div class="stars">
                            <i class="fas fa-star text-yellow"></i>
                            <i class="fas fa-star text-yellow"></i>
                            <i class="fas fa-star text-yellow"></i>
                            <i class="fas fa-star text-yellow"></i>
                            <i class="far fa-star text-yellow"></i>
                        </div>

                        <p class="distance">
                            2 km dari Gor Padjajaran
                        </p>

                        <p class="address">
                            <i class="fas fa-map-marker-alt gray-icon"></i>
                            Botani Square, Jalan Raya Padjajaran Tegallega,
                            Bogor Jawa Barat 16127 Indonesia
                        </p>

                       

                        <!-- LINK HOTEL -->
                        <a href="https://www.google.com/maps/dir/Gor+pajajaran,+CQFX%2B99C,+RT.04%2FRW.01,+Tanah+Sareal,+Kota+Bogor,+Jawa+Barat+16161/Hotel+Santika+Bogor,+Botani+Square+Bogor,+Jl.+Raya+Pajajaran,+RT.04%2FRW.05,+Tegallega,+Kecamatan+Bogor+Tengah,+Kota+Bogor,+Jawa+Barat+16127/@-6.5886338,106.7914437,15z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x2e69c5000cee40ab:0xa412bd10cefea370!2m2!1d106.7983925!2d-6.5765742!1m5!1m1!1s0x2e69c5c4b2b2e479:0xe1897a1850562bb7!2m2!1d106.8067132!2d-6.6010899?entry=ttu&g_ep=EgoyMDI2MDcxNS4wIKXMDSoASAFQAw%3D%3D"
                           target="_blank"
                           class="btn btn-blue btn-full mt-3">
                            <i class="fas fa-external-link-alt"></i>
                            Buka di Google Maps
                        </a>

                    </div>
                </div>

                <!-- RS -->
                <div class="peta-card">
                    <img src="image/PMI.jpg"
                        alt="RS"
                        class="peta-card-img">

                    <div class="peta-card-content">

                        <h4>RS PMI Kota Bogor</h4>

                        <p class="address mt-2">
                            <i class="fas fa-map-marker-alt gray-icon"></i>
                            Jalan Pajajaran No.80, Bantarjati, Bogor,
                            Jawa Barat 16143 Indonesia
                        </p>

                       

                        <!-- LINK RS -->
                        <a href="https://www.google.com/maps/dir/Gor+pajajaran,+CQFX%2B99C,+RT.04%2FRW.01,+Tanah+Sareal,+Kota+Bogor,+Jawa+Barat+16161/RS+PMI+Bogor,+Jl.+Raya+Pajajaran+No.80,+RT.02%2FRW.05,+Tegallega,+Kecamatan+Bogor+Tengah,+Kota+Bogor,+Jawa+Barat+16153/@-6.5870122,106.7911625,15z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x2e69c5000cee40ab:0xa412bd10cefea370!2m2!1d106.7983925!2d-6.5765742!1m5!1m1!1s0x2e69c5ac5f182f27:0xbb711562b093fbac!2m2!1d106.8061507!2d-6.598305?entry=ttu&g_ep=EgoyMDI2MDcxNS4wIKXMDSoASAFQAw%3D%3D"
                           target="_blank"
                           class="btn btn-blue btn-full mt-3">
                            <i class="fas fa-external-link-alt"></i>
                            Buka di Google Maps
                        </a>

                    </div>
                </div>

            </div>

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
        marker.addEventListener('click', function() {
            infoCard.classList.remove('hidden-card');
        });

        // Tutup card saat tombol X diklik
        closeBtn.addEventListener('click', function() {
            infoCard.classList.add('hidden-card');
        });
    });
</script>

@endsection