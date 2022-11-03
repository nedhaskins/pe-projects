document.body.style.backgroundColor = "black";
document.body.style.color = "white";




function print(note = "") {
	console.log(`------ ${note}`);
	console.log('todos: ', todos)
}




















const todos = [];

//initializing a variable to use as an incremental counter
var count = 0;


//add an item with incremental counter to
function add(content) {
	var todo = {
		id: `a-${count++}`,
		content: content,
	};
	todos.push(todo);
	print(`Added ${content}`);
}

function remove(id) {
	print(`Removed ${todos[id].content}`);
	todos.splice(id, 1);
}

function complete(id) {
	todos[id].complete = true;
	print(`Completed ${todos[id].content}`);
}

function update() {
	//figure it out!
}

add("Do a 4 octave scale with a unique pattern");
add("Practice a Popper etude");





complete(0);

remove(2); 