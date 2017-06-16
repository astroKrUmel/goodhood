<section id="artists">
    <h2 class="sub-headline">ARTISTS</h2>

    @foreach($artists as $artist)
        <a class="picture-collection artist" href="artist/{{$artist->urlName}}">
            <picture>
                <source srcset="../../images/artists/{{$artist->urlName}}/mainMobile.jpg" media="(max-width: 767px)">
                <source srcset="../../images/artists/{{$artist->urlName}}/mainTablet.jpg" media="(min-width: 768px) and (max-width: 991px)">
                <source srcset="../../images/artists/{{$artist->urlName}}/mainDesktop.jpg" media="(min-width: 992px)">
                <img src="../../images/artists/{{$artist->urlName}}/main.jpg" width="100%" alt="{{strtoupper($artist->name)}}">
            </picture>
            <strong class="name">{{strtoupper($artist->name)}}</strong>
        </a>
    @endforeach

    <div class="seperator"></div>
</section>