import { URL } from 'url';

import monsters from './monsters.json' assert { type: 'json' };




const __dirname = new URL('.', import.meta.url).pathname;

import express from 'express';

const app = express();

//set up EJS view engine
app.set('view engine', 'ejs');

//Serve up static files from the "public" directory
app.use(express.static('public'));

const port = 7777;






app.get('/home', function(request, response) {
	response.render('home', { pageName: "The home page"} );
});


app.get('/monsters', function(request, response) {
	response.render('monsters', { pageName: "Monster List"} );
});





// app.get('/home', function(request, response) {
// 	response.sendFile('home', { root: __dirname });
// });



//Start app
app.listen(7777); //the port number
console.log(`Listening to the server at port ${port}...`);

app.use( function(request, response) {
	response.status(404).send("The requested page wasn't found.");
});
