@extends('layouts.app')

@section('content')

    <div class="artist">

        @include('common.logo')

        @include('common.navigation')

        @include('artists.mainPic')

        @if (!$artist->biography == '')
            @include('artists.biography')
        @endif

        @include('artists.mediaBox')

        @include('artists.pictureGallery')

                <!-- $event ist noch nicht gesetzt -->
        {{--@include('common.events')--}}

        <pre>
            <?php var_dump($artist->toArray()) ?>
        </pre>
    </div>

@endsection
