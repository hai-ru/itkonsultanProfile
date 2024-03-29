@extends('layouts.master.template')

@section('main')

    <section class="page-header page-header-modern custom-page-header-style-1 bg-color-primary page-header-lg mb-0">
        <div class="container container-xl-custom py-5">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="font-weight-extra-bold text-14 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Produk</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end breadcrumb-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                        <li><a href="/">Home</a></li>
                        <li class="active">Produk</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="section bg-color-transparent border-0 mt-0 mb-1" style="background-image: url(/img/demos/it-services/backgrounds/dots-background-3.png); background-repeat: no-repeat; background-position: top right;">
        <div class="container container-xl-custom pt-3 mt-4">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center">
                    <div class="overflow-hidden mb-2">
                        <span class="d-block font-weight-bold custom-text-color-grey-1 line-height-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600">OUR EXPERTISE</span>
                    </div>
                    <div class="overflow-hidden mb-4">
                        <h2 class="text-color-dark font-weight-bold text-8 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="800">Produk Teknologi Informasi yang Kami Tawarkan</h2>
                    </div>
                    <p class="custom-text-size-1 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">Saat ini selain menyediakan jasa pelayanan profesional yang dirancang khusus sesuai dengan keperluan bisnis anda, IT KONSULTAN juga menawarkan produk purna jual berkualitas yang siap digunakan dengan harga bersaing, bergaransi dengan pelayanan terbaik dari tim IT Service kami.</p>
                </div>
            </div>
            <div class="row row-gutter-sm justify-content-center pb-5 mb-5">
                <div class="col-md-6 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">
                    <div class="card border-0 custom-box-shadow-1">
                        <div class="card-body text-center p-5 my-3">
                            <img src="/img/logo_norapos.png" class="img-fluid" alt="Norapos - Aplikasi Point Of Sale (POS)" />
                            <h4 class="text-color-primary font-weight-bold text-6 mb-3">Norapos - Aplikasi Point Of Sale (POS)</h4>
                            <p class="custom-text-size-1">Solusi bisnis anda. Kelola semua transaksi dalam satu aplikasi jadi lebih mudah. Terintegrasi online dan offline. Pantau bisnis anda dari mana dan kapan saja.</p>
                            <p class="text-color-dark font-weight-bold mb-3">Cobalah Sekarang, COCOK untuk SEMUA BISNIS ANDA!</p>
                            <a href="https://norapos.com" class="text-color-dark font-weight-bold custom-text-size-1">Lihat Selengkapnya +</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">
                    <div class="card border-0 custom-box-shadow-1">
                        <div class="card-body text-center p-5 my-3">
                            <img src="/img/paket_mesin_antrian_-_ITKONSULTAN.jpg" class="img-fluid" alt="Mesin Antrian (MQS)" />
                            <h4 class="text-color-primary font-weight-bold text-6 mb-3 mt-3">Mesin Antrian (MQS)</h4>
                            <p class="custom-text-size-1">Cocok untuk semua masalah antrian. <br/>Support dengan smartphone/android/tablet anda.<br/>Hubungi IT Service kami untuk mendapatkan demo GRATIS!</p>
                            <a href="demo-it-services-services-detail.html" class="text-color-dark font-weight-bold custom-text-size-1">Lihat Selengkapnya +</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col">
                    <div class="overflow-hidden mb-4">
                        <h2 class="text-color-dark font-weight-bold text-center text-8 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Our Process</h2>
                    </div>
                </div>
            </div> -->
            <!-- <div class="row pt-lg-4">
                <div class="col position-relative">
                    <div class="process custom-process-style-1 d-flex w-100 flex-column flex-lg-row pb-2 mb-4">
                        <div class="process-step col-12 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                            <div class="process-step-circle">
                                <strong class="process-step-circle-content text-color-primary text-8">1</strong>
                            </div>
                            <div class="process-step-content px-5">
                                <h4 class="text-color-dark font-weight-bold text-4 line-height-1 mb-3">1. BRAINSTORM</h4>
                                <p class="custom-font-secondary custom-text-size-1 px-3 mb-0">Lorem ipsum dolor sit <strong class="text-color-dark">amet</strong>, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="process-step col-12 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                            <div class="process-step-circle">
                                <strong class="process-step-circle-content text-color-primary text-8">2</strong>
                            </div>
                            <div class="process-step-content px-5">
                                <h4 class="text-color-dark font-weight-bold text-4 line-height-1 mb-3">2. DEVELOPMENT</h4>
                                <p class="custom-font-secondary custom-text-size-1 px-3 mb-0">Lorem ipsum dolor sit <strong class="text-color-dark">amet</strong>, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor.</p>
                            </div>
                        </div>
                        <div class="process-step col-12 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                            <div class="process-step-circle">
                                <strong class="process-step-circle-content text-color-primary text-8">3</strong>
                            </div>
                            <div class="process-step-content px-5">
                                <h4 class="text-color-dark font-weight-bold text-4 line-height-1 mb-3">3. DELIVERY</h4>
                                <p class="custom-font-secondary custom-text-size-1 px-3 mb-0">Lorem ipsum dolor sit <strong class="text-color-dark">amet</strong>, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    @include('components.cta')

@endsection