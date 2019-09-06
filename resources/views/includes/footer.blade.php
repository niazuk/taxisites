<section class="section-60">
    <div class="shell">
        <div class="range range-xs-center text-md-left">
            <!-- First Column - Brief Info -->
            <div class="cell-xs-10 cell-sm-7 cell-md-4">
                <!-- Footer brand-->
                <div class="footer-brand"><a href="/"><img
                 src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                 data-src="{{asset('storage/images/logo.png')}}"
                 alt="{{config('data.meta.logoalt')}}" height="80px"/></a></div>
                 <div class="offset-top-30 inset-sm-right-20">
                    <p class="text-gray">{{{config('data.footer.desc')}}}</p>
                </div>
            </div>

            <!-- Second Column - Contact Details -->
            <div class="cell-xs-10 cell-sm-7 cell-md-4 offset-top-60 offset-md-top-0">
                <div>
                    <h5 class="text-bold">{{{config('data.footer.column2title')}}}</h5>
                </div>
                <div class="offset-top-6">
                    <div class="text-subline"></div>
                </div>
                <div class="offset-top-20">
                    <!-- Contact Info-->
                    <address class="contact-info text-left">
                        <div class="offset-top-10">
                            <div class="reveal-inline-block"><a href="tel:{{config('data.meta.contact_number')}}"
                                class="unit unit-middle unit-horizontal unit-spacing-xs"><span
                                class="unit-left"><span
                                class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-phone"></span></span><span
                                class="unit-body"><span
                                class="text-gray-darker">{{config('data.meta.contact_number')}}</span></span></a>
                            </div>
                        </div>
                        <div class="offset-top-10">
                            <div class="reveal-inline-block"><a href="mailto:{{config('data.meta.contact_email')}}"
                                class="unit unit-middle unit-horizontal unit-spacing-xs"><span
                                class="unit-left"><span
                                class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-email-outline"></span></span><span
                                class="unit-body"><span
                                class="text-gray-darker">{{config('data.meta.contact_email')}}</span></span></a>
                            </div>
                        </div>
                        <div class="offset-top-10">
                            <div class="reveal-inline-block"><a target="_blank"
                                href="https://www.google.com/maps/search/?api=1&query={{config('data.meta.contact_address')}}"
                                class="unit unit-horizontal unit-spacing-xs"><span
                                class="unit-left"><span
                                class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-map-marker"></span></span><span
                                class="unit-body"><span
                                class="text-gray-darker">{{config('data.meta.contact_address')}}</span></span></a>
                            </div>
                        </div>
                    </address>
                </div>
                <div class="offset-top-20">
                    <!-- List Inline-->
                    <ul class="list-inline list-inline-2">
                        <li><span class="icon icon-xxs icon-silver-filled icon-circle fa fa-facebook"></span></li>
                        <li><span class="icon icon-xxs icon-silver-filled icon-circle fa fa-twitter"></span></li>
                        <li><span class="icon icon-xxs icon-silver-filled icon-circle fa fa-google-plus"></span></li>
                        <li><span class="icon icon-xxs icon-silver-filled icon-circle fa fa-instagram"></span></li>

                    </ul>
                </div>
            </div>

            <!-- Third Column - Newsletter -->
            <div class="cell-xs-10 cell-sm-7 cell-md-4 offset-top-60 offset-md-top-0">
                <div>
                    <h5 class="text-bold">{{config('data.footer.column3title')}}</h5>
                </div>
                <div class="offset-top-6">
                    <div class="text-subline"></div>
                </div>
                <div class="offset-top-25">
                    <p class="text-gray">{{config('data.footer.column3desc')}}</p>
                </div>
                <div class="offset-top-20">
                    <form data-form-output="form-subscribe-footer" data-form-type="subscribe" method="post"
                    action="{{asset('storage/bat/rd-mailform.php')}}" class="rd-mailform rd-mailform-subscribe">
                    <div class="form-group form-group-sm">
                        <div class="input-group">
                            <input placeholder="Your e-mail..." type="email" name="email"
                            data-constraints="@Email @Required" class="form-control"><span
                            class="input-group-btn">
                            <button type="submit" class="btn btn-xs btn-ripe-lemon">Subscribe</button></span>
                        </div>
                    </div>
                    <div id="form-subscribe-footer" class="form-output"></div>
                </form>
            </div>
        </div>

    </div>
</div>
</section>

<!-- FOOTER -->
<section class="section-12 bg-gray-darker text-md-left">
    <div class="shell">
        <p class="font-accent">
            <span class="small text-silver-dark">&copy; <span id="copyright-year"></span> All Rights Reserved Terms of Use and <a
            href="{{route('privacy')}}">Privacy Policy. </a> Powered by<a href="https://www.abcminibusesedinburgh.co.uk/"> Minibus Hire Edinburgh & Coach Hire Edinburgh</a></span>
        </p>
    </div>
</section>