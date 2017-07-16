@extends('layouts.app')

@section('content')

    <div class="artist">
        @include('common.logo')

        @include('common.navigation')

        @include('artists.mainPic')

        @if (!empty($artist->biography))
            @include('artists.biography')
        @endif

        @include('artists.mediaBox')

        @include('artists.pictureGallery')

        @if (!empty($events) && count($events) > 0)
            @include('common.events')
        @endif
    </div>

@endsection
