class CelloExerciseBook {

	constructor(title, author) {
		this.author = author;
		this.title = title;
		this.exercises = [],
		this.skills = [],
		this.leftHandExercises =  [],
		this.bowArmExercises =  [],
		this.$form = document.querySelector('form');
		this.$input = this.$form.querySelector('input');
		this.$output = document.querySelector('output');

		this.setUpApp();
		this.addEventListeners();
	}

	setUpApp() {
		const data = JSON.parse( localStorage.getItem('celloExercises') ) || [];
		data.forEach( (exerciseData) => {
			this.exercises = [...this.exercises, exerciseData];	
		});
		console.log(this.exercises);
		this.renderExercises();
	}

	addExercise(number, skills) {
		//initialize the variable to be added
		const exercise = {
			number: number,
			skills: skills || [],
			complete: false,
		};

		//if the number of the new exercise isn't equal to any other number (so it doesn't make copies)

		this.exercises = [...this.exercises, exercise];
		//does the same thing as the push method
		console.log(`Added exercise #${number} to ${this.title}`);
		this.renderExercises(this.exercises);
		localStorage.setItem('celloExercises', JSON.stringify(this.exercises));
		console.log(this.exercises);

		//otherwise..."This exercise's already in the database!"
	}

	//this function may not be wholly needed for this app - look at all the repetition...
	findExerciseByNumber(number) { //remember 'searchId' can be any word!
		return this.exercises.find( function(exercise) {
			return (exercise.number == number);
		})	
	}

	logExercise(number) {
		const found = this.findExerciseByNumber(number);
		if(found) {
			console.log(`This is exercise #${found.number} from ${this.title}`);
		} else {
			alert(`This exercise isn't in the book yet...`);
		}
	}

	removeExercise(number) {
		const filtered = this.exercises.filter( function(exercise) {
			return exercise.number != number;
		})
		this.exercises = [...filtered];
		this.renderExercises();
		localStorage.setItem('celloExercises', JSON.stringify(this.exercises));
		console.log(`Exercise #${number} was taken out of the book.`);
		console.log(this.exercises);
	}

	toggleCompleteExercise(number) {
		for (let i = 0; i < this.exercises.length; i++) {
			if ( this.exercises[i].number == number ) {
				this.exercises[i].complete = !this.exercises[i].complete;
				console.log(`Exercise #${this.exercises[i].number} has been toggled.`)
			}
		}
		this.renderExercises(this.exercises);
		localStorage.setItem('celloExercises', JSON.stringify(this.exercises));
	}

	renderExercises() {
		var template = "<ul>";
		this.exercises.forEach( (exercise) => {
			template += this.renderExercise(exercise);
		});
		template += "</ul>";
		this.$output.innerHTML = template;
	}

	renderExercise(exercise) {
		var number = exercise.number;
			return `
				<li id="exercise" data-id="${exercise.number}">
					<exercise-card class=${exercise.complete ? "complete" : ""}>
						<h2>Exercise #${exercise.number}</h2>
						<ul class="skill-list">${ this.renderSkills(number) }</ul>
						<actions>
							<input-field>
								<button>Add skill</button>
								<input />
							</input-field>
							<button>Remove exercise</button>
							<button rel="toggle">Mark complete</button>
						</actions>
					</exercise-card>
				</li>
			`;
	}

	renderSkills(number) {
		const found = this.exercises.find( function(exercise) {
			return (exercise.number == number);
		})
		if(found) {
			var skills = found.skills;
			var template = "";
			skills.forEach( function (skill) {
				template += `
					<skill-wrapper>
						<li>${skill}</li>
						<button>Remove skill</button>
					</skill-wrapper>
				`;
			});
		
			return template;
		}
	}

	logSkills(number) {
		const found = this.exercises.find( function(exercise) {
			return (exercise.number == number);
		})
		if(found) {
			var skills = found.skills;
			console.log(`Exercise #${number} from ${this.title} focuses on:`);
			skills.forEach( function(skill) {
				console.log(skill);
			});
		}	
	}

	addSkill(number, skill) {
		const found = this.exercises.find( function(exercise) {
			return (exercise.number == number);
		})
		if(found) {
			var skills = found.skills;
			skills.push(skill);
			this.renderExercises();
			localStorage.setItem('celloExercises', JSON.stringify(this.exercises));
			console.log(`Added ${skill} to exercise #${number}.`);
		}
	}


	removeSkill(number, removed) {
		const found = this.exercises.find( function(exercise) {
			return (exercise.number == number);
		})
		if(found) {
			var skills = found.skills;
			for (let i = 0; i < skills.length; i++) {
				if( skills[i] == removed ) {
					console.log(removed);

					skills.splice(i, 1);
				}
			}
		}
		this.renderExercises();
		localStorage.setItem('celloExercises', JSON.stringify(this.exercises));
		console.log(`The skill "${removed}" was taken out of exercise #${number}.`);
		console.log(skills);
	}

	addEventListeners() {

		this.$form.addEventListener('submit', (event) => {
			event.preventDefault();
			this.addExercise( this.$input.value );
			this.$input.value = "";
		});

		this.$output.addEventListener('click', (event) => {

			if(event.target.textContent == 'Add skill') {
				let number = event.target.closest('li').dataset.id;
				let $input = event.target.closest('input-field').querySelector('input');
				if($input.value == "") {
					alert(`Type a skill in!`);
				} else {
					this.addSkill(number, $input.value);
					$input.value = "";
				}		
			}

			if(event.target.textContent == 'Remove skill') {
				let number = event.target.closest('#exercise').dataset.id;
				let skill = event.target.closest('skill-wrapper').querySelector('li').textContent;
				this.removeSkill(number, skill);
			}
			
			if(event.target.textContent == 'Remove exercise') {
				const id = event.target.closest('li').dataset.id;
				this.removeExercise(id);
			}

			if(event.target.textContent == 'Mark complete') {
				const id = event.target.closest('li').dataset.id;
				this.toggleCompleteExercise(id);
			}

		});
	}
}

const popperHighSchool = new CelloExerciseBook("David Popper", "High School of Cello Playing");

// popperHighSchool.addExercise(1, ["spiccato", "triplets"]);


// popperHighSchool.removeSkill(1, "one");


// ç
// popperHighSchool.addExercise(2, ["slurs", "large shifts"]);
// popperHighSchool.addExercise(3, ["intonation", "chromatic runs"]);

// // popperHighSchool.removeExercise(1); //works
// // popperHighSchool.completeExercise(2); //works


// // popperHighSchool.showSkills(2); //works

// popperHighSchool.addExercise(10);
// popperHighSchool.addSkill(10, "key changes");
// popperHighSchool.addSkill(2, "chromatic runs"); //works
// popperHighSchool.addSkill(2, "chromatic runs"); //works