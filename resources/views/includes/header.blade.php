<!-- RD Navbar Transparent-->
<!-- EVERY PAGE HAS NAVBAR, Homepage has Swiper and rest have Breadcrumbs -->
@include('layouts.navbar')
@if (Request::is('/'))
    @include('layouts.swiper')
@else
    @include('layouts.breadcrumbs')
@endif
