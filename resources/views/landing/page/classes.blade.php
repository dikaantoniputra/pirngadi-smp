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

<div class="course-area bg-img pt-130">
    <div class="container">
        <div class="section-title mb-75 course-mrg-small">
            <h2> <span>Ruang</span> Sekolah</h2>
            <p>Kami memiliki berbagai fasilitas di sekolah untuk mendukung proses belajar mengajar yang efektif dan menyenangkan. Berikut adalah beberapa ruangan utama yang ada di sekolah kami:</p>
        </div>
        <div class="course-slider-active-3">
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.html"><img class="animated" src="assets/img/course/course-5.jpg" alt="Ruang Kepala Sekolah"></a>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.html">Ruang Kepala Sekolah</a></h4>
                    <p>Ruang Kepala Sekolah merupakan tempat pimpinan sekolah bekerja, dilengkapi dengan meja, kursi, dan fasilitas lain yang menunjang kegiatan administrasi dan koordinasi.</p>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.html"><img class="animated" src="assets/img/course/course-9.jpg" alt="Ruang Guru"></a>
                    <span>New Room</span>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.html">Ruang Guru</a></h4>
                    <p>Ruang Guru adalah area di mana para pengajar berkumpul dan berkoordinasi. Dilengkapi dengan meja kerja dan area istirahat untuk mendukung proses pengajaran.</p>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.html"><img class="animated" src="assets/img/course/course-6.jpg" alt="Ruang TU"></a>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.html">Ruang TU</a></h4>
                    <p>Ruang Tata Usaha (TU) merupakan area untuk administrasi sekolah, termasuk pendaftaran siswa, pengelolaan dokumen, dan keperluan administrasi lainnya.</p>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.html"><img class="animated" src="assets/img/course/course-10.jpg" alt="Ruang Tamu"></a>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.html">Ruang Tamu</a></h4>
                    <p>Ruang Tamu adalah area di mana tamu sekolah dapat menunggu dan bertemu dengan staf atau pihak sekolah lainnya.</p>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.html"><img class="animated" src="assets/img/course/course-7.jpg" alt="Ruang Makan Guru"></a>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.html">Ruang Makan Guru</a></h4>
                    <p>Ruang Makan Guru adalah area khusus untuk para pengajar makan siang, dilengkapi dengan meja makan dan fasilitas pendukung lainnya.</p>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.html"><img class="animated" src="assets/img/course/course-11.jpg" alt="Perpustakaan"></a>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.html">Perpustakaan</a></h4>
                    <p>Perpustakaan sekolah menyediakan berbagai buku dan referensi untuk mendukung kegiatan belajar siswa dan penelitian.</p>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.html"><img class="animated" src="assets/img/course/course-8.jpg" alt="Kantin"></a>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.html">Kantin</a></h4>
                    <p>Kantin adalah area di mana siswa dan staf dapat membeli makanan dan minuman selama waktu istirahat.</p>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.html"><img class="animated" src="assets/img/course/course-12.jpg" alt="Ruang Lab IPA"></a>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.html">Ruang Lab IPA</a></h4>
                    <p>Ruang Lab IPA dilengkapi dengan peralatan dan materi untuk eksperimen dan praktikum di bidang Ilmu Pengetahuan Alam.</p>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.html"><img class="animated" src="assets/img/course/course-7.jpg" alt="Ruang Kelas 7"></a>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.html">Ruang Kelas 7</a></h4>
                    <p>Ruang Kelas 7 adalah tempat belajar bagi siswa kelas 7, dengan fasilitas yang mendukung proses belajar mengajar.</p>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.html"><img class="animated" src="assets/img/course/course-2.jpg" alt="Ruang Kelas 8"></a>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.html">Ruang Kelas 8</a></h4>
                    <p>Ruang Kelas 8 dilengkapi dengan fasilitas pembelajaran untuk mendukung aktivitas siswa kelas 8.</p>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.html"><img class="animated" src="assets/img/course/course-4.jpg" alt="Ruang Kelas 9"></a>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.html">Ruang Kelas 9</a></h4>
                    <p>Ruang Kelas 9 adalah tempat untuk siswa kelas 9 mengikuti pelajaran dan kegiatan akademis lainnya.</p>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.html"><img class="animated" src="assets/img/course/course-1.jpg" alt="Ruang Lab Bahasa"></a>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.html">Ruang Lab Bahasa</a></h4>
                    <p>Ruang Lab Bahasa dilengkapi dengan teknologi audio-visual untuk meningkatkan kemampuan bahasa siswa.</p>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.html"><img class="animated" src="assets/img/course/course-9.jpg" alt="Ruang Lab Komputer SMP"></a>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.html">Ruang Lab Komputer SMP</a></h4>
                    <p>Ruang Lab Komputer SMP menyediakan fasilitas komputer untuk mendukung pembelajaran dan praktek teknologi informasi.</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('after-script')


@endpush