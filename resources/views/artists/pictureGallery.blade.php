<section id="picture-gallery">
    @foreach($artist->galleryImages as $image)
        <div class="picture-collection picture-gallery">
            <img src="../../{{$image}}" width="100%">
        </div>
    @endforeach
</section>
