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
                        <li><a href="/">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-color-transparent border-0 py-4 m-0">
        <div class="container container-xl-custom my-5">
            <div class="row row-gutter-sm justify-content-center mb-5" id="blog_list"></div>
            <div id="loading" class="text-center">
                <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                <span class="sr-only">Loading...</span>
                <p>Loading...</p>
            </div>
        </div>
    </section>

    @include('components.cta')

@endsection

@section('js')
    <script>
        let current_page = 1;
        let take = 4;
        let check_last_page = false;
        function fetchBlog(page) {
            let skip = (page - 1) * take;
            $.ajax({
                url:"{{ env('APP_ENDPOINT') }}/api/data?type=blog&take="+take+"&skip="+skip,
                beforeSend:function(){
                    $("#loading").show();
                },
                success:function(result){
                    const blog_list = $("#blog_list");
                    if(result.length === 0) {
                        return check_last_page = true;
                    }
                    if(result.length > 0) current_page = page;
                    result.map((item,index)=>{
                        const time = moment(item.created_at).format("Do MMMM YYYY, h:mm");
                        const template = `<div class="col-lg-6 isotope-item text-start">
                                <article class="card custom-post-style-1 border-0">
                                    <header class="overlay overlay-show">
                                        <img class="img-fluid" src="${item.default_image}" alt="${item.title}">
                                        <h4 class="font-weight-bold text-6 position-absolute bottom-0 left-0 z-index-2 ms-4 mb-4 pb-2 ps-2 pe-5 me-5">
                                            <a href="/blog/${item.slug}" class="text-color-light text-decoration-none">${item.title}</a>
                                        </h4>
                                    </header>
                                    <div class="card-body">
                                        <ul class="list list-unstyled custom-font-secondary pb-1 mb-2">
                                            <li class="list-inline-item line-height-1 me-1 mb-0">${time}</li>
                                            <li class="d-inline-block list-inline-item vertical-divider border-color-dark px-2 line-height-1 me-1">${item.user?.username ?? "-"}</li>
                                        </ul>
                                        <p class="custom-text-size-1 mb-2">${item.description}</p>
										<a href="/blog/${item.slug}" class="text-color-primary font-weight-bold text-decoration-underline custom-text-size-1">Lihat Selengkapnya...</a>
                                    </div>
                                </article>
                            </div>`;
                        blog_list.append(template);
                    })
                    $("#loading").hide();
                },
                error:function(e){console.log(e)}
            })
        }
        fetchBlog(1)
        window.onscroll = function(ev) {
            if ((window.innerHeight + Math.round(window.scrollY)) >= document.body.offsetHeight) {
                // you're at the bottom of the page
                if(check_last_page) return;
                fetchBlog(current_page+1);
            }
        };
    </script>
@endsection