@extends('layouts.master')
@section('PageTitle', config('data.home.title'))
@section('PageDescription', config('data.home.desc'))
@section('PageTags', config('data.home.tags'))
@section('Follow','follow')

{{--SWIPER DETAILS--}}
@section('PageHeader', config('data.home.Header'))
@section('PageHeader2', config('data.home.Header2'))
@section('PageSubtitle', config('data.home.Subtitle'))
@section('PageSubtitle2', config('data.home.Subtitle2'))
@section('SliderButton1', config('data.home.SliderButton1'))
@section('PageHeader3', config('data.home.Header3'))
@section('PageSubtitle3', config('data.home.Subtitle3'))
@section('PageSubtitle4', config('data.home.Subtitle4'))
@section('SliderButton2', config('data.home.SliderButton2'))
@section('ExtraHead')
    <link rel="stylesheet" href="{{ asset('storage/css/jquery.datetimepicker.min.css') }}">
@endsection
@section('PageContent')
    <main class="page-content">
    <!--{{config('data.home.MainHeader')}}-->
        <section class="section-90 section-md-111">
            <div class="shell">
                <h2 class="text-bold">{{config('data.home.MainHeader')}}</h2>
                <hr class="divider bg-chathams-blue">
                <div class="range range-xs-center offset-top-69">
                    <!--FOR LOOP For 4 Advantages-->
                    @for($i = 1; $i <5; $i++)
                        <div class="cell-xs-6 cell-sm-5 cell-md-3 {{ $i!=1 ? 'offset-top-60 offset-xs-top-0': null}}">
                            <!-- Box Icon-->
                            <div class="box-icon"><span
                                        class="icon icon-xlg icon-circle icon-outlined icon-chathams-primary-filled mdi @switch ($i)
                                        @case(1)mdi-wifi @break
                                        @case(2)mdi-taxi @break
                                        @case(3)mdi-seat-recline-extra @break
                                        @case(4)mdi-cash-multiple @break
                                        @default @break
                                        @endswitch"></span>
                                <div class="offset-top-30">
                                    <h5 class="text-bold">{{config("data.home.Adv{$i}Title")}}</h5>
                                </div>
                                <div class="offset-top-10">
                                    <p class="text-gray">{{config("data.home.Adv{$i}Desc")}}</p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </section>
        <!-- Popular Bus Tickets-->
        <section class="section-90 section-md-111 bg-zircon">
            <div class="shell">
                <h2 class="text-bold">{{config('data.home.MainHeader2')}}</h2>
                <hr class="divider bg-chathams-blue">
                <div class="range range-xs-center offset-top-60">
                    @for($j =1; $j<7;$j++)
                        <div class="cell-xs-10 cell-sm-6 cell-md-4 {{$j!=1 ? 'offset-top-30' : null }} {{ $j==2 ? 'offset-sm-top-0' : '' }} {{ $j==3 ? 'offset-md-top-0' : '' }}">
                            <!-- Post Ticket-->
                            <div class="post-ticket-header"><img
                                        src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                        data-src="{{asset("storage/images/home/pic{$j}.jpg")}}"
                                        width="370" height="280"
                                        alt="{{config("data.home.image{$j}.alt")}}"
                                        class="img-responsive"/>
                            </div>
                            <div class="post-ticket-body text-left">
                                <!-- List Inline-->
                                <div>
                                    <ul class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-primary">
                                        <li class="h7 text-bold text-primary">{{config("data.home.image{$j}.caption")}}</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

            </div>
        </section>

        <!-- Special Service: Bus Rental with Driver-->
        <section>
            <!-- RD Parallax-->
            <div data-on="false" data-md-on="true" class="bg-gray-base context-dark rd-parallax">
                <div data-speed="0.15" data-type="media"
                     data-url="{{asset('storage/images/home/background-04-1920x950.jpg')}}"
                     class="rd-parallax-layer"></div>
                <div data-speed="0" data-type="html" data-md-fade="false" class="rd-parallax-layer">
                    <div class="shell section-90 section-md-162">
                        <h2 class="text-bold text-white">{{config('data.home.BannerMessage')}}</h2>
                        <div class="offset-top-30"><a href="{{route('contact')}}" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Partners--><!-- A Few Words About Us-->
        <section class="section-90 section-md-111 text-left">
            <div class="shell">
                <div class="range range-xs-center">
                    <div class="cell-sm-8 cell-md-6">
                        <div class="inset-lg-right-20">
                            <div style="text-align:justify">
                                <p><br><br> <!--
                                    Reading Taxis has been established in Berkshire for a number of years. At Reading
                                    TaxiÂ we understand that creating the right impression to your colleagues and
                                    clients is fundamental in driving your business forward; your chauffeur company must
                                    be to the highest quality and be an extension of your business.This is why our cars
                                    are meticulously turned out, all routes are decided in advance using the highest
                                    technology and our fully trained, professional drivers recognise the need for
                                    discretion and safety.All of our clients are driven in comfort and style from their
                                    home, office or the airport to their required destination.For your convenience we
                                    are able to monitor airport arrivals to ensure you arrive at your destination
                                    promptly.
                                    <br><br>
                                    Welcome to Reading Taxis, your top choice for convenient transfers. With a long
                                    history serving clients travelling to and from Reading, we continue to offer high
                                    levels of professionalism and reliability.
                                    <br><br>
                                    We understand that you need to get to your destination as quickly and comfortably as
                                    possible. We offer convenient advanced booking and flexible payment options for
                                    airport transfers and other transport needs. We also get you to your home, hotel or
                                    other destination in comfort and style with one of our modern vehicles. Vehicle
                                    options range from executive cars to larger 8 seater and 16 seater minibuses. <!-->
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cell-sm-8 cell-md-6 offset-top-40 offset-md-top-0" style="text-align:justify">
                        <p><br><br> <!--
                            We provide transfers to or from most local and national destinations, whether you
                            are planning a holiday or an event. Our drivers provide cheap and fast transfers to
                            major airports throughout the UK, including Heathrow and Gatwick. You can also book
                            a trip to or from train and bus stations. Our vehicles are available for virtually
                            every type of function including weddings, birthdays, stag and hen parties, and
                            shopping trips. We are also available for corporate and sport events.
                            <br><br>
                            Our drivers are ready to meet your transport needs from any destination and at any
                            time. Whether you are meeting with business clients or travelling with your friends
                            and family, we strive to give you the most reliable service possible. To ensure a
                            safe and professional ride, all of our drivers are fully qualified and licenced to
                            provide taxi services. They are available 24 hours a day, 365 days a year for all of
                            your travel needs. All routes are decided in advance to provide you with the
                            quickest possible journey, and all of our vehicles are fitted with GPS devices. We
                            also provide special rates for long distance journeys, giving you a cheap transfer
                            that saves you money.
                            <br><br>
                            If you need a cab or affordable minibus hire, contact us today to book your next
                            journey. Professionalism and safety are our top priorities, and we strive to provide
                            the best possible trip. We give you the peace of mind of knowing that when you book
                            your trip with us, we’ll be there when you need and we’ll get you to where you want.
                            Hire a cab with Reading Taxis and let us exceed your expectations. <!-->
                        </p>
                        <h3 class="text-bold text-black">{{config('data.home.callUs')}}</h3>
                        <!-- RD Video-->
                    </div>
                </div>
            </div>
        </section>

        <!-- Latest News-->
        <!-- Take Part in the Discount Campaign-->
        <section class="section-57 section-bg-animation context-dark">
            <div class="shell">
                <div class="range range-xs-center range-xs-middle">
                    <div class="cell-md-10 cell-lg-8 text-center text-md-right">
                        <h2 class="text-bold">{{config('data.home.Header')}} {{config('data.home.Header2')}}</h2>
                    </div>
                    <div class="cell-lg-3 offset-top-30 offset-lg-top-0 text-lg-left"><a href="{{route('contact')}}"
                                                                                         class="btn btn-ripe-lemon">Get
                            A Quote</a></div>
                </div>
            </div>
        </section>
    </main>

@endsection
@section('ExtraJS')
    <script src="{{ asset('storage/js/jquery.datetimepicker.full.js') }}" defer></script>
@endsection