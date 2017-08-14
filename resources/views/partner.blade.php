@extends('layouts.app')

@section('content')

    @include('common.logo')

    <section id="partners">
        @include('common.navigation')

        <h2 class="sub-headline">PARTNERS</h2>

        @foreach ($partners as $partner)
            <a class="picture-collection partner" href="{{$partner['link']}}" target="_blank">
                <img src="{{ '../../images/partners/' . $partner['name']}}" width="100%">
            </a>
        @endforeach
    </section>
@endsection
