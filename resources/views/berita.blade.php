@extends('layouts.app')

@section('content')

 <!-- Berita Terbaru -->
    <section class="berita">
        <div class="section-header-blue full-width">
            <div class="container">
                <h2>BERITA TERPOPULER</h2>
                <p>Informasi terbaru seputar PORPROV XV Kota Bogor 2026</p>
            </div>
        </div>
        <div class="container berita-container">
            <div class="berita-grid">
                <!-- Card 1 -->
                <div class="berita-card">
                    <div class="berita-img">
                        <span class="badge badge-blue">Pertandingan</span>
                        <img src="https://images.unsplash.com/photo-1541534741688-6078c6bfb5c5?w=500&q=80" alt="Angkat Besi">
                    </div>
                    <div class="berita-content">
                        <h4>Angkat Besi Digelar di GOR Indoor 1 Kota Bogor</h4>
                        <div class="berita-meta">
                            <span><i class="far fa-calendar"></i> 14 Mei 2026</span>
                            <span><i class="far fa-eye"></i> 1.250</span>
                        </div>
                        <p>Cabang olahraga Angkat Besi akan berlangsung di GOR Indoor 1 mulai 7-13 November 2026...</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="berita-card">
                    <div class="berita-img">
                        <span class="badge badge-blue">Pertandingan</span>
                        <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?w=500&q=80" alt="Renang">
                    </div>
                    <div class="berita-content">
                        <h4>Renang di Mulai, 300 Atlet Siap Bersaing</h4>
                        <div class="berita-meta">
                            <span><i class="far fa-calendar"></i> 13 Mei 2026</span>
                            <span><i class="far fa-eye"></i> 980</span>
                        </div>
                        <p>Sebanyak 300 atlet renang dari 27 kabupaten/kota siap memperebutkan medali emas...</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="berita-card">
                    <div class="berita-img">
                        <span class="badge badge-blue">Pertandingan</span>
                        <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=500&q=80" alt="Futsal">
                    </div>
                    <div class="berita-content">
                        <h4>Futsal Kota Bogor Siap Digelar</h4>
                        <div class="berita-meta">
                            <span><i class="far fa-calendar"></i> 12 Mei 2026</span>
                            <span><i class="far fa-eye"></i> 875</span>
                        </div>
                        <p>Pertandingan futsal akan berlangsung di GOR Pajajaran Bogor...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection