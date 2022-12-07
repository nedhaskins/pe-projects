const fs = require('fs')
const file = process.argv[2]

// fs.readFile(file, function(err, contents) {
// 	if(err) {
// 		return console.error(err);
// 	}
// 	const lines = contents.toString().split("\n").length - 1;
// 	console.log(lines)
// });


// const fs = require('fs')
// const file = process.argv[2]

// fs.readFile(file, function (err, contents) {
// 	if (err) {
// 		return console.log(err)
// 	}
// 	// fs.readFile(file, 'utf8', callback) can also be used
// 	const lines = contents.toString().split('\n').length - 1
// 	console.log(lines)
// })

fs.readFile(file, 'utf-8', function(err, contents) {
	if(err) {
		return console.error(err);
	}
	const lines = contents.split("\n").length - 1;
	console.log(lines)
});