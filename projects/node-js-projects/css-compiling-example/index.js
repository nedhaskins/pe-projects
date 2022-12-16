import fileSystem from 'node:fs';

fileSystem.readdir('css', function(error, files) {
	if(error) return console.log('error', error);

	//this eventually needs to be something that loops through all of the files in the folder
	// var files = ['css/reset.css', 'css/structure.css', 'css/style.css'];

	var newFile = '';

	files.forEach( function (file) {
		
		if( !file.includes('minified') ){
			var cssFile = fileSystem.readFileSync(`css/${file}`);
			newFile += cssFile.toString();
		}

	})

	// create an empty file called 'styles-minified.css'
	fileSystem.writeFile('css/styles-minified.css', newFile, function(err) {
		if(err) {
			return console.error(err);
		}
		console.log("File uploaded :)")
	});

});

//read each of the current CSS files.  Assign the content of each of those files to a variable.




//write the content of each of those files
//to the new blank file, in cascading order