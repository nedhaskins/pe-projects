const myModule = require('./mymodule');



const directory = process.argv[2];
const extension = process.argv[3];



myModule(directory, extension, function (err, files) { //files here = filtered from the callback in the module page

	files.forEach(function (file) {
		console.log(file);
	});



});
