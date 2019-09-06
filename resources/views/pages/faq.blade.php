@extends('layouts.master')
@section('PageTitle', config('data.faq.title'))
@section('PageDescription', config('data.faq.desc'))
@section('PageTags', config('data.faq.tags'))
@section('Follow','follow')

@section('PageContent')
    <main class="page-content">
        <!-- FAQ-->
        <section class="section-90 section-md-111 text-left">
            <div class="shell">
                <h1 class="text-bold text-center text-sm-left">{{config('data.faq.header')}}</h1>
                <p>{{config('data.faq.subheader')}}</p>
                <hr class="divider hr-sm-left-0 bg-chathams-blue">
                <div class="range range-xs-center range-sm-left offset-top-30 offset-md-top-60">
                    <div class="cell-sm-10 cell-lg-8">
                        <!-- Classic Accordion-->
                        <div data-type="accordion" class="responsive-tabs responsive-tabs-classic">
                            @foreach((config('data.faq.list')) as $key)
                            <ul data-group="accordion-arrow-left" class="resp-tabs-list accordion-arrow-left">
                                    <li>{{ $key['Q'] }}</li>
                            </ul>
                            <div data-group="accordion-arrow-left" class="resp-tabs-container accordion-arrow-left">
                                <div>
                                    <p>{{ $key['A'] }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQs-->
    </main>
@endsection