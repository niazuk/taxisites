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
            <div class="shell l8 s12">
                <h1>@lang('laralum_blog::general.category_list')</h1>
                <table class="w3-table">
                    <thead>
                    <tr class="w3-row">
                        <th class="text-center">ID</th>
                        <th class="text-center">@lang('laralum_blog::general.name')</th>
                        <th class="text-center">@lang('laralum_blog::general.actions')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($categories as $category)
                        <tr class="w3-row">
                            <td class="w3-cell text-center">{{ $category->id }}</td>
                            <td class="w3-cell text-center">{{ $category->name }}</td>
                            <td class="w3-cell text-center text-bold">
                                <a href="{{ route('laralum_public::blog.categories.show', ['category' => $category->id]) }}">
                                    @lang('laralum_blog::general.view')
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </section>
    </main>
@endsection
