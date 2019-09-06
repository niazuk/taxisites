<title>@yield('PageTitle') - {{{config('data.meta.sitename')}}}</title>
<!--Page Metadata-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="@yield('PageDescription')">
<meta name="title" content="@yield('PageTitle')">
<meta name="keywords" content="@yield('PageTags')">
<meta name='robots' content='index,@yield('Follow')'>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="format-detection" content="telephone=yes">
<link rel="canonical" href="{{URL::current()}}"/>
<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
<!-- Stylesheets-->
@yield('ExtraHead')
<link rel="stylesheet" href="{{ asset('storage/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('storage/css/fonts.css') }}" defer>
