@extends('layouts.app')

@section('content')
    <div class="home">

        @include('common.logo')

        @include('common.navigation')

        @include('home.artists')

        {{--@include('common.events')--}}

        @include('common.contact')

        {{--    @include('common.impressum')--}}
    </div>
@endsection
