let index = 0;
let attempt = 0;
let score = 0;
let wrong = 0;
let questions = quiz.sort(function (){
    return 0.5 - Math.random();
});


let totalquestion = questions.length;

$(function () {
    // timer code start from here

    let totaTime = 600; // 600 seconds for timer
    let min = 0;
    let sec = 0;
    let counter = 0;

    let timer = setInterval (function () {
        counter++;
        min = Math.floor((totaTime - counter) /60 ); // calculating min
        sec = totaTime - min * 60 - counter;


    $(".timerBox span").text(min + ":" + sec);


    if(counter == totaTime){
        alert("se acabo el tiempo, presione aceptar para mostrar el resultado.");
        result();
        clearInterval(timer);
    }
    

}, 1000); // timer set for 1 seconds interval

printQuestion(index);

// timer code end from here
   
//  print question

});

// function to print question start

  function printQuestion(i){
    $(".questionBox").text(questions[i].question);
    $(".optionBox span").eq(0).text(questions[i].option[0]);
    $(".optionBox span").eq(1).text(questions[i].option[1]);
    $(".optionBox span").eq(2).text(questions[i].option[2]);
    $(".optionBox span").eq(3).text(questions[i].option[3]);
}

// function to print question end



// function  to check answer start

function checkAnswer(option) {
    attempt++;

    let optionClicked = $(option).data("opt");

    // console.log(questions[index]);

    if(optionClicked == questions[index].answer){
        $(option).addClass("right");
        score++;
    }  else {
        $(option).addClass("wrong");
        wrong++;
    }

    $(".scoreBox span").text(score);


    $(".optionBox span").attr("onclick","");

// function to check answer end
}

// funtion for the next question

function shownext() {
    if(index >= (questions.lenght - 1 )) {
        showresult(0);
        return;
    }


    index++;

    $(".optionBox span").removeClass();
    $(".optionBox span").attr("onclick", "checkAnswer(this)");

    printQuestion(index);
}

// function for the end question


// function for result start

function showresult(j) {

    if(
        j == 1 &&
        index < questions.length - 1 &&
        !confirm(
            "la prueba aún no ha terminado. presione Aceptar omitir y obtener el resultado final."
            ) 
    ) {
        return;
    }

     result();

}

// function for result end

// result function star
function result() {
    $("#questionScreen").hide();
    $("#resultScreen").show();

    $("#totalquestion").text(totalquestion);
    $("#attemptquestion").text(attempt);
    $("#correctanswers").text(score);
    $("#wronganswers").text(wrong);  
}

