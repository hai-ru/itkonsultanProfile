@extends('layouts.master.template')

@section('main')

    <section class="page-header page-header-modern custom-page-header-style-1 bg-color-primary page-header-lg mb-0">
        <div class="container container-xl-custom py-5">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="font-weight-extra-bold text-14 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">HUBUNGI KAMI</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end breadcrumb-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                        <li><a href="/">Home</a></li>
                        <li class="active">Hubungi Kami</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section border-0 py-0 m-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 px-0">
                    <div class="d-flex flex-column justify-content-center bg-color-dark h-100 p-5">
                        <div class="row justify-content-center pt-2 mt-5">
                            <div class="col-md-9">
                                <div class="feature-box flex-column flex-xl-row align-items-center align-items-xl-start text-center text-xl-start appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                                    <div class="feature-box-icon bg-color-transparent w-auto h-auto pt-0">
                                        <img src="img/demos/it-services/icons/building.svg" class="img-fluid" width="95" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                    </div>
                                    <div class="feature-box-info ps-2 pt-1">
                                        <h4 class="text-color-light font-weight-bold text-6">CV. IT KONSULTAN</h4>
                                        <p class="text-color-light opacity-5 font-weight-light custom-text-size-1 pb-2 mb-4"> Jl. Raya Desa Kapur Rt.8 / Rw.1 Dusun Parit Mayor Kecamatan Sungai Raya Kabupaten Kuburaya, Kalimantan Barat</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                                <hr class="bg-color-light opacity-2">
                            </div>
                        </div>
                        <div class="row justify-content-center py-2">
                            <div class="col-auto text-center mb-4 mb-sm-0 mb-lg-4 mb-xl-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000">
                                <span class="d-block font-weight-semibold text-center">SUPPORT</span>
                                <a href="tel:+6282255985321" class="text-color-light font-weight-bold text-6">+6282255985321</a> 
                            </div>
                            <div class="col-auto text-center ms-xl-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1200">
                                <span class="d-block font-weight-semibold text-center">SALES</span>
                                <a href="tel:+62881254197359" class="text-color-light font-weight-bold text-6">+62881254197359</a>
                            </div>
                        </div>
                        <div class="row justify-content-center pt-2 pb-3 mb-5">
                            <div class="col-md-9 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">
                                <hr class="bg-color-light opacity-2">
                            </div>
                            <div class="col-md-12 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">
                                <span class="d-block font-weight-semibold text-center">SEND AN EMAIL</span>
                                <a href="mailto:admin@itkonsultan.co.id" class="text-color-light font-weight-bold text-decoration-underline text-5">admin@itkonsultan.co.id</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 px-0">

                    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                    <div id="googlemaps" class="google-map h-100 my-0" style="min-height: 500px;">
                        <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=CV+It+Konsultan,+Sebelah+salon+aurel+300+meter+setelah+lampu+merah+tol+2,+Jalan+Raya+Desa+Kapur,+RT.8/RW.1,+Kapur,+Kabupaten+Kubu+Raya,+Kalimantan+Barat,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
                        </iframe>
                    </div>
                    <!-- <div style="overflow:hidden;max-width:100%;width:500px;height:500px;">
                        <div id="display-google-map" style="height:100%; width:100%;max-width:100%;">
                            <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=CV+It+Konsultan,+Sebelah+salon+aurel+300+meter+setelah+lampu+merah+tol+2,+Jalan+Raya+Desa+Kapur,+RT.8/RW.1,+Kapur,+Kabupaten+Kubu+Raya,+Kalimantan+Barat,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
                            </iframe>
                        </div>
                        <style>#display-google-map img{max-height:none;max-width:none!important;background:none!important;}</style>
                    </div> -->

                </div>
            </div>
        </div>
    </section>

@endsection