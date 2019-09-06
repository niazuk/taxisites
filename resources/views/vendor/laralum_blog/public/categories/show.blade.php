@php
    $settings = \Laralum\Blog\Models\Settings::first();
@endphp
@extends('layouts.master')
@section('PageTitle', config('data.blog.title'))
@section('PageDescription', config('data.blog.desc'))
@section('PageTags', config('data.blog.tags'))
@section('Follow','follow')
@section('ExtraHead')
    <link rel="stylesheet" href="{{asset('storage/css/w3.css')}}">
@endsection
@section('PageContent')
    <main class="page-content">
        <section class="section-90 section-md-111">
            <div class="shell w3-row l8 s12">
                <!-- Blog entry -->
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <div class="w3-card-4 w3-margin w3-white">
                            <img src="{{$post->image}}" alt="" style="width:50%">
                            <div class="w3-container">
                                <h3><b>{{$post->title}}</b></h3>
                                <h5>{{$post->category->name}}, <span class="w3-opacity">Written by {{$post->user->name}}</span>
                                </h5>
                            </div>
                            <hr>
                            <div class="w3-container">
                                <p>{{$post->description}}</p>
                                <div class="w3-row">
                                    <div class="w3-col m8 s12">
                                        <a href="{{ route('laralum_public::blog.posts.show', ['post' => $post->id]) }}">
                                            <p>
                                                <button class="w3-button w3-padding-large w3-white w3-border"><b>READ
                                                        MORE »</b></button>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="w3-col m4 w3-hide-small">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                @else
                    <card>
                        <h3>No Posts...</h3>
                    </card>
                @endif
            </div>
        </section>
    </main>
@endsection
