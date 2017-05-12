<section id="mediaBox">

    @if(Auth::guest())
        <a class="link press-link" href="#">Presse Download</a>
    @endif

    <a class="button button-booking" href="#">BOOKING</a>

    <div class="music-and-links">
        {!! Helper::createEmbedTemplate($tracks[0]['code'], 'mini') !!}

        <div class="links">
            <a class="link" href="#" target="_blank">Link1</a>
            <a class="link" href="#" target="_blank">Link2</a>
            <a class="link" href="#" target="_blank">Link3</a>
        </div>
    </div>
</section>