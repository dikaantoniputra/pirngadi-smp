@extends('landing.layout.app')

@section('title')
Bukti Pembayaran
@endsection

@push('after-style')

@endpush

@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url('https://htmldemo.net/glaxdu/glaxdu/assets/img/bg/breadcrumb-bg-2.jpg');">
        <div class="container">
            <h2>Ruang Sekolah</h2>
            <p>Kami memiliki berbagai fasilitas di sekolah untuk mendukung proses belajar mengajar yang efektif dan menyenangkan. Temukan berbagai ruangan utama yang ada di sekolah kami di bawah ini.</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i> Ruang Sekolah</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="course-area bg-img pt-130 pb-10" style="background-image:url(assets/img/bg/bg-1.jpg);">
    <div class="container">
        <div class="section-title mb-75">
            <h2> <span>SMA Kristen</span> Pirngadi</h2>
            <p>Selamat datang di SMA Kristen Pirngadi, tempat di mana pendidikan berkualitas dan nilai-nilai Kristen berpadu. Kami berkomitmen untuk menciptakan lingkungan belajar yang inspiratif dan mendukung perkembangan holistik siswa. <br> Temukan fasilitas kami yang modern dan komunitas yang ramah.</p>
        </div>
        <div class="course-slider-active nav-style-1 owl-carousel">
            <div class="single-course">
                <div class="course-img">
                    <a href="school-details.html"><img class="animated" src="assets/img/course/ruangan1.jpg" alt="Kelas Modern"></a>
                    <span>Fasilitas Kelas Modern</span>
                </div>
                <div class="course-content">
                    <h4><a href="school-details.html">Kelas Interaktif</a></h4>
                    <p>Kelas kami dilengkapi dengan teknologi terbaru untuk mendukung metode pengajaran yang interaktif dan efektif.</p>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="school-details.html"><img class="animated" src="assets/img/course/ruangan2.jpg" alt="Taman Sekolah"></a>
                    <span>Lingkungan Hijau</span>
                </div>
                <div class="course-content">
                    <h4><a href="school-details.html">Taman Sekolah yang Asri</a></h4>
                    <p>Area hijau yang indah di sekolah kami menyediakan ruang untuk bersantai dan berinteraksi di luar kelas.</p>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="school-details.html"><img class="animated" src="assets/img/course/ruangan3.jpg" alt="Fasilitas Olahraga"></a>
                    <span>Fasilitas Olahraga</span>
                </div>
                <div class="course-content">
                    <h4><a href="school-details.html">Fasilitas Olahraga Terlengkap</a></h4>
                    <p>Dari lapangan olahraga hingga fasilitas kebugaran, kami memiliki berbagai fasilitas untuk mendukung kegiatan olahraga dan kesehatan siswa.</p>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="school-details.html"><img class="animated" src="assets/img/course/ruangan4.png" alt="Area Komunitas"></a>
                    <span>Komunitas Ramah</span>
                </div>
                <div class="course-content">
                    <h4><a href="school-details.html">Area Komunitas</a></h4>
                    <p>Area komunitas di sekolah kami dirancang untuk memperkuat rasa kebersamaan dan dukungan antara siswa, guru, dan orang tua.</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('after-script')


@endpush