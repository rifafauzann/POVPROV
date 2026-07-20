@extends('layouts.app')

@section('content')

  <!-- Jadwal & Venue -->
    <section class="jadwal">
        <div class="section-header-blue dark full-width">
            <div class="container header-with-icon">
                <i class="far fa-calendar-alt header-icon"></i>
                <div class="header-texts">
                    <h2>JADWAL & VENUE PERTANDINGAN</h2>
                    <p>PORPROV XV Kota Bogor 2026</p>
                </div>
            </div>
        </div>
        <div class="container jadwal-container">
            <div class="table-responsive">
                <table class="jadwal-table">
                    <thead>
                        <tr>
                            <th rowspan="2" class="th-no">No</th>
                            <th rowspan="2" class="th-cabor">Cabang Olahraga</th>
                            <th rowspan="2" class="th-venue">Venue</th>
                            <th rowspan="2" class="th-durasi">Durasi</th>
                            <th colspan="1" class="th-month">Oktober</th>
                            <th colspan="8" class="th-month">November 2026</th>
                        </tr>
                        <tr class="dates-row">
                            <th>31<br><span>Jumat</span></th>
                            <th>1<br><span>Sabtu</span></th>
                            <th>2<br><span>Minggu</span></th>
                            <th>3<br><span>Senin</span></th>
                            <th>4<br><span>Selasa</span></th>
                            <th>5<br><span>Rabu</span></th>
                            <th>6<br><span>Kamis</span></th>
                            <th>7<br><span>Jumat</span></th>
                            <th>8<br><span>Sabtu</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Aerosport - Gantolle</td>
                            <td>Majalengka</td>
                            <td class="text-center">13</td>
                            <td></td><td></td><td></td><td></td><td class="bg-blue"></td><td class="bg-orange"></td><td class="bg-orange"></td><td class="bg-orange"></td><td class="bg-purple"></td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Aerosport - Paralayang</td>
                            <td>Gunung Mas</td>
                            <td class="text-center">14</td>
                            <td></td><td></td><td></td><td class="bg-blue"></td><td class="bg-blue"></td><td class="bg-orange"></td><td class="bg-orange"></td><td class="bg-orange"></td><td class="bg-purple"></td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Anggar</td>
                            <td>Green Forest Hotel</td>
                            <td class="text-center">9</td>
                            <td class="bg-blue"></td><td class="bg-blue"></td><td class="bg-orange"></td><td class="bg-orange"></td><td class="bg-purple"></td><td></td><td></td><td></td><td></td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Angkat Berat</td>
                            <td>Green Forest Hotel</td>
                            <td class="text-center">7</td>
                            <td class="bg-blue"></td><td class="bg-blue"></td><td class="bg-orange"></td><td class="bg-orange"></td><td class="bg-purple"></td><td></td><td></td><td></td><td></td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Angkat Besi</td>
                            <td>Green Forest Hotel</td>
                            <td class="text-center">7</td>
                            <td></td><td class="bg-blue"></td><td class="bg-orange"></td><td class="bg-orange"></td><td class="bg-orange"></td><td class="bg-purple"></td><td></td><td></td><td></td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td>Arung Jeram</td>
                            <td>Green Forest Hotel</td>
                            <td class="text-center">12</td>
                            <td></td><td></td><td class="bg-blue"></td><td class="bg-blue"></td><td class="bg-orange"></td><td class="bg-orange"></td><td class="bg-orange"></td><td class="bg-purple"></td><td></td>
                        </tr>
                        <tr>
                            <td class="text-center">7</td>
                            <td>Binaraga</td>
                            <td>Green Forest Hotel</td>
                            <td class="text-center">5</td>
                            <td class="bg-orange"></td><td class="bg-orange"></td><td class="bg-orange"></td><td class="bg-orange"></td><td class="bg-purple"></td><td></td><td></td><td></td><td></td>
                        </tr>
                        <tr>
                            <td class="text-center">8</td>
                            <td>Bola Tangan Indoor</td>
                            <td>PPSDMAP Kemenhub Kemang</td>
                            <td class="text-center">9</td>
                            <td></td><td class="bg-blue"></td><td class="bg-blue"></td><td class="bg-orange"></td><td class="bg-orange"></td><td class="bg-purple"></td><td></td><td></td><td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="jadwal-footer">
                <div class="keterangan-box">
                    <h4>KETERANGAN</h4>
                    <ul>
                        <li><span class="dot bg-blue"></span> Persiapan / Awal Pertandingan</li>
                        <li><span class="dot bg-orange"></span> Pelaksanaan Pertandingan</li>
                        <li><span class="dot bg-purple"></span> Final / Penutupan Pertandingan</li>
                    </ul>
                    <div class="info-note">
                        <i class="fas fa-info-circle"></i> Klik pada nama cabang olahraga atau venue untuk melihat detail jadwal pertandingan.
                    </div>
                </div>
                <div class="pilih-hari-container">
                    <div class="pilih-hari-label">Pilih Hari <i class="fas fa-arrow-up"></i></div>
                    <div class="pilih-hari">
                        <div class="day-circle active"><span>31</span><small>Okt</small></div>
                        <div class="day-circle"><span>1</span><small>Nov</small></div>
                        <div class="day-circle"><span>2</span><small>Nov</small></div>
                        <div class="day-circle"><span>3</span><small>Nov</small></div>
                        <div class="day-circle"><span>4</span><small>Nov</small></div>
                        <div class="day-circle"><span>5</span><small>Nov</small></div>
                        <div class="day-circle"><span>6</span><small>Nov</small></div>
                        <div class="day-circle"><span>7</span><small>Nov</small></div>
                        <div class="day-circle"><span>8</span><small>Nov</small></div>
                        <div class="day-circle"><span>9</span><small>Nov</small></div>
                        <div class="day-circle"><span>10</span><small>Nov</small></div>
                        <div class="day-circle"><span>11</span><small>Nov</small></div>
                    </div>
    <a href="{{ route('jadwal.pdf') }}"class="btn btn-blue btn-unduh"><i class="fas fa-download"></i> Unduh Jadwal</a>
            </div>
        </div>
    </section>


@endsection