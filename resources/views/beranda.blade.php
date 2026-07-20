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
                <a href="{{ url('/peta') }}" class="btn-outline-white">
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
            <div class="stat-card">
                <i class="fas fa-hotel stat-icon"></i>
                <div class="stat-info">
                    <h3>80</h3>
                    <p>Hotel</p>
                </div>
            </div>
            <div class="stat-card">
                <i class="fas fa-running stat-icon"></i>
                <div class="stat-info">
                    <h3>28</h3>
                    <p>Cabang Olahraga</p>
                </div>
            </div>
            <div class="stat-card">
                <i class="fas fa-clinic-medical stat-icon"></i>
                <div class="stat-info">
                    <h3>164</h3>
                    <p>Apotek</p>
                </div>
            </div>
            <div class="stat-card">
                <i class="fas fa-hospital stat-icon green"></i>
                <div class="stat-info">
                    <h3>22</h3>
                    <p>Rumah Sakit</p>
                </div>
            </div>
        </div>
    </section>


@endsection