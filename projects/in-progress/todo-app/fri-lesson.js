document.body.style.backgroundColor = "black";
document.body.style.color = "white";

var todos = [];
var lastId = 0;

const $form = document.querySelector('form');
const $input = $form.querySelector('input');
const $output = document.querySelector('output');

function add(content) {
	const todo = {
		id: `a-${lastId++}`,
		content, //if key-value is the same it can be written this way
		complete: false,
	};

	todos = [...todos, todo];
	renderToDos(todos);
	//to the empty array, add the individual items
}

function remove(id) {

	//here's the function-as-object again...
	const filtered = todos.filter( function(todo) {
		//keep all of the items that don't match the requested remove-id
		return todo.id != id;
	});

	todos = [...filtered];
	renderToDos(todos);
	//the new variable is the final spread (the result of all the pushes) 

}

function complete(id) {
	for (let i = 0; i < todos.length; i++) {
		if (todos[i].id == id) {
			todos[i].complete = true;
		}
	}
	renderToDos(todos);
}

// add("Do some amazing things with JavaScript");
// add("Get some new strings");
// add("Ask a CSS question");
// complete("a-1");
// remove("a-0");



function addToDo() {
	//will use innerHTML here and make a new div for every one?
	//add the new input value to a new div
	//create an unordered list element
	//each input item will be a list item
	//append each one when it's submitted
	var li = document.createElement('li');
	li.className = "todo-item";
	li.innerHTML = $input.value;
	ul.appendChild(li);
}


function renderToDo(todo) {
	return `
		<li data-id="${todo.id}">
			<todo-card class=${todo.complete ? "complete" : ""}>
				<h2>${todo.content}</h2>
				<actions>
					<button>remove</button>
					<button>complete</button>
				</actions>
			</todo-card>
		</li>
		`;
}

function renderToDos(todos) {
	var template = "<ul>";
	todos.forEach( function (todo) {
		template += renderToDo(todo);
	});
	template += "</ul>";
	$output.innerHTML = template;
}

//Now for the DOM stuff.

// var ul = document.createElement('ul');
// ul.className = "todo-list";
// document.body.appendChild(ul);
// ul.style.color =

$form.addEventListener('submit', function(event) {
//note the difference between 'click' and 'submit' here

	event.preventDefault();
	add( $input.value );
	$input.value = "";
	console.log('todos: ', todos);
	//Order is important here -- do the function -- 
	//then reassign $input.value.
});


$output.addEventListener('click', function(event) {

	if(event.target.textContent == 'remove') {
		const id = event.target.closest('li').dataset.id;
		remove(id);
	}

	if(event.target.textContent == 'complete') {
		const id = event.target.closest('li').dataset.id;
		complete(id);
	}

});




