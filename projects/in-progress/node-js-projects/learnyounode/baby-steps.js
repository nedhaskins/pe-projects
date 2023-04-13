var cmdLine = process.argv;

//Retrieve all of the numbers from inside the array and sum them.

//The index starts on the third object.
var total = 0;

for (i = 2; i < Number(cmdLine.length) - 2; i++) {
	total += Number(cmdLine[i]);
}
console.log(total);








//method 2

var total = 0;

process.argv.forEach( function (argument, index) { //good example of using the index argument
	if(index > 1) {
		total = total + Number(argument);
	}
});

console.log(total);