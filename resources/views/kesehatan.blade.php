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
            <div class="kesehatan-filters" role="tablist" aria-label="Filter fasilitas kesehatan">
                <button type="button" class="k-filter active" data-category="all" aria-pressed="true">
                    <i class="fas fa-hospital-alt icon"></i>
                    <div class="filter-text">Semua Fasilitas<br><strong>416</strong></div>
                </button>
                <button type="button" class="k-filter" data-category="rumah-sakit" aria-pressed="false">
                    <i class="fas fa-hospital icon red"></i>
                    <div class="filter-text">Rumah sakit<br><strong>22</strong></div>
                </button>
                <button type="button" class="k-filter" data-category="klinik" aria-pressed="false">
                    <i class="fas fa-clinic-medical icon blue"></i>
                    <div class="filter-text">Klinik<br><strong>154</strong></div>
                </button>
                <button type="button" class="k-filter" data-category="laboratorium" aria-pressed="false">
                    <i class="fas fa-flask icon blue"></i>
                    <div class="filter-text">Laboratorium<br><strong>10</strong></div>
                </button>
                <button type="button" class="k-filter" data-category="apotek" aria-pressed="false">
                    <i class="fas fa-prescription-bottle-alt icon blue"></i>
                    <div class="filter-text">Apotek<br><strong>164</strong></div>
                </button>
                <button type="button" class="k-filter" data-category="utd" aria-pressed="false">
                    <i class="fa-solid fa-droplet"></i>
                    <div class="filter-text">UTD<br><strong>1</strong></div>
                </button>
            </div>
        </div>

        <div class="container kesehatan-layout">
            <aside class="sidebar-filter">
                <h3>Filter Pencarian</h3>
                <div class="filter-group">
                    <label>Jenis Fasilitas</label>
                    <select id="filter-jenis">
                        <option value="all">Semua Jenis</option>
                        <option value="rumah-sakit">Rumah Sakit</option>
                        <option value="klinik">Klinik</option>
                        <option value="laboratorium">Laboratorium</option>
                        <option value="apotek">Apotek</option>
                        <option value="utd">UTD</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label>Lokasi (GOR)</label>
                    <select id="filter-lokasi">
                        <option value="all">Semua GOR</option>
                        <option value="gor-pajajaran">GOR Pajajaran</option>
                        <option value="gor-pandu">GOR Pandu</option>
                        <option value="gor-ksatria">GOR Ksatria</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label>Jarak</label>
                    <select id="filter-jarak">
                        <option value="all">Semua Jarak</option>
                        <option value="1">< 1 km</option>
                        <option value="3">< 3 km</option>
                        <option value="5">< 5 km</option>
                        <option value="5+">> 5 km</option>
                    </select>
                </div>
                <button class="btn btn-blue btn-full mt-3" id="btn-apply-filter"><i class="fas fa-search"></i> Terapkan Filter</button>
                <button class="btn btn-outline btn-full mt-2" id="btn-reset-filter"><i class="fas fa-sync-alt"></i> Reset Filter</button>
                
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
                <div class="faskes-card" data-category="rumah-sakit" data-default-distance="2.1" data-distances='{"gor-pajajaran":2.1, "gor-pandu":3.5, "gor-ksatria":5.2}'>
                    <img src="image/PMI.jpg" alt="RS PMI" class="faskes-img">
                    <div class="faskes-info">
                        <div class="faskes-title">
                            <h4>RS PMI Bogor</h4> <span class="badge badge-green">Rumah sakit</span>
                        </div>
                        <p class="address"><i class="fas fa-map-marker-alt"></i> Jl. Raya Pajajaran No.80 </p>
                        <p class="phone"><i class="fas fa-phone-alt"></i> (0251) 8324080 </p>
                        <p class="layanan"><strong>Layanan:</strong> IGD 24 Jam, Rawat inap</p>
                    </div>
                    <div class="faskes-action">
                        <div class="distance"><i class="fas fa-map-marker-alt text-blue"></i> <strong>2.1 km</strong><br><span>dari lokasi anda</span></div>
                        <a href="https://rspmibogor.or.id/" class="btn btn-blue btn-sm mt-2">Lihat Detail <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="faskes-card" data-category="rumah-sakit" data-default-distance="2.6" data-distances='{"gor-pajajaran":2.6, "gor-pandu":4.1, "gor-ksatria":6.0}'>
                    <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=200&q=80" alt="RS Azra" class="faskes-img">
                    <div class="faskes-info">
                        <div class="faskes-title">
                            <h4>RS Azra Bogor</h4> <span class="badge badge-green">Rumah sakit</span>
                        </div>
                        <p class="address"><i class="fas fa-map-marker-alt"></i> Jl. Raya Pajajaran No.219, RT.02/RW.11, Bantarjati, Kec. Bogor Utara, Kota Bogor, Jawa Barat</p>
                        <p class="phone"><i class="fas fa-phone-alt"></i>  (0251) 6900420 </p>
                        <p class="layanan"><strong>Layanan:</strong> IGD 24 Jam, Rawat inap</p>
                    </div>
                    <div class="faskes-action">
                        <div class="distance"><i class="fas fa-map-marker-alt text-blue"></i> <strong>2.6 km</strong><br><span>dari lokasi anda</span></div>
                        <a href="https://rsazra.co.id/" class="btn btn-blue btn-sm mt-2">Lihat Detail <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="faskes-card" data-category="klinik" data-default-distance="1.2" data-distances='{"gor-pajajaran":1.2, "gor-pandu":2.8, "gor-ksatria":4.5}'>
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=200&q=80" alt="Klinik Sehat Bogor" class="faskes-img">
                    <div class="faskes-info">
                        <div class="faskes-title">
                            <h4>Klinik Sehat Bogor</h4> <span class="badge badge-blue">Klinik</span>
                        </div>
                        <p class="address"><i class="fas fa-map-marker-alt"></i> Jl. Merdeka No.12, Kota Bogor</p>
                        <p class="phone"><i class="fas fa-phone-alt"></i> (0251) 8371122</p>
                        <p class="layanan"><strong>Layanan:</strong> Pemeriksaan umum, vaksinasi</p>
                    </div>
                    <div class="faskes-action">
                        <div class="distance"><i class="fas fa-map-marker-alt text-blue"></i> <strong>1.2 km</strong><br><span>dari lokasi anda</span></div>
                        <a href="#" class="btn btn-blue btn-sm mt-2">Lihat Detail <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="faskes-card" data-category="laboratorium" data-default-distance="3.0" data-distances='{"gor-pajajaran":3.0, "gor-pandu":1.5, "gor-ksatria":2.2}'>
                    <img src="https://images.unsplash.com/photo-1530497610245-94d3c16cda28?w=200&q=80" alt="Laboratorium Prodia" class="faskes-img">
                    <div class="faskes-info">
                        <div class="faskes-title">
                            <h4>Laboratorium Prodia</h4> <span class="badge badge-blue">Laboratorium</span>
                        </div>
                        <p class="address"><i class="fas fa-map-marker-alt"></i> Jl. Sudirman No.45, Kota Bogor</p>
                        <p class="phone"><i class="fas fa-phone-alt"></i> (0251) 8399001</p>
                        <p class="layanan"><strong>Layanan:</strong> Tes darah, kultur, rapid test</p>
                    </div>
                    <div class="faskes-action">
                        <div class="distance"><i class="fas fa-map-marker-alt text-blue"></i> <strong>3.0 km</strong><br><span>dari lokasi anda</span></div>
                        <a href="#" class="btn btn-blue btn-sm mt-2">Lihat Detail <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="faskes-card" data-category="apotek" data-default-distance="1.8" data-distances='{"gor-pajajaran":1.8, "gor-pandu":0.8, "gor-ksatria":3.1}'>
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
                <div class="faskes-card" data-category="utd" data-default-distance="3.4" data-distances='{"gor-pajajaran":3.4, "gor-pandu":5.0, "gor-ksatria":1.5}'>
                    <img src="image\UTD PMi kota bogor.png" alt="UTD PMI Bogor" class="faskes-img">
                    <div class="faskes-info">
                        <div class="faskes-title">
                            <h4>UTD PMI Kota Bogor</h4> <span class="badge badge-blue">UTD</span>
                        </div>
                        <p class="address"><i class="fas fa-map-marker-alt"></i> Jl. Kresna Raya No.43a, RT.02/RW.16, Bantarjati, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16153 </p>
                        <p class="phone"><i class="fas fa-phone-alt"></i> (0251) 834 2864 </p>
                        <p class="layanan"><strong>Layanan:</strong> Donor darah, stok darah, transfusi</p>
                    </div>
                    <div class="faskes-action">
                        <div class="distance"><i class="fas fa-map-marker-alt text-blue"></i> <strong>3.4 km</strong><br><span>dari lokasi anda</span></div>
                        <a href="https://www.google.com/maps/place/PMI+Kota+Bogor/@-6.5737876,106.8093121,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69c4242ab014dd:0x7e887b772ca00377!8m2!3d-6.5737929!4d106.811887!16s%2Fg%2F11btmqqz0p?entry=ttu&g_ep=EgoyMDI2MDcxNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-blue btn-sm mt-2">Lihat Detail <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="empty-state" style="display: none;">
                    <p>Tidak ada fasilitas yang cocok dengan kategori ini.</p>
                </div>
                <div class="pagination-container">
                    <span class="pagination-info">Menampilkan 1-5 dari 5 Fasilitas</span>
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

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterJenis = document.getElementById('filter-jenis');
        const filterLokasi = document.getElementById('filter-lokasi');
        const filterJarak = document.getElementById('filter-jarak');
        const cards = document.querySelectorAll('.faskes-card');
        const categoryButtons = document.querySelectorAll('.k-filter');
        const emptyState = document.querySelector('.empty-state');
        const applyBtn = document.getElementById('btn-apply-filter');
        const resetBtn = document.getElementById('btn-reset-filter'); 
        
        function applyFilters() {
            const jenis = filterJenis.value;
            const lokasi = filterLokasi.value;
            const jarak = filterJarak.value;
            
            let visibleCount = 0;
            
            cards.forEach(card => {
                const cardJenis = card.getAttribute('data-category');
                const distances = JSON.parse(card.getAttribute('data-distances') || '{}');
                
                let matchJenis = (jenis === 'all' || cardJenis === jenis);
                
                let matchLokasi = true;
                let matchJarak = true;
                
                let displayDistance = parseFloat(card.getAttribute('data-default-distance') || '0');
                let displayLocationText = 'dari lokasi anda';

                if (lokasi !== 'all') {
                    if (distances[lokasi] !== undefined) {
                        displayDistance = distances[lokasi];
                        displayLocationText = 'dari ' + filterLokasi.options[filterLokasi.selectedIndex].text;
                    } else {
                        displayDistance = 999;
                    }
                }

                if (jarak !== 'all') {
                    if (jarak === '1') {
                        matchJarak = displayDistance < 1;
                    } else if (jarak === '3') {
                        matchJarak = displayDistance <= 3;
                    } else if (jarak === '5') {
                        matchJarak = displayDistance <= 5;
                    } else if (jarak === '5+') {
                        matchJarak = displayDistance > 5;
                    }
                }
                
                if (matchJenis && matchJarak) {
                    card.style.display = 'flex'; 
                    const distEl = card.querySelector('.distance strong');
                    const textEl = card.querySelector('.distance span');
                    if (distEl) distEl.textContent = displayDistance + ' km';
                    if (textEl) textEl.textContent = displayLocationText;
                    
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });
            
            if (visibleCount === 0) {
                emptyState.style.display = 'block';
            } else {
                emptyState.style.display = 'none';
            }
            
            categoryButtons.forEach(btn => {
                if (btn.getAttribute('data-category') === jenis) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }
            });
        }

        if (applyBtn) {
            applyBtn.addEventListener('click', applyFilters);
        }
        
        categoryButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const cat = this.getAttribute('data-category');
                filterJenis.value = cat;
                applyFilters();
            });
        });

        if (resetBtn) {
            resetBtn.addEventListener('click', function() {
                filterJenis.value = 'all';
                filterLokasi.value = 'all';
                filterJarak.value = 'all';
                applyFilters();
            });
        }
    });
    </script>

@endsection\