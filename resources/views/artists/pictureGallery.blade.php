<section id="picture-gallery">
    @foreach($artist->galleryImages as $image)
        <div class="picture-collection picture-gallery">
            <img src="../../{{$image}}" width="100%">

            <!-- irgendwie so -->
            {{--<picture>--}}
                {{--<source srcset="../../{{$image}}/mainMobile.jpg" media="(max-width: 767px)">--}}
                {{--<source srcset="../../{{$image}}/mainTablet.jpg" media="(min-width: 768px) and (max-width: 991px)">--}}
                {{--<source srcset="../../{{$image}}/mainDesktop.jpg" media="(min-width: 992px)">--}}
                {{--<img src="../../{{$image}}" width="100%" alt="{{strtoupper($artist->name)}}">--}}
            {{--</picture>--}}
        </div>
    @endforeach
</section>
