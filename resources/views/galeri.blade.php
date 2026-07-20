@extends('layouts.app')

@section('content')

 <!-- Galeri -->
    <section class="galeri">
        <div class="section-header-blue dark full-width">
            <div class="container header-with-icon">
                <i class="fas fa-camera header-icon"></i>
                <div class="header-texts">
                    <h2>GALERI</h2>
                    <p>Dokumentasi lapangan Kota Bogor</p>
                </div>
            </div>
        </div>
        <div class="container galeri-container">
            <div class="galeri-filter">
                <button class="btn btn-blue"><i class="fas fa-th-large"></i> Semua</button>
            </div>
            <div class="galeri-grid">
                <div class="galeri-item">
                    <img src="https://images.unsplash.com/photo-1505250469679-20330d52d115?w=500&q=80" alt="Indoor A">
                    <div class="galeri-overlay">
                        <h4>Indoor A</h4>
                        <p><i class="far fa-calendar-alt"></i> 10 Nov 2026 <span class="ml-3"><i class="far fa-image"></i> 4 foto</span></p>
                    </div>
                </div>
                <div class="galeri-item">
                    <img src="https://images.unsplash.com/photo-1526628953301-3e589a6a8b74?w=500&q=80" alt="Lapangan Luar">
                    <div class="galeri-overlay">
                        <h4>Lapangan Luar</h4>
                        <p><i class="far fa-calendar-alt"></i> 10 Nov 2026 <span class="ml-3"><i class="far fa-image"></i> 7 foto</span></p>
                    </div>
                </div>
                <div class="galeri-item">
                    <img src="image/indoor B.jpeg" alt="Indoor B">
                    <div class="galeri-overlay">
                        <h4>Indoor B</h4>
                        <p><i class="far fa-calendar-alt"></i> 10 Nov 2026 <span class="ml-3"><i class="far fa-image"></i> 6 foto</span></p>
                    </div>
                </div>
                <div class="galeri-item">
                    <img src="https://images.unsplash.com/photo-1574629810360-7efbb1924043?w=500&q=80" alt="Lapangan Luar">
                    <div class="galeri-overlay">
                        <h4>Lapangan Luar</h4>
                        <p><i class="far fa-calendar-alt"></i> 10 Nov 2026 <span class="ml-3"><i class="far fa-image"></i> 7 foto</span></p>
                    </div>
                </div>
                <div class="galeri-item">
                    <img src="https://images.unsplash.com/photo-1605335198007-781dc412fcce?w=500&q=80" alt="Indoor B">
                    <div class="galeri-overlay">
                        <h4>Indoor B</h4>
                        <p><i class="far fa-calendar-alt"></i> 10 Nov 2026 <span class="ml-3"><i class="far fa-image"></i> 6 foto</span></p>
                    </div>
                </div>
                <div class="galeri-item">
                    <img src="https://images.unsplash.com/photo-1554907984-15263bfd63bd?w=500&q=80" alt="Lapangan Luar">
                    <div class="galeri-overlay">
                        <h4>Lapangan Luar</h4>
                        <p><i class="far fa-calendar-alt"></i> 10 Nov 2026 <span class="ml-3"><i class="far fa-image"></i> 7 foto</span></p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-outline btn-load-more">Muat Lebih Banyak <i class="fas fa-arrow-down"></i></button>
            </div>
        </div>
    </section>

@endsection