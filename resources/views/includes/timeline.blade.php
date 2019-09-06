<section class="section-90 section-md-111 bg-zircon">
            <div class="shell">
                <h2 class="text-bold text-center">{{config('data.about.header2')}}</h2>
<hr class="divider bg-chathams-blue">
<!-- Blog Timeline-->
<div class="range range-xs-center blog-timeline offset-top-30 offset-md-top-47">
    <div class="cell-sm-8 cell-md-5 text-md-right blog-timeline-images">
        <div class="range range-xs-center">
            @for ($i=1;$i<5;$i++)
                <div data-wow-duration="1s" data-wow-delay="@switch($i)
                @case(1)0.2 @break
                @case(2)0.3 @break
                @case(3)0.6 @break
                @case(4)0.9 @break
                @default @break @endswitch"
                     class="cell-xs-6 cell-md-12 blog-timeline-image-wrap wow fadeInLeft {{$i!=1 ? 'offset-top-30 offset-xs-top-0': null }}">
                    <div class="reveal-inline-block shadow-drop-md">
                        <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                             data-src="{{asset("storage/images/about/post-1{$i}-300x200.jpg")}}"
                             width="300" height="200"
                             alt="{{config("data.about.image{$i}alt")}}"
                             class="img-responsive center-block">
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <div class="cell-sm-8 cell-md-7 text-left offset-top-40 offset-md-top-0">
        <div class="inset-md-left-50 inset-lg-left-130">
            <div class="blog-timeline-posts">
                <div class="blog-timeline-post">
                    <div class="blog-timeline-post-media text-center text-md-left">
                        <p class="text-bold text-gray-darker">{{config('data.about.header2')}}</p>
                    </div>
                    <div class="blog-timeline-post-body offset-top-10 offset-lg-top-0">
                        @foreach(config('data.about.list') as $j)
                            <p class="offset-top-10"><span class="text-bold">{{$j}}</span></p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>