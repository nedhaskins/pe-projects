

class ToDoApp {

	constructor(name) {
		this.todos = [];
		this.lastId = 0;
		this.name = name;
		this.$form = document.querySelector('form');
		this.$input = this.$form.querySelector('input');
		this.$output = document.querySelector('output');

		this.addEventListeners();
	}

	add(content) {
		const todo = {
			id: `a-${this.lastId++}`,
			content: content,
			complete: false,
		};
		this.todos = [...this.todos, todo];
		this.renderToDos(this.todos);

		//then put into local storage
	}

	remove(id) {
		const filtered = this.todos.filter( function(todo) {
			return todo.id != id;
		});

		this.todos = [...filtered];
		this.renderToDos(this.todos);		
	}

	toggleComplete(id) {
		for (let i = 0; i < this.todos.length; i++) {
			if (this.todos[i].id == id) {
				this.todos[i].complete = !this.todos[i].complete;
			}
		}
		this.renderToDos(this.todos);		
	}

	renderToDo(todo) {
		return `
			<li data-id="${todo.id}">
				<todo-card class=${todo.complete ? "complete" : ""}>
					<h2>${todo.content}</h2>
					<actions>
						<button>remove</button>
						<button rel="toggle">complete</button>
					</actions>
				</todo-card>
			</li>
			`;
	}	

	renderToDos() {
		var template = "<ul>";

		//probably need an arrow function here too
		this.todos.forEach( (todo) => {
			template += this.renderToDo(todo);
		});
		template += "</ul>";
		this.$output.innerHTML = template;
	}

	addEventListeners() {

		//the arrow function frees the internal elements 
		this.$form.addEventListener('submit', (event) => {
			event.preventDefault();
			this.add( this.$input.value );
			this.$input.value = "";
			console.log('todos: ', this.todos);
		});

		this.$output.addEventListener('click', (event) => {

			if(event.target.textContent == 'remove') {
				const id = event.target.closest('li').dataset.id;
				this.remove(id);
			}

			if(event.target.textContent == 'complete') {
				const id = event.target.closest('li').dataset.id;
				this.toggleComplete(id);
			}
		});
	}
}

var newApp = new ToDoApp('fall-list');