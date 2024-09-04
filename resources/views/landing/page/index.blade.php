@extends('landing.layout.app')

@section('title')
Bukti Pembayaran
@endsection

@push('after-style')
<style>
    .color-white{
        color: #ffffff
    }
</style>
@endpush

@section('content')
<div class="slider-area">
    <div class="slider-active owl-carousel">
        <div class="single-slider slider-height-1 bg-img" style="background-image:url(assets/img/slider/sider1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-7 col-12 col-sm-12">
                        <div class="slider-content slider-animated-1 pt-230">
                            <h1 class="animated">SMA Kristen Pirngadi</h1>
                            <p class="animated">Selamat datang di SMA Kristen Pirngadi, tempat di mana pendidikan berkualitas dan nilai-nilai Kristen bersatu untuk membentuk generasi penerus yang unggul.</p>
                            <div class="slider-btn">
                                <a class="animated default-btn btn-green-color" href="about-us.html">TENTANG KAMI</a>
                                <a class="animated default-btn btn-white-color" href="contact.html">HUBUNGI KAMI</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-single-img slider-animated-1">
                    <img class="animated" src="assets/img/slider/kepsek.png" alt="Kepala Sekolah SMA Kristen Pirngadi">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="choose-us section-padding-1">
    <div class="container-fluid">
        <div class="row no-gutters choose-negative-mrg">
            <!-- Updated Item 1: Kegiatan Rohani -->
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-light-blue">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-1.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Kegiatan Rohani</h3>
                        <p>Kegiatan keagamaan rutin seperti ibadah dan retret untuk memperkuat iman dan spiritualitas siswa.</p>
                    </div>
                </div>
            </div>
            <!-- Existing Item 2: Laboratorium Modern -->
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-yellow">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-2.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Laboratorium Modern</h3>
                        <p>Kami memiliki laboratorium yang lengkap untuk mendukung kegiatan praktikum siswa di bidang sains dan teknologi.</p>
                    </div>
                </div>
            </div>
            <!-- Existing Item 3: Ekstrakurikuler Beragam -->
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-blue">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-3.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Ekstrakurikuler Beragam</h3>
                        <p>Kami menawarkan berbagai ekstrakurikuler untuk mengembangkan bakat dan minat siswa di bidang seni, olahraga, dan ilmu pengetahuan.</p>
                    </div>
                </div>
            </div>
            <!-- Updated Item 4: Kelas Berbasis Teknologi -->
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-green">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-4.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Kelas Berbasis Teknologi</h3>
                        <p>Penggunaan teknologi terkini dalam proses pembelajaran untuk mempersiapkan siswa menghadapi era digital.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-us pt-130 pb-130">
    <div class="container">
        <div class="row">
            <!-- About Content -->
            <div class="col-lg-6 col-md-6">
                <div class="about-content">
                    <div class="section-title section-title-green mb-30">
                        <h2>About <span>Us</span></h2>
                        <p>SMA Kristen Pirngadi adalah institusi pendidikan yang berkomitmen untuk menyediakan pendidikan berkualitas yang dilandasi oleh nilai-nilai Kristiani.</p>
                    </div>
                    <p>Sejak didirikan, SMA Kristen Pirngadi telah berfokus pada pengembangan akademis dan karakter siswa. Kami menawarkan lingkungan belajar yang kondusif dengan dukungan fasilitas modern dan tenaga pengajar yang profesional.</p>
                    <p>Visi kami adalah membentuk generasi muda yang tidak hanya cerdas secara intelektual tetapi juga kuat dalam iman dan berintegritas. Kami percaya bahwa pendidikan yang holistik adalah kunci untuk mencetak pemimpin masa depan yang berakhlak mulia.</p>
                    <p>Dengan berbagai program unggulan, termasuk kelas berbasis teknologi, kegiatan rohani, dan ekstrakurikuler yang beragam, kami berusaha untuk memberikan pengalaman belajar yang menyeluruh kepada setiap siswa.</p>
                    <div class="about-btn mt-45">
                        <a class="default-btn" href="about-us.html">TENTANG KAMI</a>
                    </div>
                </div>
            </div>
            <!-- About Image and Video -->
            <div class="col-lg-6 col-md-6">
                <div class="about-img default-overlay">
                    <img src="assets/img/banner/about-us.png" alt="Tentang SMA Kristen Pirngadi">
                    <a class="video-btn video-popup" href="https://www.youtube.com/watch?v=-172xbujEyc">
                        <img class="animated" src="assets/img/icon-img/video.png" alt="Video Tentang Kami">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Additional Information -->
<div class="about-details pb-130">
    <div class="container">
        <div class="row">
            <!-- School History Section -->
            <div class="col-lg-6 col-md-6">
                <div class="about-content">
                    <div class="section-title section-title-green mb-30">
                        <h2>Our <span>History</span></h2>
                    </div>
                    <p>SMA Kristen Pirngadi didirikan pada tahun 1970 dengan tujuan menyediakan pendidikan berkualitas yang berlandaskan nilai-nilai Kristiani. Sejak saat itu, kami telah berkembang menjadi salah satu sekolah terkemuka di daerah ini, dengan ribuan alumni yang telah berkontribusi di berbagai bidang.</p>
                </div>
            </div>
            <!-- Mission and Vision Section -->
            <div class="col-lg-6 col-md-6">
                <div class="about-content">
                    <div class="section-title section-title-green mb-30">
                        <h2>Our <span>Mission & Vision</span></h2>
                    </div>
                    <p><strong>Misi:</strong> Mendidik siswa dengan pengetahuan dan nilai-nilai Kristiani untuk menjadi individu yang berkarakter, berintegritas, dan berkontribusi positif bagi masyarakat.</p>
                    <p><strong>Visi:</strong> Menjadi lembaga pendidikan unggulan yang menghasilkan lulusan berprestasi, beriman kuat, dan siap menghadapi tantangan global.</p>
                </div>
            </div>
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

<div class="achievement-area pt-130">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Prestasi <span>SMA Kristen Pirngadi</span></h2>
            <p>Kami bangga atas pencapaian yang telah diraih oleh SMA Kristen Pirngadi. Berikut adalah beberapa prestasi utama yang menggambarkan komitmen kami terhadap pendidikan berkualitas dan pengembangan siswa yang holistik.</p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-one">
                    <div class="count-img">
                        <img src="assets/img/icon-img/achieve-1.png" alt="Jumlah Siswa">
                    </div>
                    <div class="count-content">
                        <h2 class="count">180</h2>
                        <span>Jumlah Siswa</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-two">
                    <div class="count-img">
                        <img src="assets/img/icon-img/achieve-2.png" alt="Lulusan">
                    </div>
                    <div class="count-content">
                        <h2 class="count">670</h2>
                        <span>Lulusan Berhasil</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-three">
                    <div class="count-img">
                        <img src="assets/img/icon-img/achieve-3.png" alt="Penghargaan">
                    </div>
                    <div class="count-content">
                        <h2 class="count">160</h2>
                        <span>Penghargaan</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-four">
                    <div class="count-img">
                        <img src="assets/img/icon-img/achieve-4.png" alt="Jumlah Fakultas">
                    </div>
                    <div class="count-content">
                        <h2 class="count">16</h2>
                        <span>Jumlah Guru</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="teacher-area pt-130 pb-100">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Best <span>Teacher</span></h2>
            <p>Kami bangga memperkenalkan tim pengajar terbaik kami, yang berdedikasi untuk membimbing dan menginspirasi para siswa. Setiap guru memiliki keahlian unik dan pengalaman yang luas di bidang mereka, memastikan kualitas pendidikan yang tinggi.</p>
        </div>
        <div class="custom-row">
            <!-- Teacher 1 -->
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="assets/img/teacher/enggar.jpg" alt="Enggar Tjahyani">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Enggar Tjahyani, S.Sos</h4>
                        
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Enggar Tjahyani</h4>
                            <h5>Ilmu Admin Negara</h5>
                            <p>Pendidik berpengalaman dalam bidang Ilmu Administrasi Negara.</p>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- Teacher 2 -->
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="assets/img/teacher/ketut.jpg" alt="Dra. Yusvita Anis S.">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Ni Ketut Suartini</h4>
                       
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Ni Ketut Suartini.</h4>
                            <h5>Pustakawan</h5>
                            <p>Ahli dalam bidang Pustakawan dengan pengalaman luas.</p>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- Teacher 3 -->
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="assets/img/teacher/DSC03170.jpg" alt="Drs. Chris Celis">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Drs. Chris Celis P</h4>
                       
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Drs. Chris Celis P</h4>
                            <h5>Kimia/Biologi</h5>
                            <p>Pendidik berpengalaman di bidang Kimia dan Biologi.</p>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- Teacher 4 -->
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="assets/img/teacher/DSC03187.jpg" alt="Eko Setiyo Budiono">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Joreza Pattinasarane</h4>
                      
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Joreza Pattinasarane</h4>
                            <h5>TU</h5>
                            <p>Ahli dalam Tata Usaha dan Komputer.</p>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- Teacher 5 -->
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="assets/img/teacher/DSC03177.jpg" alt="Agustinus Doe Koten">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Agustinus Doe Koten, S.pd.</h4>
                       
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Agustinus Doe Koten, S.pd.</h4>
                            <h5>Bahasa Inggris</h5>
                            <p>Pendidik bersemangat di bidang Bahasa Inggris.</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="event-area bg-img default-overlay pt-130 pb-130" style="background-image:url(assets/img/bg/bg-3.jpg);">
    <div class="container">
        <div class="section-title mb-75">
            <h2><span>Our</span> Event</h2>
            <p>coming soon</p>
        </div>
        {{-- <div class="event-active owl-carousel nav-style-1">
            <div class="single-event event-white-bg">
                <div class="event-img">
                    <a href="event-details.html"><img src="assets/img/event/event-1.jpg" alt=""></a>
                    <div class="event-date-wrap">
                        <span class="event-date">1st</span>
                        <span>Dec</span>
                    </div>
                </div>
                <div class="event-content">
                    <h3><a href="event-details.html">Aempor incididunt ut labore ejam.</a></h3>
                    <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
                    <div class="event-meta-wrap">
                        <div class="event-meta">
                            <i class="fa fa-location-arrow"></i>
                            <span>Mascot Plaza ,Uttara</span>
                        </div>
                        <div class="event-meta">
                            <i class="fa fa-clock-o"></i>
                            <span>11:00 am</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-event event-white-bg">
                <div class="event-img">
                    <a href="event-details.html"><img src="assets/img/event/event-2.jpg" alt=""></a>
                    <div class="event-date-wrap">
                        <span class="event-date">10th</span>
                        <span>Dec</span>
                    </div>
                </div>
                <div class="event-content">
                    <h3><a href="event-details.html">Global Conference on Business.</a></h3>
                    <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
                    <div class="event-meta-wrap">
                        <div class="event-meta">
                            <i class="fa fa-location-arrow"></i>
                            <span>Shubastu ,Dadda</span>
                        </div>
                        <div class="event-meta">
                            <i class="fa fa-clock-o"></i>
                            <span>08:30 am</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-event event-white-bg">
                <div class="event-img">
                    <a href="event-details.html"><img src="assets/img/event/event-3.jpg" alt=""></a>
                    <div class="event-date-wrap">
                        <span class="event-date">1st</span>
                        <span>Dec</span>
                    </div>
                </div>
                <div class="event-content">
                    <h3><a href="event-details.html">Academic Conference Maui.</a></h3>
                    <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
                    <div class="event-meta-wrap">
                        <div class="event-meta">
                            <i class="fa fa-location-arrow"></i>
                            <span>Banasree ,Rampura</span>
                        </div>
                        <div class="event-meta">
                            <i class="fa fa-clock-o"></i>
                            <span>10:00 am</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-event event-white-bg">
                <div class="event-img">
                    <a href="event-details.html"><img src="assets/img/event/event-2.jpg" alt=""></a>
                    <div class="event-date-wrap">
                        <span class="event-date">1st</span>
                        <span>Dec</span>
                    </div>
                </div>
                <div class="event-content">
                    <h3><a href="event-details.html">Social Sciences & Education.</a></h3>
                    <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
                    <div class="event-meta-wrap">
                        <div class="event-meta">
                            <i class="fa fa-location-arrow"></i>
                            <span>Shubastu ,Badda</span>
                        </div>
                        <div class="event-meta">
                            <i class="fa fa-clock-o"></i>
                            <span>10:30 am</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>




@endsection

@push('after-script')


@endpush