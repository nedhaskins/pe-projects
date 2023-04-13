const fs = require('node:fs');
const path = require('node:path');

let directory = process.argv[2];
let extension = process.argv[3];

fs.readdir(directory, function(err, list) {

	// if(err) {
	// 	return console.error(err);
	// }

	list.forEach( function(item) {
		if (path.extname(item) == `.${extension}`) {
			console.log(item);
		}	
	})
})