@extends('layouts.app')

@section('content')

    <div class="artist">

        @include('common.logo')

        @include('common.navigation')

        @include('artists.mainPic')

        @include('artists.biography')

        @include('artists.mediaBox')

        @include('artists.pictureGallery')

        <!-- $event ist noch nicht gesetzt -->
        {{--@include('common.events')--}}
    </div>

@endsection
