class ToDo {
	
	constructor(record) {
		this.data = {
			content: record.content,
			dateCreated: record.dateCreated || new Date,
		};
	}
	
	render() {
		return `<li>${this.data.content}</li>`;
	}
}


class ToDoList {
	
	constructor(name) {
		this.name = name;
		this.todos = [];
		this.$form = document.querySelector('form');
		this.$outlet = document.querySelector('ul');
		this.setupApp();
		this.addEventListeners();
	}

	setupApp() {
		const data = JSON.parse( localStorage.getItem("databaseKey") ) || [];
		data.forEach( (todoData) => {
			this.todos = [...this.todos, new ToDo(todoData.data)];	
		});
		this.renderTodos();
	}

	report() {
		console.clear();
		console.log(this.todos);
	}

	addTodo(content) {
		this.todos.push( new ToDo( { content: content } ) );
		this.save();
		this.renderTodos();
	}

	save() {
		localStorage.setItem( "databaseKey", JSON.stringify(this.todos, null, 2) );
	}

	renderTodos() {
		this.$outlet.innerHTML = this.todos.map( (todo)=> {
			return todo.render(); // just some short hand to be fast - 
		}).join("");
		this.report();
	}

	addEventListeners() {
		this.$form.addEventListener('click', (event)=> {
			event.preventDefault();

			if ( event.target.matches('button') ) {
				var $input = this.$form.querySelector('input');
				var content = $input.value;
				this.addTodo(content);
				$input.value = "";
			}
		});
	}
}

new ToDoList("wat");


