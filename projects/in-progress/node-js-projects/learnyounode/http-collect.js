const http = require('http');
const request = process.argv[2];

const bl = require('bl');

var data = undefined;

http.get(request, function callback(response) {

	response.pipe(bl(function(err, data) {
		if(err) {
			return console.error(err);
		}
		console.log(data.length);
		console.log(data.toString());
	}))
});



//the book solution

    // const http = require('http')
    // const bl = require('bl')
    
    // http.get(process.argv[2], function (response) {
    //   response.pipe(bl(function (err, data) {
    //     if (err) {
    //       return console.error(err)
    //     }
    //     data = data.toString()
    //     console.log(data.length)
    //     console.log(data)
    //   }))
    // })










//45 characters

//werlkjwqelkrjklewjrkl

