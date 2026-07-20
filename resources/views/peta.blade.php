@extends('layouts.app')

@section('content')

<!-- Peta Venue -->
    <section class="peta-venue">
        <div class="section-header-blue dark full-width">
            <div class="container header-with-icon">
                <i class="fas fa-map-marker-alt header-icon"></i>
                <div class="header-texts">
                    <h2>PETA VENUE</h2>
                    <p>Lokasi seluruh venue pertandingan PORPROV XV Kota Bogor 2026</p>
                </div>
            </div>
        </div>
        <div class="container peta-container">
            <div class="peta-layout">
                <div class="peta-map">
                    <div class="peta-map">
                        <iframe
                         src="https://www.google.com/maps?q=-6.5898,106.8065&output=embed"
                        width="100%"
                        height="600"
                        style="border:0; border-radius:10px;"
                        loading="lazy">
                        </iframe>
                        <div class="map-overlay-card">
                            <div class="card-header">
                                <i class="fas fa-map-marker-alt"></i> GOR PAJAJARAN
                            </div>
                            <div class="card-body">
                                <p class="address"><i class="fas fa-map-marker-alt gray-icon"></i> Jalan RM Tirto Adhi Soerjo No. 6 Bogor Jawa Barat 16161 Indonesia</p>
                                <div class="cabang-olahraga">
                                    <h5>CABANG OLAHRAGA</h5>
                                    <div class="icons">
                                        <div class="icon-item"><div class="circle-icon"><i class="fas fa-basketball-ball"></i></div><span>Basket</span></div>
                                        <div class="icon-item"><div class="circle-icon"><i class="fas fa-user-ninja"></i></div><span>Judo</span></div>
                                        <div class="icon-item"><div class="circle-icon"><i class="fas fa-volleyball-ball"></i></div><span>Voli</span></div>
                                        <div class="icon-item"><div class="circle-icon"><i class="fas fa-futbol"></i></div><span>Bola</span></div>
                                        <div class="icon-item"><div class="circle-icon"><i class="fas fa-fist-raised"></i></div><span>Silat</span></div>
                                        <div class="icon-item"><div class="circle-icon"><i class="fas fa-hand-rock"></i></div><span>Karate</span></div>
                                    </div>
                                </div>
                                <div class="tags">
                                    <span class="tag">Hotel</span>
                                    <span class="tag">Restoran</span>
                                    <span class="tag">Kesehatan</span>
                                    <span class="tag">Toko Obat</span>
                                </div>
                                <a href="#" class="btn btn-blue btn-full mt-3"><i class="fas fa-external-link-alt"></i> Buka di Google Maps</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="peta-cards">
                    <!-- Hotel Card -->
                    <div class="peta-card">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=400&q=80" alt="Hotel" class="peta-card-img">
                        <div class="peta-card-content">
                            <h4>Hotel Santika Bogor</h4>
                            <div class="stars">
                                <i class="fas fa-star text-yellow"></i><i class="fas fa-star text-yellow"></i><i class="fas fa-star text-yellow"></i><i class="fas fa-star text-yellow"></i><i class="far fa-star text-yellow"></i>
                            </div>
                            <p class="distance">2 km dari Gor Padjajaran</p>
                            <p class="address"><i class="fas fa-map-marker-alt gray-icon"></i> Botani Square, Jalan Raya Padjajaran Tegallega, Bogor Jawa Barat 16127 Indonesia</p>
                            <div class="fasilitas">
                                <h5>Fasilitas</h5>
                                <div class="fas-icons">
                                    <div class="fas-item"><i class="fas fa-swimming-pool"></i><br><span>Kolam renang</span></div>
                                    <div class="fas-item"><i class="fas fa-wifi"></i><br><span>Wifi</span></div>
                                    <div class="fas-item"><i class="fas fa-utensils"></i><br><span>Restaurant</span></div>
                                    <div class="fas-item"><i class="fas fa-parking"></i><br><span>Parkir</span></div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-blue btn-full mt-3"><i class="fas fa-external-link-alt"></i> Buka di Google Maps</a>
                        </div>
                    </div>
                    
                    <!-- RS Card -->
                    <div class="peta-card">
                        <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=400&q=80" alt="RS" class="peta-card-img">
                        <div class="peta-card-content">
                            <h4>Rs PMI Kota Bogor</h4>
                            <p class="address mt-2"><i class="fas fa-map-marker-alt gray-icon"></i> Jalan Pajajaran No. 80 Bantarjati, Bogor, Jawa Barat 16143 Indonesia</p>
                            <div class="fasilitas mt-3">
                                <h5>Layanan</h5>
                                <div class="fas-icons">
                                    <div class="fas-item"><i class="fas fa-ambulance"></i><br><span>IGD</span></div>
                                    <div class="fas-item"><i class="fas fa-procedures"></i><br><span>Rawat inap</span></div>
                                    <div class="fas-item"><i class="fas fa-vials"></i><br><span>Laboratorium</span></div>
                                    <div class="fas-item"><i class="fas fa-stethoscope"></i><br><span>Medical check up</span></div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-blue btn-full mt-auto"><i class="fas fa-external-link-alt"></i> Buka di Google Maps</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection