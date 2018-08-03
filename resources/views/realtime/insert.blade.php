@extends('realtime.master')

@section('content')
    <div class="form-group">
      <label for="data"></label>
      <input type="text" class="form-control" id="data" name="data" onkeyup="insData(this.value);" placeholder="Eenter anything">
      <p class="help-block">Data pass to socket on change event</p>
    </div>
@stop

@section('footer')
    <script>
    function insData(data) {
        // console.log(data);
        socket.emit('insdata', data);
    }
    </script>
@stop
