var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var Redis = require('ioredis');
var redis = new Redis();

io.origins('*:*');
/**
 *  "*"  is
 */

redis.psubscribe('*', function(err, count) {
});
redis.on('pmessage', function(subscribed, channel, message) {
    console.log('subscribed', subscribed);
    console.log('channel', channel);
    console.log('Message Recieved: ' + message);
    message = JSON.parse(message);
    // io.emit(channel + ':' + message.event, message.data);
    io.emit(channel, message.data);


});
io.on('connection', function(socket) {
    console.log('Connect');
    socket.on('insdata', function(data) {
        console.log(data);
        socket.broadcast.emit('revdata', data);
    });
});
http.listen(3000, function(){
    console.log('Listening on Port 3000');
});
