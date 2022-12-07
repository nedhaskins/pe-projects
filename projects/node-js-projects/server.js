const http = require('http'); //the http module, pulled from the node runtime environment

const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer((req, res) => { //creates a new server
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/plain');
  res.end('Hello World\n');
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});