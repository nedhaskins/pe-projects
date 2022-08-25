//Exercise 1 - Saying Hello

function basicMessage() {
	var name = prompt("What is your name?");
	if(name) {
		var message = "Hello, " + name + "!";
		alert(message);
	} else {
		alert("You didn't enter your name, hoss.");
		basicMessage();
	}
}

var startButton = document.createElement('button');

startButton.addEventListener('click', basicMessage);

document.body.appendChild(startButton);


//2 - Counting Characters


//create a variable that is the result of a prompt for a string of characters
//if there's a string
//use a function to count that variable's characters
//return a string that states the number of characters


function getStringLength() {
	var string = prompt("Enter a string");
	if(string) {
		var length = string.length;
		var message = string + " has " + length + " characters.";
		alert(message);
	} else {
		alert("You didn't enter anything.");
		getStringLength();
	}
}

//3 - Printing Quotes

//create a variable for the quote
//create a variable for the utterer of the quote
//if both of these exist
//return a sentence that contains this info
//otherwise prompt the user to properly input the info


function quoteInfo() {
	var quote = prompt("What is the quote?")
	var source = prompt("Who said it?")

	if(quote && source) {
		var sentence = source + ' said, "' + quote + '"';
		alert(sentence);
	} else {
		alert("Please enter the stuff correctly---");
		quoteInfo();
	}
}

//4 - Mad Lib

//Enter a noun
//Enter a verb
//Enter an adjective
//Enter an adverb
//Return a sentence containing all inputs

function madLib() {
	var noun = prompt("Enter a noun.");
	var verb = prompt("Enter a verb.");
	var adjective = prompt("Enter a adjective.");
	var adverb = prompt("Enter a adverb.");

	if(noun && verb && adjective && adverb) {
		sentence = "The " + adjective + " " + noun + " walked through the forest, thinking, \"Do I truly " + verb + " " + adverb + "?\"";
		alert(sentence);
	} else {
		alert("Please enter the stuff correctly---");
		madLib();
	}
}

//5 - Simple Math

//Prompt for a number
//Prompt for a second number
//Define the sum with a variable
//Define the difference with a variable
//Define the product with a variable
//Define the quotient with a variable

//If the numbers exist
//return the results of all the operations


function simpleMath() {

	var number1 = prompt("Enter a number");
	var number2 = prompt("Enter a second number");

	var sum = Number(number1) + Number(number2);
	var diff = Number(number1) - Number(number2);
	var product = Number(number1) * Number(number2);
	var quot = Number(number1) / Number(number2);

	if(number1 && number2) {
		var sentence = number1 + "+" + number2 + "=" + sum + "\n" + number1 + "-" + number2 + "=" + diff + "\n" + number1 + "*" + number2 + "=" + product + "\n" + number1 + "/" + number2 + "=" + quot;
		alert(sentence);
	} else {
		alert("Please enter the stuff correctly brah.");
		simpleMath();
	}
}

//6 - Retirement Calculator

//Prompt for the current age
//Prompt for the retirement age
//Define working years left

//Define the current year
//Calculate the future year
//If all the variables have been entered properly
//return a sentence with all of the info

function RetirementCalc () {

	var currentAge = prompt("What is your current age?");
	var laterAge = prompt("At what age do you want to stop working?");
	var yearsLeft = Number(laterAge) - Number(currentAge);

	var currentYear = prompt("What's the current year?") 
	var futureYear = Number(currentYear) + Number(yearsLeft);

	if(currentAge && laterAge && yearsLeft && currentYear && futureYear) {
		sentence = "You have " + yearsLeft + " working years ahead of you!" + "\n" + "It's " + currentYear + ", so you can work until at least " + futureYear + ".";
		alert(sentence);
		} else {
			alert("You gotta enter this information right to continue, mah friend---");
			RetirementCalc();
	}		
}

//7 - Rectangular Room

//Prompt for the length of the room in feet
//Prompt for the width in feet
//Make a variable that calculates the area
//Make a variable that calculates the area in square meters
//Return a sentence with the dimensions, area, and area in square meters

function rectRoom() {

	var length = prompt("Enter the length of the room in feet.");
	var width = prompt("Enter the width of the room in feet.");
	var areaSqFt = Number(length) * Number(width);
	var areaSqM =  Number(areaSqFt) * 0.09290304;

	if(length && width) {
		output = "You entered dimensions of " + length + " ft by " + width + " ft.\n" + "The area is: " + areaSqFt + " sq ft.\n" + areaSqM + " sq m.";
		alert(output);
		} else {
			alert("You gotta enter this information right to continue, mah friend---");
			rectRoom();

	}
}

//8 - Pizza Party

//9 - Paint Calculator

//10 - Self Checkout