/* 
	uuid: {
		v4: ...
		v3: ...
	}
*/

// const { v4: uid } = require('uuid');

// console.log ( uid() );

// function example(name) {
// 	console.log(`My name is ${name}.`) ;
// }

// example ( process.argv[2] );

// function x(node, filepath, ...x) {
	
// }



//Creating a server.

import http from 'node:http';

const person = {
	"name": "Ned"
};

const server = http.createServer( function(request, response) {
	// console.log( request.url );
	// console.log( request.method );

	response.statusCode = 200;
	response.setHeader('Content-Type', 'text/html');

	response.write('<h1>HI</h1>');
	response.write('<h1>THE SECOND RESPONSE</h1>');
	response.end();
	//you can only use end here if you like (for one command)	
});

const PORT = 6155;
const HOSTNAME = 'localhost';

server.listen(PORT, HOSTNAME, function() {
	console.log(`Server is running at http://${HOSTNAME}:${PORT}`);
});





//127.0.0.1