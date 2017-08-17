<section id="mediaBox">

    <div class="music-and-links">
        @if (!$tracks->isEmpty())
            {!! Helper::createEmbedTemplate($tracks[0]['code'], 'mini') !!}
        @endif

        <div class="links">
            @if (strlen($artist->facebookLink) > 0)
                <a class="link icon icon-facebook" href="{{$artist->facebookLink}}" target="_blank" title="Facebook"></a>
            @endif

            @if (strlen($artist->mixcloudLink) > 0)
                <a class="link icon icon-mixcloud" href="{{$artist->mixcloudLink}}" target="_blank" title="Mixcloud"></a>
            @endif

        </div>
    </div>
</section>