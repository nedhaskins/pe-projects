
document.body.style.backgroundColor = "black";
document.body.style.color = "white";












var count = 0;
var exercises = [];


function print(note = "Hello!") {
	//the default will print if nothing else is there
	console.log(`------ ${note}`);
	console.log('exercises: ', exercises)
}

function addExercise(content) {

	//define the structure of the base object
	const exercise = {
		id: `exerc${count++}`,
		content: content
	};

	exercises.push(exercise);
	print(`Added ${content}`);

}

function updateExercise(id, newValue) {

	oldValue = exercises[id].content;
	exercises[id].content = newValue;

	print(`Updated ${oldValue} to ${newValue}`);
}

function removeExercise(id) {

	print(`Removed ${exercises[id].content}`);
	exercises.splice(id, 1);
}

function markComplete(id) {
	exercises[id].markComplete = true;
		print(`Removed ${exercises[id].content}`);
}

addExercise("Popper no. 35");
addExercise("Sevcik no. 2");
addExercise("B-flat major scale");
addExercise("Bach suite no. 6 prelude");

removeExercise(3);

print(exercises[2].content);

updateExercise(2, "D major scale");

print(exercises[2].content);

//example of scoping with "let"
var variable = "Domino";

{
	let variable = "Cheeky";
}

console.log(variable);
