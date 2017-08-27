<section id="mediaBox">

    <div class="music-and-links">
        @if (!$tracks->isEmpty())
            {!! Helper::createEmbedTemplate($tracks[0]['code'], 'mini') !!}
        @endif

        {{--{{$artist}}--}}
        <a href="mailto:{{config('goodHoodMusicConfig.bookingEmail')}}" class="button button-booking">BOOKING</a>

        <div class="links">
            @if (strlen($artist->facebookLink) > 0)
                <a class="link icon icon-facebook" href="{{$artist->facebookLink}}" target="_blank" title="Facebook"></a>
            @endif

            @if (strlen($artist->mixcloudLink) > 0)
                <a class="link icon icon-mixcloud" href="{{$artist->mixcloudLink}}" target="_blank" title="Mixcloud"></a>
            @endif

            @if (strlen($artist->instagramLink) > 0)
                <a class="link icon icon-instagram" href="{{$artist->instagramLink}}" target="_blank" title="Instagram"></a>
            @endif

            @if (strlen($artist->link) > 0)
                <a class="link direct-link" href="{{$artist->link}}" target="_blank" title="{{$artist->link}}">
                    {{$artist->link}}
                </a>
            @endif
        </div>
    </div>
</section>