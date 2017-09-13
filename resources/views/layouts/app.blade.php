<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
    <link rel="shortcut icon" href="/images/logos/Logo-Black-TwoRows.png" />

    <link href="/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="layout">
        @include('layouts.logo')
        @include('layouts.navigation')
        @yield('content')
        @include('layouts.footer')
    </div>
    <script src="/js/app.js"></script>
</body>
</html>
