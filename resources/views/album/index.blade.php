@foreach($albums as $album)
    <li>{!! $album['key'] !!} - {!! $album['name'] !!}</li>
@endforeach