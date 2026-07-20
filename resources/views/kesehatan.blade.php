@extends('layouts.app')

@section('content')

 <!-- Fasilitas Kesehatan -->
    <section class="kesehatan">
        <div class="section-header-blue dark full-width">
            <div class="container header-with-icon">
                <i class="far fa-hospital header-icon"></i>
                <div class="header-texts">
                    <h2>FASILITAS KESEHATAN</h2>
                    <p>Informasi Fasilitas Kesehatan di Wilayah Kota Bogor</p>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="kesehatan-filters">
                <div class="k-filter active">
                    <i class="fas fa-hospital-alt icon"></i>
                    <div class="filter-text">Semua Fasilitas<br><strong>415</strong></div>
                </div>
                <div class="k-filter">
                    <i class="fas fa-hospital icon red"></i>
                    <div class="filter-text">Rumah sakit<br><strong>22</strong></div>
                </div>
                <div class="k-filter">
                    <i class="fas fa-clinic-medical icon blue"></i>
                    <div class="filter-text">Klinik<br><strong>154</strong></div>
                </div>
                <div class="k-filter">
                    <i class="fas fa-flask icon blue"></i>
                    <div class="filter-text">Laboratorium<br><strong>10</strong></div>
                </div>
                <div class="k-filter">
                    <i class="fas fa-prescription-bottle-alt icon blue"></i>
                    <div class="filter-text">Apotek<br><strong>164</strong></div>
                </div>
                <div class="k-filter">
                    <i class="fas fa-ellipsis-h icon gray"></i>
                    <div class="filter-text">Lainnya<br><strong>100+</strong></div>
                </div>
            </div>
        </div>

        <div class="container kesehatan-layout">
            <aside class="sidebar-filter">
                <h3>Filter Pencarian</h3>
                <div class="filter-group">
                    <label>Jenis Fasilitas</label>
                    <select><option>Semua Jenis</option></select>
                </div>
                <div class="filter-group">
                    <label>Lokasi</label>
                    <select><option>Semua Wilayah</option></select>
                </div>
                <div class="filter-group">
                    <label>Jarak</label>
                    <select><option>Semua Jarak</option></select>
                </div>
                <button class="btn btn-blue btn-full mt-3"><i class="fas fa-map-marker-alt"></i> Gunakan Lokasi Saya</button>
                <button class="btn btn-outline btn-full mt-2"><i class="fas fa-sync-alt"></i> Reset Filter</button>
                
                <div class="info-box mt-4">
                    <div class="info-icon"><i class="fas fa-info-circle"></i></div>
                    <div class="info-text">
                        <h4>INFORMASI</h4>
                        <p>Fasilitas kesehatan ini siap mendukung kebutuhan medis selama pelaksanaan PORPROV XV Kota Bogor 2026</p>
                    </div>
                </div>
            </aside>
            <main class="kesehatan-list">
                <div class="list-header">
                    <h3>Daftar Fasilitas Kesehatan</h3>
                    <div class="sort-by">
                        <span>Urutkan</span>
                        <select><option>Terdekat</option></select>
                    </div>
                </div>
                <!-- ListItem 1 -->
                <div class="faskes-card">
                    <img src="https://images.unsplash.com/photo-1587351021759-3e566d6af7bf?w=200&q=80" alt="RS PMI" class="faskes-img">
                    <div class="faskes-info">
                        <div class="faskes-title">
                            <h4>RS PMI Bogor</h4> <span class="badge badge-green">Rumah sakit</span>
                        </div>
                        <p class="address"><i class="fas fa-map-marker-alt"></i> Jl. Raya Pajajaran No.90</p>
                        <p class="phone"><i class="fas fa-phone-alt"></i> (0251) 833 455</p>
                        <p class="layanan"><strong>Layanan:</strong> IGD 24 Jam, Rawat inap</p>
                    </div>
                    <div class="faskes-action">
                        <div class="distance"><i class="fas fa-map-marker-alt text-blue"></i> <strong>2.1 km</strong><br><span>dari lokasi anda</span></div>
                        <a href="#" class="btn btn-blue btn-sm mt-2">Lihat Detail <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <!-- ListItem 2 -->
                <div class="faskes-card">
                    <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=200&q=80" alt="RS Azra" class="faskes-img">
                    <div class="faskes-info">
                        <div class="faskes-title">
                            <h4>RS Azra Bogor</h4> <span class="badge badge-green">Rumah sakit</span>
                        </div>
                        <p class="address"><i class="fas fa-map-marker-alt"></i> Jl. Abdullah Bin Nuh No27B</p>
                        <p class="phone"><i class="fas fa-phone-alt"></i> (0251) 833 455</p>
                        <p class="layanan"><strong>Layanan:</strong> IGD 24 Jam, Rawat inap</p>
                    </div>
                    <div class="faskes-action">
                        <div class="distance"><i class="fas fa-map-marker-alt text-blue"></i> <strong>2.6 km</strong><br><span>dari lokasi anda</span></div>
                        <a href="#" class="btn btn-blue btn-sm mt-2">Lihat Detail <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <!-- ListItem 3 -->
                <div class="faskes-card">
                    <img src="https://images.unsplash.com/photo-1576602976047-174e57a47881?w=200&q=80" alt="Apotek Kimia Farma" class="faskes-img">
                    <div class="faskes-info">
                        <div class="faskes-title">
                            <h4>Apotek Kimia Farma</h4> <span class="badge badge-purple">Apotek & Toko Obat</span>
                        </div>
                        <p class="address"><i class="fas fa-map-marker-alt"></i> Jl. Raya Pajajaran No.90</p>
                        <p class="phone"><i class="fas fa-phone-alt"></i> (0251) 833 455</p>
                        <p class="layanan"><strong>Layanan:</strong> Obat Resep, Obat bebas, Alat kesehatan</p>
                    </div>
                    <div class="faskes-action">
                        <div class="distance"><i class="fas fa-map-marker-alt text-blue"></i> <strong>1.8 km</strong><br><span>dari lokasi anda</span></div>
                        <a href="#" class="btn btn-blue btn-sm mt-2">Lihat Detail <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="pagination-container">
                    <span class="pagination-info">Menampilkan 1-3 dari 60 Fasilitas</span>
                    <div class="pagination-controls">
                        <button class="page-btn"><i class="fas fa-chevron-left"></i></button>
                        <button class="page-btn active">1</button>
                        <button class="page-btn">2</button>
                        <span class="dots">...</span>
                        <button class="page-btn">3</button>
                        <button class="page-btn"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
            </main>
        </div>
    </section>

@endsection