const fs = require('fs');
var filepath = fs.readFileSync(process.argv[2]);

//node filenametorun filepath
//	 0       1            2

var newString = filepath.toString();
var splitString = newString.split("\n");
console.log(splitString.length - 1);