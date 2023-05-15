@extends('layouts.master.template')

@section('main')
<section class="page-header page-header-modern custom-page-header-style-1 bg-color-primary page-header-lg mb-0">
    <div class="container container-xl-custom py-5">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="font-weight-extra-bold text-14 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">ABOUT US</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-end breadcrumb-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    <li><a href="#">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section section-height-3 bg-color-transparent border-0 pb-0 m-0" style="background-image: url('/img/demos/it-services/backgrounds/dots-background-3.png'); background-repeat: no-repeat; background-position: 112% 100%;">
    <div class="container container-xl-custom mt-4">
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-lg-7 col-xl-5 mb-5 mb-lg-0">
                <span class="d-block custom-text-color-grey-1 font-weight-bold mb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">WHO WE ARE</span>
                <h2 class="text-color-dark font-weight-bold text-8 line-height-2 negative-ls-1 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">We focus on bringing value and solve business challenges through the delivery of modern IT services and solutions</h2>
                <p class="custom-text-size-1 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">
                    Kami adalah perusahaan jasa profesional yang bebasis di Pontianak, Indonesia
                    terdaftar di <strong class="text-color-dark">Akte Notaris Pendiriaan Perusahaan No.63, - tanggal 21 januari 2018
                    oleh notaris Eddy Dwi Pribadi, SH., dan akte perubahan No.03,- tanggal 08 desember 2022
                    oleh notaris Edwina Annisa Pramuditha, S.H., M.KN. </strong>
                </p>
                <p class="custom-text-size-1 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1300" data-plugin-options="{'accY': 200}">
                    Sebagai perusahaan jasa konsultansi perencanaan dan pengembangan teknologi informasi
                    Kami menawarkan jasa konsultansi, dan layanan bernilai tambah untuk basis klien kami.
                    fokus kami dalam menekuni dan memberikan bantuan pelayanan pada bisnis anda dalam bidang <strong class="text-color-dark">
                    pemrograman software, website, e-commerce, sistem informasi (SI)</strong> dan <strong class="text-color-dark">sistem informasi manajemen (SIM)
                    Sistem informasi geografis (SIG), Aplikasi Android dan iOS, UI/UX Desain, SEO SEM & Digital Marketing
                    Jaringan Komputer, Machine Learning, Artificial Intelligence (AI), Data Science, Blockchain Technologi,
                    serta Software Quality Assurance (SQA).</strong>
                </p>
                <p class="custom-text-size-1 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1300" data-plugin-options="{'accY': 200}">
                    Apapun bisnis anda, kami dapat merekomendasikan, mencari dan membuat solusi untuk anda
                    anda dapat selalu mengehubungi kami untuk mendiskusikan apapun mengenai solusi khusus bisnis anda.
                </p>
            </div>
            <div class="col-md-10 col-lg-5 ms-xl-auto">
                <img src="/img/desk-white.jpg" class="img-fluid position-relative z-index-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1500" alt="Our Company" />
            </div>
        </div>
    </div>
</section>

<div class="container container-xl-custom py-4 my-5">
    <div class="row row-gutter-sm justify-content-center my-3">
        <div class="col-md-6">
            <div class="card border-0 custom-box-shadow-1 h-100 p-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <div class="card-body">
                    <img class="img-fluid pb-2 mb-4" src="/img/visi.jpg" alt="Our Vision">
                    <h4 class="font-weight-bold text-color-dark text-6 pb-1 mb-4">OUR VISION</h4>
                    <p class="custom-font-secondary custom-text-size-2 line-height-4 pb-2 mb-4">
                        Menjadi perusahaan Teknologi Berstandar Global dan Terpercaya
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 custom-box-shadow-1 h-100 p-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                <div class="card-body">
                    <img class="img-fluid pb-2 mb-4" src="/img/misi.jpg" alt="Our Mission">
                    <h4 class="font-weight-bold text-color-dark text-6 pb-1 mb-4">OUR MISSION</h4>
                    <ul class="custom-font-secondary custom-text-size-2 line-height-4 pb-2 mb-4">
                        <li>Memberikan solusi transformasi digital terbaik dan inovatif;</li>
                        <li>Memberikan produk dan layanan terkini dan berkelanjutan;</li>
                        <li>Mendukung dan mendorong kemajuan Teknologi digital di Indonesia, serta berkontribusi menjaga kedaulatan negara;</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.cta')

@endsection
