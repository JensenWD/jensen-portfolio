@extends('master')

@push('head')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
@endpush

@section('body')
    <div class="container-fluid projects_wrapper">
        <div class="row pt-5 hero_bg">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 mb-4">
                        <a href="/#projects">
                            <button class="btn purple_outline_btn">Back</button>
                        </a>
                    </div>
                    <div class="col-12 mb-4">
                        <h1 class="white_font montserrat">@yield('title')</h1>
                    </div>
                    <div class="col-12">
                        <p class="white_font karla">@yield('description')</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 section-title">
                        <div class="title-bar bg-white"></div>
                        <h2 class="montserrat light_font white_font">Screenshots</h2>
                    </div>
                </div>
            </div>

            <div class="col-12 project_carousel mb-2">
                @yield('screenshots')
            </div>
        </div>


        <div class="row pb-5 contact-section">
            <div class="bottom_bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 section-title">
                        <div class="title-bar"></div>
                        <h2 class="montserrat light_font purple-font">Code samples</h2>
                    </div>
                </div>

                <div class="row mt-3">
                        @yield('code')
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.project_carousel').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
                centerMode: true,
                centerPadding: '75px',
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
@endpush