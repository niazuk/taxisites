@extends('layouts.master')
@section('PageTitle', config('data.contact.title'))
@section('PageDescription', config('data.contact.desc'))
@section('PageTags', config('data.contact.tags'))
@section('Follow','follow')
@section('ExtraHead')
{!! \Biscolab\ReCaptcha\Facades\ReCaptcha::htmlScriptTagJsApi() !!}
@endsection
@section('PageContent')
<main class="page-content">
    <!-- Get in touch-->
    <section class="section-90 section-md-111 text-left">
        <div class="shell">
            <div class="range range-xs-center">
                <div class="cell-xs-10 cell-md-8">
                    <div class="inset-lg-right-40">
                        <h2 class="text-bold text-center text-md-left">{{config('data.contact.header1')}}</h2>
                        <hr class="divider hr-sm-left-0 bg-chathams-blue">
                        <div class="offset-top-35 offset-md-top-65">
                            <p>{{config('data.contact.paragraph1')}}</p>
                        </div>
                        <div class="offset-top-6">
                            <p>{{config('data.contact.paragraph2')}}</p>
                        </div>
                        <div class="offset-top-20 offset-md-top-30">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <!-- RD Mailform-->
                            <form id="contactform" action="{{route('send_email', ['i'=>1])}}" method="post" class="text-left">
                                {{csrf_field()}}
                                <div class="range range-xs-center">
                                    <div class="cell-sm-6">
                                        <div class="form-group form-group-label-outside">
                                            <label for="contacts-first-name"
                                            class="form-label form-label-outside text-dark">First
                                        name</label>
                                        <input required id="contacts-first-name" type="text" name="first-name"
                                        data-constraints="@Required" class="form-control">
                                    </div>
                                    <div class="form-group form-group-label-outside offset-top-20">
                                        <label for="contacts-email"
                                        class="form-label form-label-outside text-dark">E-mail</label>
                                        <input required id="contacts-email" type="email" name="email"
                                        data-constraints="@Email @Required" class="form-control">
                                    </div>
                                </div>
                                <div class="cell-sm-6 offset-top-20 offset-sm-top-0">
                                    <div class="form-group form-group-label-outside">
                                        <label for="contacts-last-name"
                                        class="form-label form-label-outside text-dark">Last name</label>
                                        <input required id="contacts-last-name" type="text" name="last-name"
                                        data-constraints="@Required" class="form-control">
                                    </div>
                                    <div class="form-group form-group-label-outside offset-top-20">
                                        <label for="contacts-phone"
                                        class="form-label form-label-outside text-dark">Phone</label>
                                        <input required id="contacts-phone" type="text" max="15"
                                        pattern="[0-9 ]+" name="phone"
                                        data-constraints="@Required" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-group-label-outside offset-top-20">
                                <label for="contacts-message" class="form-label form-label-outside text-dark">Message</label>
                                <textarea required id="contacts-message" name="message"
                                data-constraints="@Required"
                                style="max-height: 150px;"
                                class="form-control"></textarea>
                            </div>
                            <div class="offset-top-18 offset-sm-top-30 text-center text-sm-left">
                                {!! htmlFormSnippet() !!}
                            </div>
                            <div class="offset-top-18 offset-sm-top-30 text-center text-sm-left">
                                <input type="image" src="{{asset('storage/images/contact/button2.png')}}"
                                border="0" alt="Submit"
                                name="submit"/>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <div class="cell-xs-10 cell-md-4 offset-top-60 offset-md-top-0">
                <!-- Sidebar-->
                <aside class="text-left">
                    <div class="inset-md-left-30">
                        <!-- Socials-->
                        <div>
                            <h5 class="text-bold">Socials</h5>
                        </div>
                        <div class="offset-top-6">
                            <div class="text-subline"></div>
                        </div>
                        <div class="offset-top-20">
                            <ul class="list-inline list-inline-2">
                                <li><span class="icon icon-xxs icon-silver-filled icon-circle fa fa-facebook"></span></li>
                                <li><span class="icon icon-xxs icon-silver-filled icon-circle fa fa-twitter"></span></li>
                                <li><span class="icon icon-xxs icon-silver-filled icon-circle fa fa-google-plus"></span></li>
                                <li><span class="icon icon-xxs icon-silver-filled icon-circle fa fa-instagram"></span></li>

                            </ul>
                        </div>
                        <!-- Phones-->
                        <div class="offset-top-30 offset-md-top-60">
                            <div>
                                <h5 class="text-bold">Phones</h5>
                            </div>
                            <div class="offset-top-6">
                                <div class="text-subline"></div>
                            </div>
                            <div class="offset-top-20">
                                <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                                    <div class="unit-left"><span
                                        class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-phone"></span>
                                    </div>
                                    <div class="unit-body text-gray-darker">
                                        <p><a href="tel:{{config('data.meta.contact_number')}}"
                                          class="reveal-block reveal-xs-inline-block text-gray-darker">{{config('data.meta.contact_number')}}</a>
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- E-mail-->
                      <div class="offset-top-30 offset-md-top-60">
                        <div>
                            <h5 class="text-bold">E-mail</h5>
                        </div>
                        <div class="offset-top-6">
                            <div class="text-subline"></div>
                        </div>
                        <div class="offset-top-20">
                            <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                                <div class="unit-left"><span
                                    class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-email-outline"></span>
                                </div>
                                <div class="unit-body">
                                    <p><a href="mailto:{{config('data.meta.contact_email')}}"
                                      class="text-primary">{{config('data.meta.contact_email')}}</a>
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Address-->
                  <div class="offset-top-30 offset-md-top-60">
                    <div>
                        <h5 class="text-bold">Address</h5>
                    </div>
                    <div class="offset-top-6">
                        <div class="text-subline"></div>
                    </div>
                    <div class="offset-top-20">
                        <div class="unit unit-horizontal unit-spacing-xs">
                            <div class="unit-left"><span
                                class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-map-marker"></span>
                            </div>
                            <div class="unit-body">
                                <p>
                                    <a href="https://www.google.com/maps/search/?api=1&query={{ config('data.meta.contact_address') }}"
                                    class="text-gray-darker">{{config('data.meta.contact_address')}}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Opening Hours-->
                <div class="offset-top-30 offset-md-top-60">
                    <div>
                        <h5 class="text-bold">Opening Hours</h5>
                    </div>
                    <div class="offset-top-6">
                        <div class="text-subline"></div>
                    </div>
                    <div class="offset-top-20">
                        <div class="unit unit-horizontal unit-spacing-xs">
                            <div class="unit-left"><span
                                class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-calendar-clock"></span>
                            </div>
                            <div class="unit-body">
                                <p class="text-gray-darker">{{config('data.contact.openhours')}}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>
</div>
</section>
<section>
    <!-- RD Google Map-->
    <iframe src="{{config('data.contact.mapurl')}}"
    width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
</main>
@endsection