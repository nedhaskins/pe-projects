const http = require('http');

const request = process.argv[2]; //the "data event"


http.get(request, function callback(response) {

	response.on('data', function(data) {
		console.log(data)
	}).setEncoding('utf8'); //this is a reponse method that can be chained on

})

//suggested solution

// 'use strict'
// const http = require('http')

// http.get(process.argv[2], function (response) {

// response.setEncoding('utf8')

// response.on('data', console.log)

// response.on('error', console.error)

// }).on('error', console.error)