// array.from()  - creates an array from a given input

Array.from("entertainment"); // returns an array with each letter as an item

Array.from([4, 5, 6, 8, "ice", "nice"]);



// array.isArray() - returns true if an object is an array; false if not

Array.isArray('flight');
Array.isArray([1, 3, 4, "echo"]);



// array.length - returns the number of items

var objects = [1, 3, 4, "echo"];
objects.length; //4//

var noItems = [];
noItems.length; //0//



// array.push() - add a single item, multiple items, or a whole array to another array

var rocks = ["granite", "obsidian", "sandstone"];

var crystals = ["black tourmaline", "amethyst", "red jasper"];



// array.shift() - Removes the first element from an array. Can be used with a while loop.

const cities = ["Taipei", "Hong Kong", "Singapore", "Bangkok"];

cities.shift();

while ( typeof(i = cities.shift()) !== 'undefined') { // 'undefined' is a type!
	console.log(i);
}



// array.join() - Joins elements into a single string with the specified character

const airports = ["LAX", "PDX", "RIC", "JFK", "LGA", "IAD"];

airports.join();
airports.join(' and ');



// array.reverse() - returns a flipped version of the array -- and keeps the new order!

const things = ["boat", "envy", "spring", "terror", "storm", "yellow", "giraffe"];

things.reverse();




// array.find() - returns the first element that satisfies the criteria

numbers = [5, 3, 7, 9, 13, 15, 20, 24, 2, 0, -4, -9, -36, 0.23, 0.56]

numbers.find(item => item % 2 == 0); //find the first even number





// array.forEach()

const things = ["boat", "envy", "spring", "terror", "storm", "yellow", "giraffe"];

things.forEach()









// array.filter() - returns only items that have the specified criteria

// array.map() - Apply a function or expression to an array. Other things can be chained to the end of this.

var fruits = ["kiwi", "durian", "dragonfruit", "kiwi", "orange", "lemon", "lime", "plum", "kiwi"];

var fibonacci = [1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377]

fibonacci.map(x => x ** 2);

fruits.filter(item === 'kiwi');

fruits.map(item => item[0]).filter(item => item === 'k');







// array.reduce()

var fibonacci = [1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377]

const i = 0;

const fiboSum = fibonacci.reduce((a,b) => a+b, i);

console.log(fiboSum); //986





