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
                <div class="col-lg-9 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">

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
                <div class="col-lg-3 pt-4 pt-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                    <aside class="sidebar">
                        <div class="px-3 mt-4">
                            <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0">Categories</h3>
                            <ul class="nav nav-list flex-column mt-2 mb-0 p-relative right-9">
                                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Design (2)</a></li>
                                <li class="nav-item">
                                    <a class="nav-link bg-transparent border-0 active" href="#">Photos (4)</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Animals</a></li>
                                        <li class="nav-item"><a class="nav-link bg-transparent border-0 active" href="#">Business</a></li>
                                        <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Sports</a></li>
                                        <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">People</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Videos (3)</a></li>
                                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Lifestyle (2)</a></li>
                                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Technology (1)</a></li>
                            </ul>
                            <div class="py-1 clearfix">
                                <hr class="my-2">
                            </div>
                            <div class="px-3 mt-4">
                                <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">Recent Posts</h3>
                                <div class="pb-2 mb-1">
                                    <a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2022 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
                                    <a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Lorem ipsum dolor sit amet</a>
                                    <a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2022 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
                                    <a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Consectetur adipiscing elit</a>
                                    <a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2022 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
                                    <a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Vivamus sollicitudin nibh luctus</a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-3 bg-color-dark border-0 m-0">
        <div class="container container-xl-custom">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-xl-6 mb-5 mb-lg-0">
                    <span class="d-block custom-text-color-light-2 custom-heading-bar custom-heading-bar-with-padding font-weight-light text-5 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Let’s Get in Touch</span>
                    <h2 class="text-color-light font-weight-extra-bold text-10 negative-ls-1 pe-3 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">LET'S TALK ABOUT YOUR BUSINESS IT SERVICES NEEDS</h2>
                    <p class="custom-font-secondary text-4 custom-text-color-light-3 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="overflow-hidden">
                        <a href="demo-it-services-contact.html" class="btn btn-secondary btn-outline text-color-light font-weight-semibold border-width-4 custom-link-effect-1 text-1 text-xl-3 d-inline-flex align-items-center px-4 py-3 appear-animation" data-appear-animation="maskRight" data-appear-animation-delay="900">GET STARTED NOW <i class="custom-arrow-icon ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection