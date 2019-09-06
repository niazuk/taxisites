@php
    $settings = \Laralum\Blog\Models\Settings::first();
@endphp
@extends('layouts.master')
@section('PageTitle', "$post->title - Blog")
@section('PageDescription', $post->description)
@section('PageTags', config('data.blog.tags'))
@section('Follow','follow')
@section('ExtraHead')
    <link rel="stylesheet" href="{{asset('storage/css/w3.css')}}">
@endsection
@section('PageContent')
 <main class="page-content">
     <section class="section-90 section-md-111">
         <h1><b>{{config('data.meta.sitename')}}</b></h1>
         <div class="shell w3-row  l8 s12">
             <div class="w3-card-4 w3-margin w3-white">
                 <img src="{{ $post->image }}" alt="" style="width:50%">
                 <div class="w3-container">
                     <h1><b>{{$post->title}}</b></h1>
                     <h4>{{$post->category->name}}, <span class="w3-opacity">{{$post->user->name}}</span></h4>
                 </div>
                 <h6>@lang('laralum_blog::general.written_by', ['username' => $post->user->name, 'time_ago' => $post->created_at->diffForHumans(), 'cat' => $post->category->name])</h6>
                 <hr>
                 <br>
                 <p>{!! $post->content !!}</p>
                 <br>
             </div>
         </div>
     </section>
 </main>
@endsection