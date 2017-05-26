<section id="artists">
    <h2 class="sub-headline">ARTISTS</h2>

    <?php // refactoring ?>
    <?php for ($i=0; $i<8; $i++) { ?>
    <div class="picture-collection artist">
        {{--src="../../images/artists/{{$artist->name}}.jpg"--}}
        <img src="../../images/User-Default.jpg">
        <strong class="name"><?php echo strtoupper('kit kut'); ?></strong>
    </div>
    <?php } ?>

    <div class="seperator"></div>
</section>