

import express from 'express';

import fileSystem from 'node:fs';
const app = express();

//the file will change when updated (not a static file)
import lotrData from './lotr-data.json' assert { type: 'json' };

const PORT = 1535;

//set up EJS view engine
app.set('view engine', 'ejs');

//Serve up static files from the "public" directory
app.use(express.static('public'));


//Used to parse JSON bodies
// app.use(express.json()); //look further into this



//Used to parse URL-encoded bodies
app.use(express.urlencoded());


app.post('/', function (req, res) {
  res.send('POST request to the homepage');
  console.log('POST request sent to the homepage.')
})

app.get('/', function(request, response) {
	response.render('home');
})


// app.get('/add-character', function (request, response) {
// 	response.render('add-character');
// })

app.post('/add-character', function(request, response) {


	//createNewFile - what if there's no file yet?

	// 1 - parse the user input and turn it into an object
	console.log(request.body);


	var fileName = 'lotr-data.json';

	// 2 - open the database that the data's going to be added to
	//needs to be synchronous because the data's needed from the file
	var dataString = fileSystem.readFileSync(fileName, 'utf8');
	console.log(typeof dataString);

	// 3 - write the new data to the database
	var jsonData = JSON.parse(dataString);
	jsonData.push(request.body);
	console.log(jsonData);

	// 4 - save and close the database
	var newString = JSON.stringify(jsonData);
	fileSystem.writeFileSync('lotr-data.json', newString);


	response.send('SUCCESS!!!!!');

});



//This page has the current complete list of characters.
app.get('/characters', function(request, response) {
	response.render('characters', { data: lotrData });
})

//Start app
app.listen(PORT, function() { //the port number
	console.log(`Listening to the server at port ${PORT}...`);
});
//If no route matches... 
app.use( function(request, response) {
	response.status(404).render('404', { query: request.url });
});