@extends('layouts.master')
@section('PageTitle', config('data.offers.title'))
@section('PageDescription', config('data.offers.desc'))
@section('PageTags', config('data.offers.tags'))
@section('Follow','follow')

@section('PageContent')
    <main class="page-content">
        <!-- A Few Words About Us-->
        <section class="section-90 section-md-111 text-left">
            <div class="shell">
                    <div class="cell-sm-8 cell-md-6">
                        <div class="inset-lg-right-20">
                            <h1 class="text-bold text-center text-md-left">{{config('data.offers.header1')}}</h1>
                            <hr class="divider hr-md-left-0 bg-chathams-blue">
                                @foreach(config('data.offers.list') as $i)
                                <div>
                                <div class="offset-top-30 offset-md-top-60">
                                        <h4 class="text-capitalize">{{$i['h']}}</h4>
                                </div>
                                <div class="text-right">
                                    <h3><strong>{{$i['p']}}</strong></h3>
                                </div>
                                <hr>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
        </section>
    </main>
@endsection