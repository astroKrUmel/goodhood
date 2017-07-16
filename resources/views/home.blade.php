@extends('layouts.app')

@section('content')
    <div class="home">

        @include('common.logo')

        @if(!empty($message))
            <span>{{$message}}</span>
        @endif()

        @if(Auth::check() && Auth::user())
            <span>Willkommen zurück, {{ucfirst(Auth::user()->name)}}</span>
        @endif

        @include('common.navigation')

        @include('home.artists')

        @if (!empty($events) && count($events) > 0)
            @include('common.events')
        @endif

        @include('common.contact')

        {{--    @include('common.impressum')--}}
    </div>
@endsection
