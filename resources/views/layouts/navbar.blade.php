<div class="rd-navbar-wrap">
    <nav data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="90px"
         data-lg-stick-up-offset="75px" data-auto-height="false"
         class="rd-navbar rd-navbar-top-panel rd-navbar-default rd-navbar-white rd-navbar-static-fullwidth-transparent"
         data-lg-auto-height="true" data-md-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static"
         data-lg-stick-up="true">
        <div class="rd-navbar-inner">
            <!-- RD Navbar Top Panel-->
            <div class="rd-navbar-top-panel">
                <div class="left-side">
                    <!-- Contact Info-->
                    <address class="contact-info text-left">
                        <div class="reveal-inline-block"><a href="tel:{{config('data.meta.contact_number')}}"
                                                            class="unit unit-middle unit-horizontal unit-spacing-xs"><span
                                        class="unit-left"><span
                                            class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-phone"></span></span><span
                                        class="unit-body"><span
                                            class="text-gray-darker">{{config('data.meta.contact_number')}}</span></span></a>
                        </div>
                        <div class="reveal-inline-block"><a href="mailto:{{config('data.meta.contact_email')}}"
                                                            class="unit unit-middle unit-horizontal unit-spacing-xs"><span
                                        class="unit-left"><span
                                            class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-email-outline"></span></span><span
                                        class="unit-body"><span
                                            class="text-gray-darker">{{config('data.meta.contact_email')}}</span></span></a>
                        </div>
                        <div class="reveal-inline-block"><a target="_blank"
                                                            href="https://www.google.com/maps/search/?api=1&query={{ config('data.meta.contact_address') }}"
                                                            class="unit unit-middle unit-horizontal unit-spacing-xs"><span
                                        class="unit-left"><span
                                            class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-map-marker"></span></span><span
                                        class="unit-body"><span class="text-gray-darker">
						{{config('data.meta.contact_address')}}</span></span></a></div>
                    </address>
                </div>
                <div class="right-side">
                    <ul class="list-inline list-inline-2">
                        <li><span class="icon icon-xxs icon-silver-filled icon-circle fa fa-facebook"></span></li>
                        <li><span class="icon icon-xxs icon-silver-filled icon-circle fa fa-twitter"></span></li>
                        <li><span class="icon icon-xxs icon-silver-filled icon-circle fa fa-google-plus"></span></li>
                        <li><span class="icon icon-xxs icon-silver-filled icon-circle fa fa-instagram"></span>
                        <!--a href="{{config('data.meta.insta')}}"
                               class="icon icon-xxs icon-silver-filled icon-circle fa fa-instagram"></a--></li>

                    </ul>
                </div>
            </div>
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span>
                </button>
                <!-- RD Navbar Top Panel Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel" class="rd-navbar-top-panel-toggle">
                    <span></span></button>
                <!-- Navbar Brand-->
                <div class="rd-navbar-brand"><a href="{{route('welcome')}}">
                        <img src="{{asset('storage/images/logo.png')}}" height="80px"
                             alt="{{config('data.meta.logoalt')}}"></a></div>
            </div>
            <style>
                @media (min-width: 720px) and (max-width: 1199px){

                    .rd-navbar-brand a:after{ 
                        content: '{{env('APP_NAME')}}';
                        font-size: 28px;
                        font-weight: 700;
                        color: #fff;
                    }
                }                
            </style>
            <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                    <div class="rd-navbar-mobile-scroll">
                        <!-- Navbar Brand Mobile-->
                        <div class="rd-navbar-mobile-brand"><a href="{{route('welcome')}}">
                                <img src="{{asset('storage/images/logo.png')}}"
                                     alt="{{config('data.meta.logoalt')}}"
                                     height="80"></a></div>
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li {{ Request::is('/') ? 'class=active' : null }}><a href="{{route('welcome')}}">Home</a></li>
                            <li {{ Request::is('about') ? 'class=active' : null }}><a href="{{route('about')}}">About Us</a></li>
                            <li {{ Request::is('fleet') ? 'class=active' : null }}><a href="{{route('fleet')}}">Fleet</a></li>
                            <li {{ Request::is('faq') ? 'class=active' : null }}><a href="{{route('faq')}}">FAQs</a>
                            </li>
                            <li {{ Request::is('offers') ? 'class=active' : null }}><a
                                        href="{{route('offers')}}">Offers</a></li>
                            <li {{ Request::is('blog*') ? 'class=active' : null }}><a
                                        href="{{route('laralum_public::blog.categories.show')}}">Blog</a></li>
                            <li {{ Request::is('contact') ? 'class=active' : null }}><a href="{{route('contact')}}">Contact
                                    Us</a></li>
                            <li>{{ Request::is('login') ? 'class=active' : null }}<a href="{{route('login')}}">Login</a>
                            </li>
                        </ul>

                    </div>
                </div>
                <!-- RD Navbar Search-->
            </div>

        </div>
    </nav>
</div>
