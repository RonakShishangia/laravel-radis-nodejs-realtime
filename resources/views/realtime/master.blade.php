<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FiveOne Socket.io</title>
</head>
<body>
@yield('content')

<script src="//{{ Request::getHost() }}:3000/socket.io/socket.io.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script>
var socket = io('http://localhost:3000');
</script>
@yield('footer')

</body>
</html>
