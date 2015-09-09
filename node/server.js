var app = require('http').createServer(handler);
var io = require('socket.io')(app);

var Redis = require('ioredis');
var redis = new Redis();

app.listen(3466, function() {
    console.log('Server is running!');
});

function handler(req, res) {
    res.writeHead(200);
    res.end('');
}

io.on('connection', function(socket) {
    //TODO: What information would be important to log?
    console.log(socket);
});

io.on('disconnect', function(){
console.log('WE LOST ONE!');
});

redis.subscribe('game-created', function(err, count) {
  //console.log(count);
    //
});

redis.on('message', function(channel, message) {
  console.log('Message from channel: '+channel+' with message: '+message);
    message = JSON.parse(message);
    io.emit(channel, message);
});