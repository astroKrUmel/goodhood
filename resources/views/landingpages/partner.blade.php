@extends('layouts.app')

@section('content')
    <section id="partner">
        <h2 class="sub-headline">PARTNERS</h2>

        <div class="partner-content">
            @foreach ($partners as $partner)
                <a class="picture-collection partner-element" href="{{$partner['link']}}" target="_blank">
                    <img src="{{ '../../images/partners/' . $partner['name']}}" width="100%">
                </a>
            @endforeach
        </div>

    </section>
@endsection
