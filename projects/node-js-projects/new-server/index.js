import http from "node:http";
import fs from "node:fs";

var projectFiles = []

fs.readdir('./', function(error, files) {
	if(error) return console.log('error', error);
	console.log(files);
	
});








const server = http.createServer( function(request, response) {
		
	response.setHeader('Content-Type', 'text/html');

	if (request.url == '/home') {
		fs.readFile('home.html', 'utf8', (err, data) => {
			if(err) {
				return console.error(err);
			}
			response.statusCode = '200';
			response.write(data);
			response.end();
		});
	} else if(request.url == '/contact') {
		fs.readFile('contact.html', 'utf8', (err, data) => {
			if(err) {
				return console.error(err);
			}
			response.statusCode = '200';
			response.write(data);
			response.end();
		});

	} else if(request.url == '/about.html') {
		fs.readFile('about.html', 'utf8', (err, data) => {
			if(err) {
				return console.error(err);
			}
			response.statusCode = '200';
			response.write(data);
			response.end();
		});

	} else if(request.url == '/404') {
		fs.readFile('404.html', 'utf8', (err, data) => {
			if(err) {
				return console.error(err);
			}
			response.statusCode = '200';
			response.write(data);
			response.end();
		});
	}
});


const PORT = 7777;
const HOSTNAME = 'localhost';

server.listen(PORT, HOSTNAME, function() {
	console.log(`Server is running at http://${HOSTNAME}:${PORT}`);
});