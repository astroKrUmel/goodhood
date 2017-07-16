<section id="mediaBox">
    <a class="button button-booking" href="mailto:<?php echo config('goodHoodMusicConfig.bookingEmail'); ?>">BOOKING</a>

    <div class="music-and-links">
        @if (!$tracks->isEmpty())
            {!! Helper::createEmbedTemplate($tracks[0]['code'], 'mini') !!}
        @endif

        <div class="links">
            <a class="link" href="#" target="_blank">Link1</a>
            <a class="link" href="#" target="_blank">Link2</a>
            <a class="link" href="#" target="_blank">Link3</a>
        </div>
    </div>
</section>