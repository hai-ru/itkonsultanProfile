@extends('layouts.master.template')

@section('main')

    <section class="page-header page-header-modern custom-page-header-style-1 bg-color-primary page-header-lg mb-0">
        <div class="container container-xl-custom py-5">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="font-weight-extra-bold text-14 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">CONTACT US</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end breadcrumb-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact Us</li>
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
                                        <h4 class="text-color-light font-weight-bold text-6">Corporate Headquarters</h4>
                                        <p class="text-color-light opacity-5 font-weight-light custom-text-size-1 pb-2 mb-4">12345 Porto Blvd,<br>Suite 1500<br>Los Angeles, California 9000</p>
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
                                <a href="tel:+1234567890" class="text-color-light font-weight-bold text-6">800-123-4567</a>
                            </div>
                            <div class="col-auto text-center ms-xl-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1200">
                                <span class="d-block font-weight-semibold text-center">SALES</span>
                                <a href="tel:+1234567890" class="text-color-light font-weight-bold text-6">800-123-4567</a>
                            </div>
                        </div>
                        <div class="row justify-content-center pt-2 pb-3 mb-5">
                            <div class="col-md-9 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">
                                <hr class="bg-color-light opacity-2">
                            </div>
                            <div class="col-md-12 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">
                                <span class="d-block font-weight-semibold text-center">SEND AN EMAIL</span>
                                <a href="mailto:mail@domain.com" class="text-color-light font-weight-bold text-decoration-underline text-5">mail@domain.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 px-0">

                    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                    <div id="googlemaps" class="google-map h-100 my-0" style="min-height: 500px;"></div>

                </div>
            </div>
        </div>
    </section>

@endsection