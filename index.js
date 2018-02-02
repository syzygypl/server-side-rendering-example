var http = require('http')
var port = process.env.PORT || 3000;

function requestHandler(request, response) {
  console.log(request.url)

  var [module, params] = request.url.split('/').filter(function identity(x) {return x});

  switch (module) {
    case 'version':
      response.end('Node version is ' + process.versions.node);
      break;
  }

  response.end('Hello Node.js Server!')
}

http.createServer(requestHandler).listen(port, function (err) {
  if (err) {
    return console.log('something bad happened', err)
  }

  console.log('server is listening on ', port);
});
