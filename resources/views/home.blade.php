@extends('layouts.app')

@section('content')
    <div class="home">

        @include('common.logo')

        @include('common.navigation')

        @include('home.artists')

        @if (isset($events) && count($events) > 0)
            @include('common.events')
        @endif

        @include('common.contact')

        {{--    @include('common.impressum')--}}
    </div>
@endsection
