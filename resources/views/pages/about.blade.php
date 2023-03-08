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
                <p class="custom-text-size-1 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. In nibh ipsum, blandit id faucibus ac, finibus vitae dui.</p>
                <p class="custom-text-size-1 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1300" data-plugin-options="{'accY': 200}">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. </p>
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
                    <img class="img-fluid pb-2 mb-4" src="/img/demos/it-services/about-us/generic-2.jpg" alt="Our Mission">
                    <h4 class="font-weight-bold text-color-dark text-6 pb-1 mb-4">OUR MISSION</h4>
                    <p class="custom-font-secondary custom-text-size-2 line-height-4 pb-2 mb-4">Lorem ipsum dolor sit <strong class="text-color-dark">amet</strong>, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor.</p>
                    <p class="custom-text-size-1 pb-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. </p>
                    <p class="custom-text-size-1 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 custom-box-shadow-1 h-100 p-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                <div class="card-body">
                    <img class="img-fluid pb-2 mb-4" src="/img/demos/it-services/about-us/generic-3.jpg" alt="Our Mission">
                    <h4 class="font-weight-bold text-color-dark text-6 pb-1 mb-4">OUR VISION</h4>
                    <p class="custom-font-secondary custom-text-size-2 line-height-4 pb-2 mb-4">Lorem ipsum dolor sit <strong class="text-color-dark">amet</strong>, consectetur adipiscing elit. </p>
                    <p class="custom-text-size-1 pb-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. </p>
                    <p class="custom-text-size-1 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. </p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.cta')

@endsection
