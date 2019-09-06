@extends('layouts.master')
@section('PageTitle', config('data.about.title'))
@section('PageDescription', config('data.about.desc'))
@section('PageTags', config('data.about.tags'))
@section('Follow','follow')
@section('PageContent')
<main class="page-content">
    <!-- A Few Words About Us-->
    <section class="section-90 section-md-111 text-left">
        <div class="shell">
            <div class="range range-xs-center">
                <div class="cell-sm-8 cell-md-6">
                    <div class="inset-lg-right-20">
                        <h2 class="text-bold text-center text-md-left">{{config('data.about.header')}}</h2>
                        <hr class="divider hr-md-left-0 bg-chathams-blue">
                        <div class="offset-top-30 offset-md-top-60">
                            <p> <!--
                                Reading Taxis has been established in Berkshire for a number of years. At Reading
                                TaxiÂ we understand that creating the right impression to your colleagues and
                                clients is fundamental in driving your business forward; your chauffeur company must
                                be to the highest quality and be an extension of your business.This is why our cars
                                are meticulously turned out, all routes are decided in advance using the highest
                                technology and our fully trained, professional drivers recognise the need for
                                discretion and safety.
                                <br><br>
                                All of our clients are driven in comfort and style from their
                                home, office or the airport to their required destination.For your convenience we
                                are able to monitor airport arrivals to ensure you arrive at your destination
                                promptly.
                                <br><br>
                                We provide transfers to or from most local and national destinations, whether you
                                are planning a holiday or an event. Our drivers provide cheap and fast transfers to
                                major airports throughout the UK, including Heathrow and Gatwick. You can also book
                                a trip to or from train and bus stations. Our vehicles are available for virtually
                                every type of function including weddings, birthdays, stag and hen parties, and
                                shopping trips. We are also available for corporate and sport events. <!-->
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-8 cell-md-6 offset-top-40 offset-md-top-0">
                    <p>
                       <br><br> <!-- <br><br><br><br>
                       Our drivers are ready to meet your transport needs from any destination and at any time.
                       Whether you are meeting with business clients or travelling with your friends and family, we
                       strive to give you the most reliable service possible. To ensure a safe and professional
                       ride, all of our drivers are fully qualified and licenced to provide taxi services. They are
                       available 24 hours a day, 365 days a year for all of your travel needs. All routes are
                       decided in advance to provide you with the quickest possible journey, and all of our
                       vehicles are fitted with GPS devices. We also provide special rates for long distance
                       journeys, giving you a cheap transfer that saves you money.
                       <br><br>
                       If you need a cab or affordable minibus hire, contact us today to book your next journey.
                       Professionalism and safety are our top priorities, and we strive to provide the best
                       possible trip. We give you the peace of mind of knowing that when you book your trip with
                       us, we’ll be there when you need and we’ll get you to where you want. Hire a cab with
                       Reading Taxis and let us exceed your expectations. <!-->
                       <br><br> 
                   </p>
               </div>
           </div>
       </div>
   </section>
   <!-- Company's Timeline-->
   @include('includes.timeline')
</main>
@endsection