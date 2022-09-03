function basicMessage() {
	var name = prompt("What is your name?");
	if(name) {
		var message = "Hello, " + name + "!";
		alert(message);
	} else {
		alert("You didn't enter your name, hoss.");
		return;
	}
}

var startButton = document.createElement('button');

startButton.addEventListener('click', basicMessage);

document.body.appendChild(startButton);
document.body.style.backgroundColor = "black";
document.body.style.color = "white";


startButton.style.padding = '30px';
startButton.textContent = 'Saying Hello';