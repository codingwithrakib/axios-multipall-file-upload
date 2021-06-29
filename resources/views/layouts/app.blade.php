<html>

<head>
    @yield('title')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>


<body>
    @yield('content')
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
