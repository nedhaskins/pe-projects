class CelloExerciseBook {

	constructor(title, author) {
		this.author = author;
		this.title = title;
		this.exercises = [],
		this.leftHandExercises =  [],
		this.bowArmExercises =  [],
		this.exerciseIdMaker = 1
		this.$form = document.querySelector('form');
		this.$input = this.$form.querySelector('input');
		this.$output = document.querySelector('output');
	}

	addExercise(number, skills) {
		//initialize the variable to be added
		const exercise = {
			id: this.exerciseIdMaker++,
			skills: skills,
			complete: false,
		};

		this.exercises = [...this.exercises, exercise];
		//does the same thing as the push method
		console.log(`Added exercise #${number} to ${this.title}`);
		this.renderExercises(this.exercises);
	}

	findExerciseById(searchId) { //remember 'searchId' can be any word!
		return this.exercises.find( function(exercise) {
			return (exercise.id == searchId);
		})	
	}

	showExercise(searchId) {
		const found = this.findExerciseById(searchId);
		if(found) {
			console.log(`This is exercise #${found.id} from ${this.title}`);
		} else {
			alert(`This exercise isn't in the book yet...`);
		}
	}

	removeExercise(searchId) {
		const found = this.findExerciseById(searchId);
		if(found) {
			const filtered = this.exercises.filter( function(exercise) {
				return exercise.id != searchId;
			})
			console.log(`Exercise #${found.id} was taken out of the book.`);
			this.exercises = [...filtered];
		}
	}

	completeExercise(searchId) {
		for (let i = 0; i < this.exercises.length; i++) {
			if ( this.exercises[i].id == searchId ) {
				this.exercises[i].complete = true;
				console.log(`Exercise #${this.exercises[i].id} is marked complete.`)
			}
		}
	}

	renderExercise(exercise) {
		return `
			<li data-id="${exercise.id}">
				<exercise-card class=${exercise.complete ? "complete" : ""}>
					<h2>Exercise #${exercise.id}</h2>
					<actions>
						<button>remove</button>
						<button rel="toggle">complete</button>
					</actions>
				</exercise-card>
			</li>
		`;
	}	

	renderExercises() {
		var template = "<ul>";

		this.exercises.forEach( (exercise) => {
			template += this.renderExercise(exercise);
		});
		template += "</ul>";
		this.$output.innerHTML = template;
	}

	showSkills(searchId) {
		const found = this.exercises.find( function(exercise) {
			return (exercise.id == searchId);
		})
		if(found) {
			var skills = found.skills;
			console.log(`Exercise #${searchId} from ${this.title} focuses on:`);
			skills.forEach( function(skill) {
				console.log(skill);
			});
		}	
	}

	addSkill(searchId, skill) {
		const found = this.exercises.find( function(exercise) {
			return (exercise.id == searchId);
		})
		if(found) {
			var skills = found.skills;
			skills.push(skill);
			console.log(`Added ${skill} to exercise #${searchId}.`);
		}
	}

	addEventListeners() {

		//the arrow function frees the internal elements 
		this.$form.addEventListener('submit', (event) => {
			event.preventDefault();
			this.addExercise( this.$input.value );
			this.$input.value = "";
			console.log('exercises: ', this.exercises);
		});

		this.$output.addEventListener('click', (event) => {

			if(event.target.textContent == 'remove') {
				const id = event.target.closest('li').dataset.id;
				this.remove(id);
			}

			if(event.target.textContent == 'complete') {
				const id = event.target.closest('li').dataset.id;

				const toDoCard = (event.target.closest('exercise-card'));

				if(toDoCard.classList != 'complete') {
					this.complete(id);
				} else {
					toDoCard.classList = false;
				}
			}
		});
	}
}

const popperHighSchool = new CelloExerciseBook("David Popper", "High School of Cello Playing");

popperHighSchool.addExercise(1, ["spiccato", "triplets"]);






popperHighSchool.addExercise(2, ["slurs", "large shifts"]);
// popperHighSchool.addExercise(3, ["intonation", "chromatic runs"]);

// popperHighSchool.removeExercise(1); //works
// popperHighSchool.completeExercise(2); //works


// popperHighSchool.showSkills(2); //works

// popperHighSchool.addSkill(2, "chromatic runs"); //works