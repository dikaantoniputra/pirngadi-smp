@extends('landing.layout.app')

@section('title')
Bukti Pembayaran
@endsection

@push('after-style')

@endpush

@section('content')
<div class="breadcrumb-area">
   <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg.jpg);">
    <div class="container">
        <h2>SMP Kristen Pirngadi</h2>
        <p>Selamat datang di SMP Kristen Pirngadi. Kami berkomitmen untuk menyediakan pendidikan berkualitas dengan lingkungan belajar yang mendukung dan fasilitas yang lengkap. Temukan lebih lanjut tentang kami dan apa yang kami tawarkan di halaman ini.</p>
    </div>
</div>

    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i> About Page</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="choose-area bg-img pt-90" style="background-image:url(https://htmldemo.net/glaxdu/glaxdu/assets/img/bg/bg-8.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="about-chose-us pt-120">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-about-chose-us mb-95">
                                <div class="about-choose-img">
                                    <img src="assets/img/icon-img/service-9.png" alt="">
                                </div>
                                <div class="about-choose-content text-light-blue">
                                    <h3>Fasilitas Beasiswa</h3>
                                    <p>Kami menyediakan fasilitas beasiswa untuk mendukung siswa yang berprestasi dan kurang mampu secara finansial. Ini adalah bagian dari komitmen kami untuk memastikan pendidikan berkualitas bagi semua siswa.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-about-chose-us mb-95 about-negative-mrg">
                                <div class="about-choose-img">
                                    <img src="assets/img/icon-img/service-10.png" alt="">
                                </div>
                                <div class="about-choose-content text-yellow">
                                    <h3>Guru Berkualitas</h3>
                                    <p>Para guru di SMP Kristen Pirngadi adalah profesional yang berdedikasi tinggi, dengan pengalaman dan kualifikasi yang memastikan pengajaran yang efektif dan inspiratif.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-about-chose-us mb-95">
                                <div class="about-choose-img">
                                    <img src="assets/img/icon-img/service-11.png" alt="">
                                </div>
                                <div class="about-choose-content text-blue">
                                    <h3>Perpustakaan & Toko Buku</h3>
                                    <p>Perpustakaan kami menyediakan berbagai koleksi buku yang mendukung proses belajar mengajar, serta toko buku yang menyediakan bahan ajar dan kebutuhan sekolah lainnya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-about-chose-us mb-95 about-negative-mrg">
                                <div class="about-choose-img">
                                    <img src="assets/img/icon-img/service-12.png" alt="">
                                </div>
                                <div class="about-choose-content text-green">
                                    <h3>25 Tahun Pengalaman</h3>
                                    <p>SMP Kristen Pirngadi telah beroperasi selama lebih dari 25 tahun, dengan pengalaman yang kaya dalam memberikan pendidikan berkualitas kepada siswa-siswa kami.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="about-img">
                    <img src="assets/img/banner/about.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="video-area bg-img pt-270 pb-270" style="background-image:url(assets/img/banner/video.jpg);">
    <div class="video-btn-2">
        <a class="video-popup" href="https://www.youtube.com/watch?v=XC8gXf259ig">
            <img class="animated" src="assets/img/icon-img/viddeo-btn.png" alt="">
        </a>
    </div>
</div>

<div class="achievement-area pt-130 pb-115">
    <div class="container">
        <div class="section-title mb-75">
            <h2>What <span>People Say</span></h2>
            <p>Temukan bagaimana siswa dan orang tua kami merasakan pengalaman belajar di SMP Kristen Pirngadi. Berikut adalah beberapa testimoni tentang pengalaman dan keseruan yang mereka alami di sekolah kami.</p>
        </div>
        <div class="testimonial-slider-wrap mt-45">
            <div class="testimonial-text-slider">
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhAojuhi1NOf2_ftgGS_i-rey81EqwlcLI7m0FWDA3SWXDE8ufbLQyL3T1ZVjCf_Tzvr5Ww6baHkUTd4tVCFdUw4zmEX89vrSGwx0jteAerGReW6F3HnSHn27BDD2NynnTjb7URupwvSsyL/w1200-h630-p-k-no-nu/IMG_4909.JPG">
                    </div>
                    <div class="row no-gutters">
                        <div class="ml-auto col-lg-6 col-md-6">
                            <div class="testi-content bg-img default-overlay" style="background-image:url();">
                                <div class="quote-style quote-left">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>“Pengalaman belajar di SMP Kristen Pirngadi sangat menyenangkan. Aktivitas ekstrakurikuler yang beragam dan fasilitas yang lengkap membuat setiap hari di sekolah menjadi pengalaman yang berharga dan penuh keseruan.”</p>
                                <div class="testi-info">
                                    <h5>Indah Putri</h5>
                                    <span>Orang Tua Siswa</span>
                                </div>
                                <div class="quote-style quote-right">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="https://www.suarasurabaya.net/wp-content/uploads/2015/10/kk160992_clip10.jpg">
                    </div>
                    <div class="row no-gutters">
                        <div class="ml-auto col-lg-6 col-md-6">
                            <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                <div class="quote-style quote-left">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>“Kegiatan outdoor dan acara tahunan yang diselenggarakan oleh SMP Kristen Pirngadi benar-benar membuat sekolah ini istimewa. Kami merasa anak-anak kami mendapatkan pengalaman belajar yang menyenangkan dan penuh makna.”</p>
                                <div class="testi-info">
                                    <h5>Rendi Pratama</h5>
                                    <span>Orang Tua Siswa</span>
                                </div>
                                <div class="quote-style quote-right">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="https://cdn-sekolah.annibuku.com/20532747/1.jpg">
                    </div>
                    <div class="row no-gutters">
                        <div class="ml-auto col-lg-6 col-md-6">
                            <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                <div class="quote-style quote-left">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>“Sekolah ini menawarkan berbagai kegiatan yang membuat siswa bersemangat. Dari lomba-lomba hingga klub-klub yang menarik, SMP Kristen Pirngadi benar-benar memberikan pengalaman yang menyenangkan dan bermanfaat.”</p>
                                <div class="testi-info">
                                    <h5>Arief Rahman</h5>
                                    <span>Alumni</span>
                                </div>
                                <div class="quote-style quote-right">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="https://www.suarasurabaya.net/wp-content/uploads/2015/10/kk160981_clip10.jpg">
                    </div>
                    <div class="row no-gutters">
                        <div class="ml-auto col-lg-6 col-md-6">
                            <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                <div class="quote-style quote-left">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>“Sebagai siswa SMP Kristen Pirngadi, saya merasa sangat senang dengan semua kegiatan dan fasilitas yang ada. Program-program yang ada membuat kami terus termotivasi dan belajar dengan cara yang menyenangkan.”</p>
                                <div class="testi-info">
                                    <h5>Rina Dewi</h5>
                                    <span>Siswa</span>
                                </div>
                                <div class="quote-style quote-right">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-image-slider">
                <div class="sin-testi-image">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhAojuhi1NOf2_ftgGS_i-rey81EqwlcLI7m0FWDA3SWXDE8ufbLQyL3T1ZVjCf_Tzvr5Ww6baHkUTd4tVCFdUw4zmEX89vrSGwx0jteAerGReW6F3HnSHn27BDD2NynnTjb7URupwvSsyL/w1200-h630-p-k-no-nu/IMG_4909.JPG" alt="">
                </div>
                <div class="sin-testi-image">
                    <img src="https://cdn-sekolah.annibuku.com/20532747/1.jpg" alt="">
                </div>
                <div class="sin-testi-image">
                    <img src="https://cdn-sekolah.annibuku.com/20532747/1.jpg" alt="">
                </div>
                <div class="sin-testi-image">
                    <img src="https://www.suarasurabaya.net/wp-content/uploads/2015/10/kk160981_clip10.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="testimonial-text-img">
            <img alt="" src="assets/img/icon-img/testi-text.png">
        </div>
    </div>
</div>


@endsection

@push('after-script')


@endpush