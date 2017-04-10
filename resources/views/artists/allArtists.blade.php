@extends('layouts.app')


@section('content')


    <section class="all-artists">
        <pre>
        <?php var_dump($artists->toArray()) ?>
        </pre>
    </section>
@stop
