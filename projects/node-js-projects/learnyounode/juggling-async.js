const http = require('http');
const bl = require('bl');

//making an array to push URLs to, so they can be looped through
//in a function
var urls = [];

//following the same logic with each of the unique URL responses
//(this is the queue)
var responses = [];

//creating a count variable to specify the index of each of the URLs in the
//'urls' object
let count = 0;


//Add each of the URLS to the urls array based on index 
//from the process.argv object.
//(just prevents you from writing process.argv[2 + index] later -- which might be better)
for (var i = 2; i < process.argv.length; i++) {
	urls.push(process.argv[i]);
}

//Print each of the results in an array(?).  This is the final function to run,
function printResults() {
	for (let i = 0; i < 3; i++) {
		console.log(responses[i]);
	}
}

//For each of the URLs in the process.argv, this function will run.
function httpGet(index) {
	http.get(urls[index], function (response) {
		response.pipe(bl(function (err, data) {
			if(err) {
				return console.error(err);
			}

			//The responses are added to each of the URL strings according to the current index.
			//The count increment increases by 1 every time the stream finishes.
			//When it reaches 3, the printResults will run.
			responses[index] = data.toString();
			count++; //only happens when the data stops coming

			if(count === 3) {
				printResults(); 
			}
		}))
	})
}

//Run the above function for each of the URLs.
for (var i = 0; i < urls.length; i++) {
	httpGet(i);
}