@component('mail::layout')
    @slot('header')
        @component('mail::header', ['url'=> config('data.meta.url')])
            <img src="{{ asset('storage/images/logo.png')}}" height="150px;">
        @endcomponent
    @endslot
    @component('mail::subcopy')
# Thank you for your submission

Thank you for your query. We aim to respond within 12 hours. If you have any additional queries, then reply to this email or submit a new query online.

{{$data['first-name']}} {{$data['last-name']}}

{{$data['email']}}

{{$data['phone']}}

{{ $data['message'] }}

Thanks,<br>
{{ config('data.meta.sitename') }}<br>
{{ config('data.meta.contact_email') }}<br>
{{ config('data.meta.contact_number') }}
@endcomponent
    @slot('footer')
        @component('mail::footer', ['url'=> config('data.meta.url')])
            <section class="section-12 bg-gray-darker text-md-left">
                <div class="shell">
                    <p class="font-accent">
                        <span class="small text-silver-dark">&copy; <span id="copyright-year"></span> All Rights Reserved Terms of Use and <a
                                    href="{{route('privacy')}}">Privacy Policy</a></span>
                    </p>
                </div>
            </section>
        @endcomponent
    @endslot
@endcomponent
