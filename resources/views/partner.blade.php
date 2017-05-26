@extends('layouts.app')

@section('content')
    <section id="partners">

        @include('common.navigation')

        <h2 class="sub-headline">PARTNERS</h2>

        @foreach ($partners as $partner)
            <a class="picture-collection partner" href="<?php echo $partner['link'] ?>" target="_blank">
                <img src="<?php echo '../../images/partners/' . $partner['name'] . '.jpg' ?>" width="100%">
            </a>
        @endforeach
    </section>
@endsection
