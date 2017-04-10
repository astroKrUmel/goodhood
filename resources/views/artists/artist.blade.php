@extends('layouts.app')


@section('content')


    <section class="artist">

        <h2 class="name">{{ $artist->name }}</h2>
        <br>
        <ul>
            @foreach($tracks as $track)
                <li>
                    {!! Helper::createEmbedTemplate($track['code'], 'mini') !!}
                </li>
            @endforeach
        </ul>

        <pre>
        <?php var_dump($artist->toArray()) ?>
        </pre>
    </section>
@stop
