<section id="events">
    <h2 class="sub-headline">EVENTS</h2>
    <table cellspacing="0">
        <tr>
            <th>Event</th>
            <th>Date</th>
            <th>Artist</th>
            <th>City</th>
            <th>Location</th>
            <th></th>
        </tr>
        @foreach ($events as $event)
            <tr>
                <td>{{$event->name}}</td>
                <td>{{$event->date}}</td>
                <td>{{$event->name}}</td>
                <td>{{$event->city}}</td>
                <td>{{$event->location}}</td>
                <td class="facebook-link">
                    <a href="{{$event->facebookLink}}" target="_blank"></a>
                </td>
            </tr>
        @endforeach
    </table>

    <div class="seperator"></div>
</section>