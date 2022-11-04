class CelloExerciseBook {

	constructor(title, author) {
		this.author = author;
		this.title = title;
		this.exercises = [],
		this.leftHandExercises =  [],
		this.bowArmExercises =  [],
		this.$form = document.querySelector('form');
		this.$input = this.$form.querySelector('input');
		this.$output = document.querySelector('output');

		this.addEventListeners();
	}

	addExercise(number, skills) {
		//initialize the variable to be added
		const exercise = {
			number: number,
			skills: skills || [],
			complete: false,
		};

		this.exercises = [...this.exercises, exercise];
		//does the same thing as the push method
		console.log(`Added exercise #${number} to ${this.title}`);
		this.renderExercises(this.exercises);
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
			this.renderExercises(this.exercises);
			console.log(`Exercise #${number} was taken out of the book.`);
	}

	completeExercise(number) {
		for (let i = 0; i < this.exercises.length; i++) {
			if ( this.exercises[i].number == number ) {
				this.exercises[i].complete = true;
				console.log(`Exercise #${this.exercises[i].number} is marked complete.`)
			}
		}
		this.renderExercises(this.exercises);
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
		var skills = exercise.skills;

			return `
				<li data-id="${exercise.number}">
					<exercise-card class=${exercise.complete ? "complete" : ""}>
						<h2>Exercise #${exercise.number}</h2>
						<actions>
							<button>Add skill</button>
							<button>Remove exercise</button>
							<button rel="toggle">Mark complete</button>
						</actions>
					</exercise-card>
				</li>
			`;
	}

	

	// renderSkills(skills) {
	// 	skills.forEach( function (skill) {
	// 		return `<li>${skill}</li>`;
	// 		console.log("test");
	// 	});
	// }



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
			console.log(`Added ${skill} to exercise #${number}.`);
		}
	}

	addEventListeners() {

		this.$form.addEventListener('submit', (event) => {
			event.preventDefault();
			this.addExercise( this.$input.value );
			this.$input.value = "";
			console.log('exercises: ', this.exercises);
		});

		this.$output.addEventListener('click', (event) => {

			if(event.target.textContent == 'Remove exercise') {
				const id = event.target.closest('li').dataset.id;
				this.removeExercise(id);
			}

			if(event.target.textContent == 'Mark complete') {
				const id = event.target.closest('li').dataset.id;
				this.completeExercise(id);
			}

		});
	}
}

const popperHighSchool = new CelloExerciseBook("David Popper", "High School of Cello Playing");

// popperHighSchool.addExercise(1, ["spiccato", "triplets"]);





popperHighSchool.addExercise(1, ["triplets", "spiccato"]);
popperHighSchool.addExercise(2, ["slurs", "large shifts"]);
popperHighSchool.addExercise(3, ["intonation", "chromatic runs"]);

// popperHighSchool.removeExercise(1); //works
// popperHighSchool.completeExercise(2); //works


// popperHighSchool.showSkills(2); //works

popperHighSchool.addExercise(10);
popperHighSchool.addSkill(10, "key changes");
popperHighSchool.addSkill(2, "chromatic runs"); //works
popperHighSchool.addSkill(2, "chromatic runs"); //works