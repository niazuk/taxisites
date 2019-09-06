<!-- Swiper-->
<div data-height="" data-min-height="200px" data-slide-effect="fade" data-simulate-touch="false"
     class="swiper-container swiper-slider context-dark text-lg-left">
    <div class="swiper-wrapper">
        <div data-slide-bg="{{asset('storage/images/header/background-03-1920x950.jpg')}}" class="swiper-slide">
            <div class="swiper-slide-caption-wrap">
                <div class="swiper-slide-caption">
                    <div class="shell">
                        <div class="range range-xs-center range-lg-left section-sm-50 section-md-0">
                            <div class="cell-xs-10 cell-lg-7 cell-xl-6">
                                <h1 data-caption-animate="fadeInDown" data-caption-delay="200"
                                    class="text-bold">@yield('PageHeader')<br
                                            class="veil reveal-lg-inline-block"> @yield('PageHeader2')</h1>
                                <div data-caption-animate="fadeInUp" data-caption-delay="600"
                                     class="offset-top-20 offset-lg-top-49">
                                    <p class="h6 text-mercury">@yield('PageSubtitle')
                                        <br class="veil reveal-lg-inline-block">@yield('PageSubtitle2')</p>
                                </div>
                                <div data-caption-animate="fadeInUp" data-caption-delay="800" class="offset-top-20"><a
                                            href="{{route('contact')}}"
                                            class="btn btn-default btn-skew">@yield('SliderButton1')</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-slide-bg="{{asset('storage/images/header/background-02-1920x950.jpg')}}" class="swiper-slide">
            <div class="swiper-slide-caption-wrap">
                <div class="swiper-slide-caption">
                    <div class="shell">
                        <div class="range range-xs-center range-lg-left">
                            <div class="cell-xs-10 cell-lg-9 cell-xl-7">
                                <h2 data-caption-animate="fadeInDown" data-caption-delay="200" class="text-bold">
                                    @yield('PageHeader3')</h2>
                                <div data-caption-animate="fadeInUp" data-caption-delay="600"
                                     class="offset-top-20 offset-lg-top-49">
                                    <p class="h6 text-mercury">@yield('PageSubtitle3')<br
                                                class="veil reveal-lg-inline-block">@yield('PageSubtitle4')</p>
                                </div>
                                <div data-caption-animate="fadeInUp" data-caption-delay="800" class="offset-top-20"><a
                                            href="{{route('contact')}}"
                                            class="btn btn-default btn-skew">@yield('SliderButton2')</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        @media (max-width: 900px) {
            .swiper-slide-caption-wrap {
                visibility: hidden;
            }
            .swiper-container{
                height: 1200px;
            }
            .swiper-center-caption{
                top: 10%;
            }
            .panel-lg{
                padding: 20px 0 0 0;
            }
            iframe{
                padding-left: 20px;
                height: -webkit-fill-available;
                height: -o-fill-available;
                height: -moz-available;
                height: fill-available;
                height: 1050px;
            }
        }
    </style>
    <!-- Get a Quote View -->
    <div class="swiper-center-caption">
        <div class="shell custom-shell">
            <div class="range range-xs-center">
                <div class="cell-sm-10 cell-md-12 cell-xs-10-custom">
                    <!-- Panel-->
                    <div class="panel panel-lg bg-overlay-chathams-blue text-lg-left"><h3>
                            <span class="small text-bold text-white">Get A Free Quote</span></h3>
                            <iframe src="https://taxicrm.co.uk/front/form/show/6" width="100%" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Swiper Pagination-->
    <div class="swiper-pagination swiper-pagination-clickable">
        <span class="swiper-pagination-bullet"></span>
        <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span></div>

    <!-- Swiper Navigation-->
    <div class="swiper-button-prev"><span class="icon icon-xs fa fa-chevron-left"></span></div>
    <div class="swiper-button-next"><span class="icon icon-xs fa fa-chevron-right"></span></div>
</div>

