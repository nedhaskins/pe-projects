const fileSystem = require('fs');
const path = require('node:path');



module.exports = function(directory, extension, callback) {

	fileSystem.readdir(directory, function(error, files) {
		if(error) return callback(error);

		let filtered = [];
		files.forEach( function(file) {
			if(path.extname(file) == `.${extension}`) {
				filtered.push(file);
			}
		});

		callback(null, filtered);  
	});  

}


// 	const fs = require('fs');		
// 	const path = require('node:path');

// 	let directory = process.argv[2];
// 	let extension = process.argv[3];

// 	fs.readdir(directory , function(err, list) {

// 		if(err) {
// 			return console.error(err);
// 		}

// 		list.forEach( function(item) {
// 		// console.log('item', item);
// 		// console.log('extension', extension);
// 		// console.log('path extension name', path.extName(item));

// 			if (path.extname(item) == `.${extension}`) {
// 				console.log(item);
// 			}	
// 		})
// 	})
// }














// module.exports = function filterByExt(directory, extension, callback) {
// 	const fs = require('fs');		
// 	const path = require('node:path');

// 	let directory = process.argv[2];
// 	let extension = process.argv[3];

// 	fs.readdir(directory , function(err, list) {

// 		if(err) {
// 			return console.error(err);
// 		}

// 		list.forEach( function(item) {
// 		// console.log('item', item);
// 		// console.log('extension', extension);
// 		// console.log('path extension name', path.extName(item));

// 			if (path.extname(item) == `.${extension}`) {
// 				console.log(item);
// 			}	
// 		})
// 	})
// }