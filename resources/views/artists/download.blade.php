@extends('layouts.app')

@section('content')

    @include('common.navigation')

    <div class="artist">
        <section class="artist-download">
            <a class="button" href="{{$download['downloadPath']}}">Download für {{$download['name']}}</a>

            <?php var_dump($download); ?>
        </section>
    </div>

@endsection