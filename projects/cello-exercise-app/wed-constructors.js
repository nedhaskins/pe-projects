function CelloExerciseBook(author, title) {

	//var this = {};

	this.author = author; //"this" is for any copies of the app
	this.title = title;
	
	//Each copy of the app will have the following attributes:
	this.exercises = [],
	this.leftHandExercises =  [],
	this.bowArmExercises =  [],

	this.exerciseIdMaker = 1,

	this.describe =  function() {
		alert(`${this.title} is an exercise book written by ${this.author}.`);
	}


	// this.findItem





	this.addExercise = function(number, skills) {
		const exercise = {
			id: this.exerciseIdMaker++,
			skills: skills,
		};

		this.exercises = [...this.exercises, exercise];
		//does the same thing as the push method
		console.log(`Added exercise #${number} to ${this.title}`);
	}

	this.showExercise = function(searchId) {
		const found = this.exercises.find( function(exercise) {
			return (exercise.id == searchId);
		})
		if(found) {
			console.log(`This is exercise #${found.id} from ${this.title}`);
		} else {
			alert(`This exercise isn't in the book yet...`);
		}
	}

	this.showSkills = function(searchId) {
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

	this.addSkill = function(searchId, skill) {
		const found = this.exercises.find( function(exercise) {
			return (exercise.id == searchId);
		})
		if(found) {
			var skills = found.skills;
			skills.push(skill);
			console.log(`Added ${skill} to exercise#${searchId}.`);
		}
	}
}

const popperHighSchool = new CelloExerciseBook("David Popper", "High School of Cello Playing");

popperHighSchool.describe();
popperHighSchool.addExercise(1, ["spiccato", "triplets"]);
popperHighSchool.addExercise(2, ["slurs", "large shifts"]);
popperHighSchool.addExercise(3, ["intonation", "chromatic runs"]);

popperHighSchool.showExercise(2);

popperHighSchool.showSkills(3);

popperHighSchool.addSkill(1, "thumb position");

popperHighSchool.showSkills(1);

var data = [{"one": 1}, {"two": 2}, {"three": 3}];

//try this out later
for(value in data) {
		console.log(JSON.stringify(value));
}