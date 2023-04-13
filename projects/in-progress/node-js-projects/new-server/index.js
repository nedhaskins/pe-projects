import http from "node:http";
import fs from "node:fs";

var dirFiles = []

fs.readdir('./', function(error, files) {
	if(error) return console.log('error', error);
	files.forEach( function(file) {
		if ( file.includes('html') ) {
			dirFiles.push(file);
		}
	})
	console.log(dirFiles);
});

const server = http.createServer( function(request, response) {
		
	response.setHeader('Content-Type', 'text/html');

	dirFiles.forEach( function(file) {

		//note the difference between file name and path name

		if (request.url == `/${file}`) {
			fs.readFile(file, 'utf8', (err, data) => {
				if(err) {
					return console.error(err);
				}
				response.statusCode = '200';
				response.write(data);
				response.end();
			});
	 	}
	})


	// response.statusCode = '404';
	// response.end();		
});

const PORT = 7777;
const HOSTNAME = 'localhost';

server.listen(PORT, HOSTNAME, function() {
	console.log(`Server is running at http://${HOSTNAME}:${PORT}`);
});



// const server = http.createServer( function(request, response) {
		
// 	response.setHeader('Content-Type', 'text/html');

// 	dirFiles.forEach(function(file) {

// 		if (request.url == file) {
// 			fs.readFile(file, 'utf8', (err, data) => {
// 				if(err) {
// 					return console.error(err);
// 				}
// 				response.statusCode = '200';
// 				response.write(data);
// 				response.end();
// 			});
// 		}
// 	 })
// });







// 	if (request.url == '/home') {
// 		fs.readFile('home.html', 'utf8', (err, data) => {
// 			if(err) {
// 				return console.error(err);
// 			}
// 			response.statusCode = '200';
// 			response.write(data);
// 			response.end();
// 		});
// 	} else if(request.url == '/contact') {
// 		fs.readFile('contact.html', 'utf8', (err, data) => {
// 			if(err) {
// 				return console.error(err);
// 			}
// 			response.statusCode = '200';
// 			response.write(data);
// 			response.end();
// 		});

// 	} else if(request.url == '/about.html') {
// 		fs.readFile('about.html', 'utf8', (err, data) => {
// 			if(err) {
// 				return console.error(err);
// 			}
// 			response.statusCode = '200';
// 			response.write(data);
// 			response.end();
// 		});

// 	} else if(request.url == '/404') {
// 		fs.readFile('404.html', 'utf8', (err, data) => {
// 			if(err) {
// 				return console.error(err);
// 			}
// 			response.statusCode = '200';
// 			response.write(data);
// 			response.end();
// 		});
// 	}
// });

	


