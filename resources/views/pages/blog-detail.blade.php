@extends('layouts.master.template')

@section('main')

    <section id="services" class="section bg-color-transparent border-0 mt-0 mb-1" style="background-image: url(/img/demos/it-services/backgrounds/dots-background-3.png); background-repeat: no-repeat; background-position: top right;">
        <div class="container container-xl-custom pt-3 mt-4">
            <div class="row justify-content-center">
                <div class="col-md-12" id="news_content">
                    <div class="mb-4 text-center">
                        <h2 class="text-color-dark font-weight-bold text-8 line-height-2 mb-0" id="title"></h2>
                    </div>
                    <div id="description"></div>
                </div>
                <div id="loading" class="text-center">
                    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                    <span class="sr-only">Loading...</span>
                    <p>Loading...</p>
                </div>
            </div>
        </div>
    </section>

    @include('components.cta')

@endsection

@section('js')
    <script>
        function fetchBlog() {
            $.ajax({
                url:"{{ env('APP_ENDPOINT') }}/api/data?type=blog&result_format=blogpost&slug={{$slug}}",
                beforeSend:function(){
                    $("#news_content").hide();
                    $("#loading").show();
                },
                success:function(result){
                    $("#title").text(result.title)
                    $("#description").html(result.description)
                    $("#news_content").show();
                    $("#loading").hide();
                },
                error:function(e){console.log(e)}
            })
        }
        fetchBlog()
    </script>
@endsection