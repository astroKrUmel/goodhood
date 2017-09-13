<section id="events">
    <h2 class="sub-headline">EVENTS</h2>

    <div class="table">
        <div class="table-row table-head">
            <span class="name">Event</span>
            <span class="date">Date</span>
            <span class="artists">Artist</span>
            <span class="city">City</span>
            <span class="location">Location</span>
        </div>

        @foreach ($events as $event)
            <a class="table-row" href="{{$event->facebookLink}}" target="_blank">
                <span class="name" title="{{$event->name}}">{{$event->name}}</span>
                <span class="date">{{ Carbon\Carbon::parse($event->date)->format('d.m.y')}}</span>
                <span class="artists" title="{{$event->artistNames}}">{{$event->artistNames}}</span>
                <span class="city" title="{{$event->city}}">{{$event->city}}</span>
                <span class="location" title="{{$event->location}}">{{$event->location}}</span>
                <span class="icon icon-facebook-white icon-small"></span>
            </a>
        @endforeach

    </div>

    {{--<div class="seperator"></div>--}}


    {{--<table cellspacing="0">--}}
        {{--<tr>--}}
            {{--<th>Event</th>--}}
            {{--<th>Date</th>--}}
            {{--<th>Artist</th>--}}
            {{--<th>City</th>--}}
            {{--<th>Location</th>--}}
        {{--</tr>--}}

        {{--@foreach ($events as $event)--}}
            {{--<tr>--}}
                {{--<td>{{$event->name}}</td>--}}
                {{--<td>{{$event->date}}</td>--}}
                {{--<td>{{$event->artistNames}}</td>--}}
                {{--<td>{{$event->city}}</td>--}}
                {{--<td>{{$event->location}}</td>--}}
                {{--<td class="facebook-link">--}}
                    {{--<a href="{{$event->facebookLink}}" target="_blank"></a>--}}
                {{--</td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}

    {{--</table>--}}

    <div class="seperator"></div>
</section>