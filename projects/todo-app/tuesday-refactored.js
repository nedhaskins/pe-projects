document.body.style.backgroundColor = "black";
document.body.style.color = "white";


const exerciseApp = {

	exercises: [],

	leftHandExercises: [],
	bowArmExercises: [],

	exerciseIdMaker: 0,

	print: function(note = "") {
		console.log(`------ ${note}`);
		console.log('exercises: ', this.exercises)

		//"this" allows you to get properties related to the
		// parent object
	},

	addExercise: function(content, type) {

	//define the structure of the base object
		const exercise = {
			id: `exerc${this.exerciseIdMaker++}`,
			content: content,
			type: type
		};

		this.exercises = [...this.exercises, exercise];
		//does the same thing as the push method
		this.print(`Added ${content}`);

	},

	updateExercise: function(id, newValue) {

		oldValue = this.exercises[id].content;
		this.exercises[id].content = newValue;

		this.print(`Updated ${oldValue} to ${newValue}`);
	},

	removeExercise: function(id) {

		print(`Removed ${this.exercises[id].content}`);
		this.exercises.splice(id, 1);
	},

	markComplete: function(id) {
		this.exercises[id].markComplete = true;
		this.print(`Completed ${this.exercises[id].content}`);
	},



	//for this function:
	//a new array is created for the filters -- similar to earlier PHP ideas
	//the length of the exercises array is set
	//for every value in the array; if the type is what the user specified
	//push it to the new array

	filterExercise: function (value) {
		const newArray = [];
		for (let i = 0; i < this.exercises.length; i++) {
			//i references the item's index
			if(this.exercises[i].type == value) {
				newArray.push(this.exercises[i]);
			}
		}
		return newArray;
	}



};

console.log( exerciseApp.print("A test, baby") );
exerciseApp.addExercise("Up-bow spiccato", "bow arm");
exerciseApp.addExercise("String crossings", "bow arm");
exerciseApp.addExercise("Slurs", "bow arm");
exerciseApp.addExercise("Shifting", "left hand");
exerciseApp.addExercise("Intonation", "left hand");
exerciseApp.addExercise("Double stops", "left hand");

exerciseApp.markComplete(0);

exerciseApp.leftHandExercises = exerciseApp.filterExercise("left hand");
console.log(exerciseApp.leftHandExercises);

//this is also used with "print" in this situation to clearly scope it to the function / application.
//It might be possible that otherwise it might be grabbed by some external source
//and might try to physically print something.