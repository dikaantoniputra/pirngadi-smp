@extends('landing.layout.app')

@section('title')
Bukti Pembayaran
@endsection

@push('after-style')

@endpush

@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg.jpg);">
        <div class="container">
            <h2>Daftar Guru</h2>
            <p>Temui tim pengajar kami yang berdedikasi dan berkompeten di bidangnya.</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Daftar Guru</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-event mb-55 event-gray-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="assets/img/event/event-1.jpg" alt=""></a>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Josef Gerard Laisina, S.si</a></h3>
                        <p>Kepala Sekolah, bertanggung jawab atas manajemen keseluruhan sekolah dan kebijakan pendidikan.</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Ruang Kepala Sekolah</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-event mb-55 event-gray-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="assets/img/event/event-2.jpg" alt=""></a>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Harnap N.S. Sihite, S.pd</a></h3>
                        <p>Guru Biologi dan Kimia, mengajarkan mata pelajaran Biologi dan Kimia serta melakukan praktikum laboratorium.</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Ruang Biologi & Kimia</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-event mb-55 event-gray-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="assets/img/event/event-3.jpg" alt=""></a>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Dian Abdriana Martiani Lova Aloysia, SE, S.PD, M.PD</a></h3>
                        <p>Guru Bahasa Indonesia, bertanggung jawab untuk mengajarkan Bahasa Indonesia dan sastra.</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Ruang Bahasa Indonesia</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-event mb-55 event-gray-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="assets/img/event/event-4.jpg" alt=""></a>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Dra. Lodya Petronella</a></h3>
                        <p>Guru Fisika, mengajarkan fisika dan memimpin eksperimen laboratorium fisika.</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Ruang Fisika</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-event mb-55 event-gray-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="assets/img/event/event-5.jpg" alt=""></a>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Dian Kurnia Abadi</a></h3>
                        <p>Guru Komputer, mengajarkan mata pelajaran teknologi informasi dan komputer.</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Ruang Komputer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-event mb-55 event-gray-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="assets/img/event/event-6.jpg" alt=""></a>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Georgius Fantura, S.pd</a></h3>
                        <p>Guru PJOK, mengajarkan Pendidikan Jasmani Olahraga dan Kesehatan serta mengatur kegiatan olahraga.</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Ruang PJOK</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-event mb-55 event-gray-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="assets/img/event/event-7.jpg" alt=""></a>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Fredy Yudistira Listion, S.Kom</a></h3>
                        <p>Guru Informatika, mengajarkan mata pelajaran informatika dan teknologi.</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Ruang Informatika</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-event mb-55 event-gray-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="assets/img/event/event-8.jpg" alt=""></a>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Imam Hariyadi, S.Pd</a></h3>
                        <p>Guru Bahasa Daerah, mengajarkan bahasa daerah dan kebudayaan lokal.</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Ruang Bahasa Daerah</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-event mb-55 event-gray-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="assets/img/event/event-9.jpg" alt=""></a>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Anggon Perwito, S.pd</a></h3>
                        <p>Guru SBDP, mengajarkan Seni Budaya dan Prakarya.</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Ruang SBDP</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-event mb-55 event-gray-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="assets/img/event/event-10.jpg" alt=""></a>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Andik Kusuma, M.Pd</a></h3>
                        <p>Guru PAK, mengajarkan Pendidikan Agama Kristen.</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Ruang PAK</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-event mb-55 event-gray-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="assets/img/event/event-11.jpg" alt=""></a>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Sri Handayani, S.Pd</a></h3>
                        <p>Guru PKN, mengajarkan Pendidikan Kewarganegaraan.</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Ruang PKN</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-event mb-55 event-gray-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="assets/img/event/event-12.jpg" alt=""></a>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Yaconias Uktolseja, S.Pd</a></h3>
                        <p>Guru IPS, mengajarkan Ilmu Pengetahuan Sosial dan sejarah.</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Ruang IPS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-event mb-55 event-gray-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="assets/img/event/event-13.jpg" alt=""></a>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Herry Wahono, ST</a></h3>
                        <p>Guru Matematika, mengajarkan Matematika dan memfasilitasi pelajaran matematika.</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Ruang Matematika</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-event mb-55 event-gray-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="assets/img/event/event-14.jpg" alt=""></a>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Agustinus Doe Koten, S.Pd</a></h3>
                        <p>Guru Bahasa Inggris, mengajarkan Bahasa Inggris dan sastra Inggris.</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Ruang Bahasa Inggris</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('after-script')


@endpush