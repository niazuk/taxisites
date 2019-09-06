@extends('layouts.master')
@section('PageTitle', config('data.fleet.title'))
@section('PageDescription', config('data.fleet.desc'))
@section('PageTags', config('data.fleet.tags'))
@section('Follow','follow')

@section('PageContent')
    <main class="page-content">
        <!-- A Few Words About Us-->
        <section class="section-90 section-md-111 text-left">
            <div class="shell">
                <div class="range range-xs-center">
                    <div class="cell-sm-8 cell-md-6">
                        <div class="inset-lg-right-20">
                            <h2 class="text-bold text-center text-md-left">{{config('data.fleet.title')}}</h2>
                            <hr class="divider hr-md-left-0 bg-chathams-blue">
                            <div class="offset-top-30 offset-md-top-60">
                                @include('layouts.fleet_header',['section'=>'1'])
                                @include('layouts.fleet_header',['section'=>'2'])
                            </div>
                        </div>
                    </div>
                    <div class="cell-sm-8 cell-md-6 offset-top-40 offset-md-top-0"><p>&nbsp;
                        </p>
                        <!-- RD Video-->
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection