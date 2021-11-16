
function check(){

	var question1 = document.quiz.question1.value;
	var question2 = document.quiz.question2.value;
	var question3 = document.quiz.question3.value;
	var correct = 0;


	if (question1 == "santander") {
		correct++;
}
	if (question2 == "catedral de sal") {
		correct++;
}	
	if (question3 == "piedra del peñol") {
		correct++;
	}
	
	var pictures = ["img/win.gif", "img/meh.gif", "img/lose.gif"];
	var messages = ["Great job!", "That's just okay", "You really need to do better"];
	var score;

	if (correct == 0) {
		score = 2;
	}

	if (correct > 0 && correct < 3) {
		score = 1;
	}

	if (correct == 3) {
		score = 0;
	}

	document.getElementById("after_submit").style.visibility = "visible";

	document.getElementById("message").innerHTML = messages[score];
	document.getElementById("number_correct").innerHTML = "Tienes " + correct + " correctas.";
	document.getElementById("picture").src = pictures[score];
	}