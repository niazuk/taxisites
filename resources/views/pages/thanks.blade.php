@extends('layouts.master')
@section('PageTitle', config('data.thanks.title'))
@section('PageDescription', config('data.thanks.desc'))
@section('PageTags', config('data.thanks.tags'))
@section('Follow','follow')

@section('PageContent')
    <main class="page-content">
        <!-- A Few Words About Us-->
        <section class="section-90 section-md-111 text-left">
            <div class="shell">
                <div class="range range-xs-center">
                    <div class="cell-sm-8 cell-md-6">
                        <div class="inset-lg-right-20">
                            <h2 class="text-bold text-center text-md-left">Message Sent</h2>
                            <hr class="divider hr-md-left-0 bg-chathams-blue">
                            <div class="offset-top-30 offset-md-top-60">
                                <p>Thank you for your enquiry - we will be in touch shortly.</p>
                            </div>
                        </div>
                    </div>
                    <div class="cell-sm-8 cell-md-6 offset-top-40 offset-md-top-0"><p>&nbsp;</p>
                        <!-- RD Video-->
                    </div>
                </div>
            </div>
        </section>
        <!-- Company's Timeline-->
        @include('includes.timeline')
    </main>
@endsection