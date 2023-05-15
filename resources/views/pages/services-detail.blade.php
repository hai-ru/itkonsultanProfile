@extends('layouts.master.template')

@section('main')

    <section class="page-header page-header-modern custom-page-header-style-1 bg-color-primary page-header-lg mb-0">
        <div class="container container-xl-custom py-5">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="font-weight-extra-bold text-14 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">{{ $name }}</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end breadcrumb-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                        <li><a href="/">Home</a></li>
                        <li class="active">{{ $name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section custom-section-full-width bg-color-transparent border-0 mt-0 mb-1" style="background-image: url(/img/demos/it-services/backgrounds/dots-background-2.png); background-repeat: no-repeat; background-position: bottom right;">
        <div class="container container-xl-custom pt-3 mt-4">
            <div class="row justify-content-center">
                <div class="col-md-12 mb-5 mb-md-0">
                    <div class="overflow-hidden mb-2">
                        <span class="d-block font-weight-bold custom-text-color-grey-1 line-height-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600">EXTEND YOUR BUSINESS</span>
                    </div>
                    <div class="overflow-hidden mb-4">
                        <h2 class="text-color-dark font-weight-bold text-8 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="800">Enable Your Business To Its Maximum Potential With IT Innovation</h2>
                    </div>
                    <p class="custom-text-size-1 pt-3 pb-1 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                        Sejak berdiri tahun 2018 IT KONSULTAN berfokus pada pengembangan teknologi dan jasa konsultansi, kami memiliki berbagai pengalaman dan bidang keteknikan dan telekomunikasi. Sukses dengan menyediakan berbagai macam solusi digital yang di rancang khusus untuk kebutuhan pelanggan, kami mendukung dan mendorong kemajuan Teknologi Digital di Indonesia, sesuai dengan visi dan misi kami menjadi perusahaan Teknologi Berstandar Global dan Terpercaya.
                    </p>
                </div>
            </div>
            <div class="row position-relative z-index-1 pb-4 my-4">
                <div class="col">
                    <hr class="my-5">
                </div>
            </div>
            <div class="row align-items-xl-center pb-md-5 my-md-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250">
                <div class="col-lg-6 col-xl-4 position-relative px-xl-4 mx-auto mb-5 mb-lg-0 mt-lg-5">
                    <img src="/img/demos/it-services/careers/puzzle-1.png" class="img-fluid custom-position-center-x-y z-index-0" alt="Puzzle Background" />
                    <img src="/img/Layanan-Software_&_Aplikasi.jpeg" class="img-fluid position-relative z-index-1" alt="Our Emplyer Culture" />
                </div>
                <div class="col-lg-6">
                    <div class="overflow-hidden mb-4">
                        <h2 class="text-color-dark font-weight-bold text-8 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="800">Layanan Software dan Aplikasi</h2>
                    </div>
                    <p class="custom-text-size-1 pb-2 ">Wujudkan setiap ide anda untuk memiliki software & aplikasi terbaik yang dirancang khusus untuk solusi bisnis digital anda. Kembangkan aplikasi Android, iOS dan Sistem Informasi website lainnya bersama tim kami sesuai dengan keperluan anda.</p>
                    <p class="custom-text-size-1 pb-2 mb-4">Konsultasikan pengembangan bisnis anda dengan tenaga ahli profesional berpengalaman kami, sekarang. GRATIS!.</p>
                    <a href="tel:+6281254197359" class="btn btn-secondary btn-outline text-color-dark font-weight-semibold border-width-4 custom-link-effect-1 text-1 text-xl-3 d-inline-flex align-items-center px-4 py-3">KONSULTASI GRATIS! <i class="custom-arrow-icon ms-5"></i></a>
                </div>
            </div>
            <div class="row align-items-xl-center pb-md-5 my-md-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250">
                <div class="col-lg-6 col-xl-4 position-relative px-xl-4 mx-auto mb-5 mb-lg-0 mt-lg-5">
                    <img src="/img/demos/it-services/careers/puzzle-1.png" class="img-fluid custom-position-center-x-y z-index-0" alt="Puzzle Background" />
                    <img src="/img/Layanan-_Instalasi_jaringan_&_Insfrastuktur_IT.jpeg" class="img-fluid position-relative z-index-1" alt="Our Emplyer Culture" />
                </div>
                <div class="col-lg-6">
                    <div class="overflow-hidden mb-4">
                        <h2 class="text-color-dark font-weight-bold text-8 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="800">Layanan Instalasi Jaringan dan <br/> Infrastruktur IT</h2>
                    </div>
                    <p class="custom-text-size-1 pb-2 ">Kami menyediakan pengadaan barang dan jasa instalasi jaringan internet, CCTV serta membangun Infrastruktur IT lainnya sesuai dengan kebutuhan proses bisnis anda.</p>
                    <p class="custom-text-size-1 pb-2 mb-4">Tim IT Profesional kami memberikan pelayanan terbaik dengan harga yang bersaing dan garansi pekerjaan yang memuaskan. Mulailah diskusikan kebutuhan adnda sekarang bersama tim profesional kami.</p>
                    <a href="tel:+6281254197359" class="btn btn-secondary btn-outline text-color-dark font-weight-semibold border-width-4 custom-link-effect-1 text-1 text-xl-3 d-inline-flex align-items-center px-4 py-3">KONSULTASI GRATIS! <i class="custom-arrow-icon ms-5"></i></a>
                </div>
            </div>
            <div class="row align-items-xl-center pb-md-5 my-md-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250">
                <div class="col-lg-6 col-xl-4 position-relative px-xl-4 mx-auto mb-5 mb-lg-0 mt-lg-5">
                    <img src="/img/demos/it-services/careers/puzzle-1.png" class="img-fluid custom-position-center-x-y z-index-0" alt="Puzzle Background" />
                    <img src="/img/Layanan-_Proteksi_Keamanan_Data_&_Jaringan.jpeg" class="img-fluid position-relative z-index-1" alt="Our Emplyer Culture" />
                </div>
                <div class="col-lg-6">
                    <div class="overflow-hidden mb-4">
                        <h2 class="text-color-dark font-weight-bold text-8 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="800">Proteksi Keamanan Data & Jaringan</h2>
                    </div>
                    <p class="custom-text-size-1 pb-2 ">Membantu menyediakan sistem keamanan perusahaan anda dari peretasan dan pencurian data penting. sebagaimana mengutip dari laman resmi Kementrian Informasi dan Komunikasi Republik Indonesia, proteksi dan keamanan data ini diperlukan untuk mencegah penyalahgunaan data oleh pihak yang tidak bertanggung jawab.</p>
                    <p class="custom-text-size-1 pb-2 mb-4">Kami menyadari pentingnya proteksi dan keamanan data untuk keberlangsungan bisnis anda sekarang dan dimasa depan.</p>
                    <a href="tel:+6281254197359" class="btn btn-secondary btn-outline text-color-dark font-weight-semibold border-width-4 custom-link-effect-1 text-1 text-xl-3 d-inline-flex align-items-center px-4 py-3">KONSULTASI GRATIS! <i class="custom-arrow-icon ms-5"></i></a>
                </div>
            </div>
            <div class="row align-items-xl-center pb-md-5 my-md-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250">
                <div class="col-lg-6 col-xl-4 position-relative px-xl-4 mx-auto mb-5 mb-lg-0 mt-lg-5">
                    <img src="/img/demos/it-services/careers/puzzle-1.png" class="img-fluid custom-position-center-x-y z-index-0" alt="Puzzle Background" />
                    <img src="/img/Layanan-Perencana_desain_&_Analisis_data.jpeg" class="img-fluid position-relative z-index-1" alt="Our Emplyer Culture" />
                </div>
                <div class="col-lg-6">
                    <div class="overflow-hidden mb-4">
                        <h2 class="text-color-dark font-weight-bold text-8 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="800">Layanan Perencana Desain & Analisis Data</h2>
                    </div>
                    <p class="custom-text-size-1 pb-2 ">Membantu anda memulai proses perancangan yang baik, menganalisis data agar mudah dipahami, sehingga membuat anda menemukan keputusan dengan cepat dan mudah.</p>
                    <p class="custom-text-size-1 pb-2 mb-4">Mulailah perencanaan bisnis dan proyek anda bersama tenaga ahli profesional kami, mullai dari flowchart/research/analysist, UI/UX, database, proses bisnis implementasi sistem dan pendokumentasian. Ambil kesempatan berkonsultasi sekarang juga. GRATIS!</p>
                    <a href="tel:+6281254197359" class="btn btn-secondary btn-outline text-color-dark font-weight-semibold border-width-4 custom-link-effect-1 text-1 text-xl-3 d-inline-flex align-items-center px-4 py-3">KONSULTASI GRATIS! <i class="custom-arrow-icon ms-5"></i></a>
                </div>
            </div>
        </div>
    </section>

   @include('components.cta')

@endsection