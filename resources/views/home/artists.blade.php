<section id="artists">
    <h2 class="sub-headline">ARTISTS</h2>

    @foreach($artists as $artist)
        <a class="picture-collection artist">
            <img src="../../images/artists/{{$artist->urlName}}/main.jpg" width="100%" alt="{{strtoupper($artist->name)}}">
            <strong class="name">{{strtoupper($artist->name)}}</strong>
        </a>
    @endforeach

    <div class="seperator"></div>
</section>