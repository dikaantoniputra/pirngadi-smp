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
        <!-- Slide 1 -->
        <div class="single-slider slider-height-2 bg-img align-items-center d-flex slider-overlay2-1 default-overlay" style="background-image:url(assets/img/slider/slider-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="slider-content slider-content-2 slider-animated-2 text-center">
                            <h1 class="animated">Selamat Datang di SMP Kristen Pirngadi</h1>
                            <p class="animated">SMP Kristen Pirngadi menyediakan pendidikan berkualitas dengan fokus pada pengembangan karakter dan keterampilan akademik siswa.</p>
                            <div class="slider-btn">
                                <a class="animated default-btn btn-green-color" href="about-us.html">TENTANG KAMI</a>
                                <a class="animated default-btn btn-white-color" href="contact.html">HUBUNGI KAMI</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="single-slider slider-height-2 align-items-center d-flex bg-img slider-overlay2-2 default-overlay" style="background-image:url(assets/img/slider/slider-3.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="slider-content slider-content-2 slider-animated-2 text-center">
                            <h1 class="animated">Sambutan Kepala Sekolah</h1>
                            <p class="animated">"Kami berkomitmen untuk mendidik generasi muda dengan penuh dedikasi dan kasih, membentuk mereka menjadi pribadi yang unggul, berkarakter, dan siap menghadapi tantangan masa depan."</p>
                            <div class="slider-btn">
                                <a class="animated default-btn btn-green-color" href="about-us.html">TENTANG KAMI</a>
                                <a class="animated default-btn btn-white-color" href="contact.html">HUBUNGI KAMI</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="single-slider slider-height-2 align-items-center d-flex bg-img slider-overlay2-3 default-overlay" style="background-image:url(assets/img/slider/slider-4.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="slider-content slider-content-2 slider-animated-2 text-center">
                            <h1 class="animated">Selamat Datang di SMP Kristen Pirngadi</h1>
                            <p class="animated">Kami percaya bahwa setiap anak adalah anugerah yang perlu dikembangkan potensinya secara maksimal dengan pendidikan yang holistik.</p>
                            <div class="slider-btn">
                                <a class="animated default-btn btn-green-color" href="about-us.html">TENTANG KAMI</a>
                                <a class="animated default-btn btn-white-color" href="contact.html">HUBUNGI KAMI</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="about-us pt-130 pb-130">
    <div class="container">
        <div class="section-title-3 section-shape-hm2-1 text-center mb-100">
            <h2>Tentang <span>Kami</span></h2>
            <p>SMP Kristen Pirngadi berkomitmen untuk menyediakan pendidikan berkualitas yang mengutamakan pengembangan karakter dan akademik siswa. <br> Kami berdedikasi untuk mencetak generasi penerus bangsa yang unggul dan berintegritas.</p>
        </div>
        <div class="row align-items-center">
           <div class="col-lg-7 col-md-12">
                <div class="about-img about-img-2  mr-70">
                    <img src="assets/img/banner/banner-2.jpg" alt="Tentang Kami SMP Kristen Pirngadi">
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="about-content-2 pr-70">
                    <p>SMP Kristen Pirngadi telah berdiri selama lebih dari 50 tahun, mendidik generasi muda dengan penuh dedikasi. Dengan pendekatan holistik, kami percaya bahwa pendidikan yang baik tidak hanya mencakup aspek akademik tetapi juga pengembangan karakter, spiritualitas, dan kreativitas siswa.</p>
                    <img src="assets/img/banner/banner-3.jpg"  alt="Siswa SMP Kristen Pirngadi">
                    <div class="signature mt-30">
                        <img src="assets/img/icon-img/signature.png" alt="Tanda Tangan Kepala Sekolah">
                    </div>
                    <div class="about-btn mt-45">
                        <a class="default-btn" href="about-us.html">TENTANG KAMI</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="blog-event-area pt-130 pb-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title-3 mb-45 mrg-bottom-small">
                    <a href="/guru"><h2>Guru <span>Kami</span></h2></a>
                    <p><a href="/guru">All Guru </a> </p>
                </div>
                <div class="blog-active">
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-1.jpg" alt=""></a>
                        </div>
                        <div class="blog-content-wrap">
                            <span>Harnap n.s Sihite, S.pd</span>
                            <div class="blog-content">
                                
                                <p>Guru Biologi dan Kimia</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-2.jpg" alt=""></a>
                        </div>
                        <div class="blog-content-wrap">
                            <span>Dian Abdriana Martiani Lova Aloysia, SE, S.PD, M.PD</span>
                            <div class="blog-content">
                               
                                <p>Guru Bahasa Indonesia</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-3.jpg" alt=""></a>
                        </div>
                        <div class="blog-content-wrap">
                            <span>Dra. Lodya Petronella</span>
                            <div class="blog-content">
                                
                                <p>Guru Fisika</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title-3 mb-45 ml-70">
                    <h2><span>Pemimpin </span>Hebat </h2>
                    <p>Kepala Sekolah & Wakil Kepala Sekolah </p>
                </div>
                <div class="event-active-2 ml-70">
                    <div class="single-event single-event-2">
                        <div class="event-img">
                            <a href="event-details.html"><img src="assets/img/event/event-4.jpg" alt=""></a>
                            <div class="event-date-wrap">
                                <span class="event-date">Kepala</span>
                                <span>Sekolah</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <h3><a href="event-details.html">Josef Gerard Laisina, S.si</a></h3>
                            <p>Selamat datang di SMP Kristen Pirngadi. Sebagai Kepala Sekolah, saya merasa terhormat dan bangga dapat menyambut Anda ke dalam lembaga pendidikan kami. </p>

                            <div class="event-meta-wrap">
                                {{-- <div class="event-meta">
                                    <i class="fa fa-location-arrow"></i>
                                    <span>Mascot Plaza ,Uttara</span>
                                </div>
                                <div class="event-meta">
                                    <i class="fa fa-clock-o"></i>
                                    <span>10:30 am</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="single-event single-event-2">
                        <div class="event-img">
                            <a href="event-details.html"><img src="assets/img/event/event-4.jpg" alt=""></a>
                            <div class="event-date-wrap">
                                <span class="event-date">Wakil</span>
                                <span>Kepala Sekolah</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <h3><a href="event-details.html">Dian.</a></h3>
                            <p>Selamat datang di SMP Kristen Pirngadi. Sebagai Waka , saya merasa terhormat dan bangga dapat menyambut Anda ke dalam lembaga pendidikan kami. </p>
                            {{-- <div class="event-meta-wrap">
                                <div class="event-meta">
                                    <i class="fa fa-location-arrow"></i>
                                    <span>Shuvastu ,Badda</span>
                                </div>
                                <div class="event-meta">
                                    <i class="fa fa-clock-o"></i>
                                    <span>10:30 am</span>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="admission-area pt-125 pb-130 bg-img-position">
    <div class="container">
        <div class="admission-title text-center pb-5">
            <h2>Ruang Sekolah</h2>
            <p>Kami memiliki berbagai fasilitas di sekolah untuk mendukung proses belajar mengajar yang efektif dan menyenangkan. Berikut adalah beberapa ruangan utama yang ada di sekolah kami:</p>
           
            <div class="apply-btn">
                <a class="default-btn" href="#">Explore More</a>
            </div>
        </div>
        
     
        <div class="tab-content jump">
            <div class="tab-pane active" id="course-categorie-1">
                <div class="course-slider-active-2 nav-style-1 owl-carousel">
                    <div class="course-categorie-bundle">
                        <div class="single-course mb-30">
                            <div class="course-img">
                                <a href="course-details.html"><img src="assets/img/course/course-5.jpg" alt=""></a>
                            </div>
                            <div class="course-content course-content-2">
                                <h4><a href="course-details.html">Ruang Kepala Sekolah</a></h4>
                                <p>Ruang Kepala Sekolah merupakan tempat pimpinan sekolah bekerja, dilengkapi dengan meja, kursi, dan fasilitas lain yang menunjang kegiatan administrasi dan koordinasi.</p>
                            </div>
                        </div>
                        <div class="single-course mb-30">
                            <div class="course-img">
                                <a href="course-details.html"><img src="assets/img/course/course-9.jpg" alt=""></a>
                                <span class="new-course">New Room</span>
                            </div>
                            <div class="course-content course-content-2">
                                <h4><a href="course-details.html">Ruang Guru</a></h4>
                                <p>Ruang Guru adalah area di mana para pengajar berkumpul dan berkoordinasi. Dilengkapi dengan meja kerja dan area istirahat untuk mendukung proses pengajaran.</p>
                            </div>
                        </div>
                    </div>
                    <div class="course-categorie-bundle">
                        <div class="single-course mb-30">
                            <div class="course-img">
                                <a href="course-details.html"><img src="assets/img/course/course-6.jpg" alt=""></a>
                            </div>
                            <div class="course-content course-content-2">
                                <h4><a href="course-details.html">Ruang TU</a></h4>
                                <p>Ruang Tata Usaha (TU) merupakan area untuk administrasi sekolah, termasuk pendaftaran siswa, pengelolaan dokumen, dan keperluan administrasi lainnya.</p>
                            </div>
                        </div>
                        <div class="single-course mb-30">
                            <div class="course-img">
                                <a href="course-details.html"><img src="assets/img/course/course-10.jpg" alt=""></a>
                            </div>
                            <div class="course-content course-content-2">
                                <h4><a href="course-details.html">Ruang Tamu</a></h4>
                                <p>Ruang Tamu adalah area di mana tamu sekolah dapat menunggu dan bertemu dengan staf atau pihak sekolah lainnya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="course-categorie-bundle">
                        <div class="single-course mb-30">
                            <div class="course-img">
                                <a href="course-details.html"><img src="assets/img/course/course-7.jpg" alt=""></a>
                            </div>
                            <div class="course-content course-content-2">
                                <h4><a href="course-details.html">Ruang Makan Guru</a></h4>
                                <p>Ruang Makan Guru adalah area khusus untuk para pengajar makan siang, dilengkapi dengan meja makan dan fasilitas pendukung lainnya.</p>
                            </div>
                        </div>
                        <div class="single-course mb-30">
                            <div class="course-img">
                                <a href="course-details.html"><img src="assets/img/course/course-11.jpg" alt=""></a>
                            </div>
                            <div class="course-content course-content-2">
                                <h4><a href="course-details.html">Perpustakaan</a></h4>
                                <p>Perpustakaan sekolah menyediakan berbagai buku dan referensi untuk mendukung kegiatan belajar siswa dan penelitian.</p>
                            </div>
                        </div>
                    </div>
                    <div class="course-categorie-bundle">
                        <div class="single-course mb-30">
                            <div class="course-img">
                                <a href="course-details.html"><img src="assets/img/course/course-8.jpg" alt=""></a>
                                <span class="new-course">New Room</span>
                            </div>
                            <div class="course-content course-content-2">
                                <h4><a href="course-details.html">Kantin</a></h4>
                                <p>Kantin adalah area di mana siswa dan staf dapat membeli makanan dan minuman selama waktu istirahat.</p>
                            </div>
                        </div>
                        <div class="single-course mb-30">
                            <div class="course-img">
                                <a href="course-details.html"><img src="assets/img/course/course-12.jpg" alt=""></a>
                                <span class="new-course">New Room</span>
                            </div>
                            <div class="course-content course-content-2">
                                <h4><a href="course-details.html">Ruang Lab IPA</a></h4>
                                <p>Ruang Lab IPA dilengkapi dengan peralatan dan materi untuk eksperimen dan praktikum di bidang Ilmu Pengetahuan Alam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="course-categorie-bundle">
                        <div class="single-course mb-30">
                            <div class="course-img">
                                <a href="course-details.html"><img src="assets/img/course/course-7.jpg" alt=""></a>
                            </div>
                            <div class="course-content course-content-2">
                                <h4><a href="course-details.html">Ruang Kelas 7</a></h4>
                                <p>Ruang Kelas 7 adalah tempat belajar bagi siswa kelas 7, dengan fasilitas yang mendukung proses belajar mengajar.</p>
                            </div>
                        </div>
                        <div class="single-course mb-30">
                            <div class="course-img">
                                <a href="course-details.html"><img src="assets/img/course/course-2.jpg" alt=""></a>
                            </div>
                            <div class="course-content course-content-2">
                                <h4><a href="course-details.html">Ruang Kelas 8</a></h4>
                                <p>Ruang Kelas 8 dilengkapi dengan fasilitas pembelajaran untuk mendukung aktivitas siswa kelas 8.</p>
                            </div>
                        </div>
                    </div>
                    <div class="course-categorie-bundle">
                        <div class="single-course mb-30">
                            <div class="course-img">
                                <a href="course-details.html"><img src="assets/img/course/course-4.jpg" alt=""></a>
                            </div>
                            <div class="course-content course-content-2">
                                <h4><a href="course-details.html">Ruang Kelas 9</a></h4>
                                <p>Ruang Kelas 9 adalah tempat untuk siswa kelas 9 mengikuti pelajaran dan kegiatan akademis lainnya.</p>
                            </div>
                        </div>
                        <div class="single-course mb-30">
                            <div class="course-img">
                                <a href="course-details.html"><img src="assets/img/course/course-1.jpg" alt=""></a>
                            </div>
                            <div class="course-content course-content-2">
                                <h4><a href="course-details.html">Ruang Lab Bahasa</a></h4>
                                <p>Ruang Lab Bahasa dilengkapi dengan teknologi audio-visual untuk meningkatkan kemampuan bahasa siswa.</p>
                            </div>
                        </div>
                    </div>
                    <div class="course-categorie-bundle">
                        <div class="single-course mb-30">
                            <div class="course-img">
                                <a href="course-details.html"><img src="assets/img/course/course-9.jpg" alt=""></a>
                                <span class="new-course">New Room</span>
                            </div>
                            <div class="course-content course-content-2">
                                <h4><a href="course-details.html">Ruang Lab Komputer SMP</a></h4>
                                <p>Ruang Lab Komputer SMP menyediakan fasilitas komputer untuk mendukung pembelajaran dan praktek teknologi informasi.</p>
                            </div>
                        </div>
                        <div class="single-course mb-30">
                            <div class="course-img">
                                <a href="course-details.html"><img src="assets/img/course/course-8.jpg" alt=""></a>
                            </div>
                            <div class="course-content course-content-2">
                                <h4><a href="course-details.html">Apparel Manufacturing</a></h4>
                                <p>Ruang Apparel Manufacturing adalah area untuk praktek dan belajar tentang proses pembuatan pakaian.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="course-categorie-2">
                <!-- Similar updates for other categories -->
            </div>
            <div class="tab-pane" id="course-categorie-3">
                <!-- Similar updates for other categories -->
            </div>
            <div class="tab-pane" id="course-categorie-4">
                <!-- Similar updates for other categories -->
            </div>
           
        </div>
        
    </div>
</div>

<div class="fun-fact-area bg-img pt-130 pb-100" style="background-image:url(assets/img/slider/slider-1.jpg);">
    <div class="container">
        <div class="section-title-3 section-shape-hm2-2 white-text text-center mb-100">
            <h2><span>Fakta</span> Menarik</h2>
            <p>SMP Kristen Pirngadi memiliki berbagai prestasi dan pencapaian yang membanggakan, serta terus berkomitmen dalam mendidik siswa menjadi pribadi yang unggul dan berprestasi.</p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-one count-white">
                    <div class="count-img">
                        <img src="assets/img/icon-img/funfact-1.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">50</h2>
                        <span>PENGHARGAAN</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-two count-white">
                    <div class="count-img">
                        <img src="assets/img/icon-img/funfact-2.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">1200</h2>
                        <span>LULUSAN</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-three count-white">
                    <div class="count-img">
                        <img src="assets/img/icon-img/funfact-1.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">30</h2>
                        <span>PRESTASI NASIONAL</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-four count-white">
                    <div class="count-img">
                        <img src="assets/img/icon-img/funfact-2.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">100</h2>
                        <span>GURU TERBAIK</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@push('after-script')


@endpush