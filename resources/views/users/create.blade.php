<form method="POST" action="/users">
    {!! csrf_field() !!}
    <input id="name" name="name" type="text">
    <input id="email" name="email" type="email">
    <input id="password" name="password" type="password">

    <input type="submit" value="Create">
</form>