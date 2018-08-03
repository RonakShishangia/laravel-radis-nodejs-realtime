@extends('realtime.master')

@section('content')
    <h1 id="power"></h1>
@stop

@section('footer')
    <script>
        // socket.on("test-channel:App\\Events\\EventName", function(message){
        //     // increase the power everytime we load test route
        //     $('#power').text(parseInt($('#power').text()) + parseInt(message.data.power));
        // });

        socket.on('revdata', function(data){
            // console.log(data);
            $('#power').html(data).css("color", getRandomColor());
        });

        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    </script>
@stop
