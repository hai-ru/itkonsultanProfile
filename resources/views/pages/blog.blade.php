@extends('layouts.master.template')

@section('main')

    <section class="page-header page-header-modern custom-page-header-style-1 bg-color-primary page-header-lg mb-0">
        <div class="container container-xl-custom py-5">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="font-weight-extra-bold text-14 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">BLOG</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end breadcrumb-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                        <li><a href="#">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-color-transparent border-0 py-4 m-0">
        <div class="container container-xl-custom my-5">
            <div class="row">
                <div class="col-lg-12 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">

                    <div class="masonry-loader masonry-loader-showing">
                        <div class="row row-gutter-sm justify-content-center masonry mb-5" data-plugin-masonry data-plugin-options="{'itemSelector': '.isotope-item'}">
                            <div class="col-lg-6 isotope-item text-start">
                                <article class="card custom-post-style-1 border-0">
                                    <header class="overlay overlay-show">
                                        <img class="img-fluid" src="img/demos/it-services/blog/blog-post-thumb-1.jpg" alt="Blog Post Thumbnail 1">
                                        <h4 class="font-weight-bold text-6 position-absolute bottom-0 left-0 z-index-2 ms-4 mb-4 pb-2 ps-2 pe-5 me-5">
                                            <a href="demo-it-services-blog-post.html" class="text-color-light text-decoration-none">What To Do If People Hate Your Brand</a>
                                        </h4>
                                    </header>
                                    <div class="card-body">
                                        <ul class="list list-unstyled custom-font-secondary pb-1 mb-2">
                                            <li class="list-inline-item line-height-1 me-1 mb-0">FEBRUARY 4, 2022</li>
                                            <li class="d-inline-block list-inline-item vertical-divider border-color-dark px-2 line-height-1 me-1">3 COMMENTS</li>
                                            <li class="list-inline-item line-height-1 mb-0">JOHN DOE</li>
                                        </ul>
                                        <p class="custom-text-size-1 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. dolor sit amet...</p>
                                        <a href="demo-it-services-blog-post.html" class="text-color-primary font-weight-bold text-decoration-underline custom-text-size-1">Read More...</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6 isotope-item text-start">
                                <article class="card custom-post-style-1 border-0">
                                    <header class="overlay overlay-show">
                                        <img class="img-fluid" src="img/demos/it-services/blog/blog-post-thumb-2.jpg" alt="Blog Post Thumbnail 2">
                                        <h4 class="font-weight-bold text-6 position-absolute bottom-0 left-0 z-index-2 ms-4 mb-4 pb-2 ps-2 pe-5 me-5">
                                            <a href="demo-it-services-blog-post.html" class="text-color-light text-decoration-none">How To Create A Good Site for Your Clients</a>
                                        </h4>
                                    </header>
                                    <div class="card-body">
                                        <ul class="list list-unstyled custom-font-secondary pb-1 mb-2">
                                            <li class="list-inline-item line-height-1 me-1 mb-0">FEBRUARY 4, 2022</li>
                                            <li class="d-inline-block list-inline-item vertical-divider border-color-dark px-2 line-height-1 me-1">3 COMMENTS</li>
                                            <li class="list-inline-item line-height-1 mb-0">JOHN DOE</li>
                                        </ul>
                                        <p class="custom-text-size-1 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. dolor sit amet...</p>
                                        <a href="demo-it-services-blog-post.html" class="text-color-primary font-weight-bold text-decoration-underline custom-text-size-1">Read More...</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6 isotope-item text-start">
                                <article class="card custom-post-style-1 border-0">
                                    <header class="overlay overlay-show">
                                        <img class="img-fluid" src="img/demos/it-services/blog/blog-post-thumb-3.jpg" alt="Blog Post Thumbnail 3">
                                        <h4 class="font-weight-bold text-6 position-absolute bottom-0 left-0 z-index-2 ms-4 mb-4 pb-2 ps-2 pe-5 me-5">
                                            <a href="demo-it-services-blog-post.html" class="text-color-light text-decoration-none">How To Design Powerful Mobile Apps</a>
                                        </h4>
                                    </header>
                                    <div class="card-body">
                                        <ul class="list list-unstyled custom-font-secondary pb-1 mb-2">
                                            <li class="list-inline-item line-height-1 me-1 mb-0">FEBRUARY 4, 2022</li>
                                            <li class="d-inline-block list-inline-item vertical-divider border-color-dark px-2 line-height-1 me-1">3 COMMENTS</li>
                                            <li class="list-inline-item line-height-1 mb-0">JOHN DOE</li>
                                        </ul>
                                        <p class="custom-text-size-1 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. dolor sit amet...</p>
                                        <a href="demo-it-services-blog-post.html" class="text-color-primary font-weight-bold text-decoration-underline custom-text-size-1">Read More...</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6 isotope-item text-start">
                                <article class="card custom-post-style-1 border-0">
                                    <header class="overlay overlay-show">
                                        <img class="img-fluid" src="img/demos/it-services/blog/blog-post-thumb-1.jpg" alt="Blog Post Thumbnail 1">
                                        <h4 class="font-weight-bold text-6 position-absolute bottom-0 left-0 z-index-2 ms-4 mb-4 pb-2 ps-2 pe-5 me-5">
                                            <a href="demo-it-services-blog-post.html" class="text-color-light text-decoration-none">What To Do If People Hate Your Brand</a>
                                        </h4>
                                    </header>
                                    <div class="card-body">
                                        <ul class="list list-unstyled custom-font-secondary pb-1 mb-2">
                                            <li class="list-inline-item line-height-1 me-1 mb-0">FEBRUARY 4, 2022</li>
                                            <li class="d-inline-block list-inline-item vertical-divider border-color-dark px-2 line-height-1 me-1">3 COMMENTS</li>
                                            <li class="list-inline-item line-height-1 mb-0">JOHN DOE</li>
                                        </ul>
                                        <p class="custom-text-size-1 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. dolor sit amet...</p>
                                        <a href="demo-it-services-blog-post.html" class="text-color-primary font-weight-bold text-decoration-underline custom-text-size-1">Read More...</a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>

                    <ul class="custom-pagination-style-1 pagination pagination-rounded pagination-md justify-content-center">
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    @include('components.cta')

@endsection