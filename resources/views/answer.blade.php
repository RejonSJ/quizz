<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ mix('css/fontawesome.min.css') }}">
    <title>Document</title>
</head>
<body>
    
    <div class="container d-flex flex-column h-100">
        <div class="card w-100 mb-2">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="mb-0">Tiempo restante:</h5>
                    </div>
                    <div class="col-auto d-flex">
                        <h5 id="chronometer">15</h5>
                        <h5><i class="fa-solid fa-stopwatch"></i></h5>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row d-flex align-items-stretch align-content-center h-100 custom-mb">
            <div class="col-12 col-lg-6 text-center d-flex mb-1">
                <div class="card flex-fill flex-row justify-content-center align-items-center">
                    <h5 class="card-body mb-0" id="questionCard">

                    </h5>
                </div>
            </div>
            <div class="col-12 col-lg-6 d-flex">
                <div class="row" id="answers">
                    <div class="col-12 flex-fill mb-1 mt-1">
                        <div class="card answer-card" id="answerCardParent1">
                            <div class="card-body" id="answerCard1" onclick="sendAnswer(1)">

                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-1 mt-1">
                        <div class="card answer-card" id="answerCardParent2">
                            <div class="card-body" id="answerCard2" onclick="sendAnswer(2)">

                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-1 mt-1">
                        <div class="card answer-card" id="answerCardParent3">
                            <div class="card-body" id="answerCard3" onclick="sendAnswer(3)">

                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-1 mt-1">
                        <div class="card answer-card" id="answerCardParent4">
                            <div class="card-body" id="answerCard4" onclick="sendAnswer(4)">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form method="get" action="{{route('results')}}" id="hiddenForm">
            @method('GET')
            @csrf
            <input type="hidden" name="result" id="hiddenResults">
        </form>
    </div>
    {{-- @foreach ($selectedQuestions as $selectedQuestion)
        <p>{{$selectedQuestion}}</p>
    @endforeach --}}
</body>
</html>
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ mix('js/vendor.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script>
$(document).ready(function() {
    storedQuestions = "{{json_encode($questions)}}";
    storedQuestions = storedQuestions.split('&quot;');
    storedQuestions = storedQuestions.join('"');
    storedQuestions = JSON.parse(storedQuestions);

    currentQuestion = 0;
    aciertos = 0;

    changeQuestion(storedQuestions[currentQuestion]);
});
function changeQuestion(data) {
    $('#answerCardParent1').removeClass('correct');
    $('#answerCardParent2').removeClass('wrong');
    $('#answerCardParent3').removeClass('wrong');
    $('#answerCardParent4').removeClass('wrong');
    $('#answerCardParent2').removeClass('inactive');
    $('#answerCardParent3').removeClass('inactive');
    $('#answerCardParent4').removeClass('inactive');
    $('#answerCardParent1').addClass('active');
    $('#answerCardParent2').addClass('active');
    $('#answerCardParent3').addClass('active');
    $('#answerCardParent4').addClass('active');
    document.getElementById('questionCard').textContent = data.question;
    document.getElementById('answerCard1').textContent = data.rightAnswer;
    document.getElementById('answerCard2').textContent = data.wrongAnswer1;
    document.getElementById('answerCard3').textContent = data.wrongAnswer2;
    document.getElementById('answerCard4').textContent = data.wrongAnswer3;
    var ul = document.getElementById('answers');
    for (var i = answers.children.length; i >= 0; i--) {
        answers.appendChild(answers.children[Math.random() * i | 0]);
    }
    startChronometer();
}
function sendAnswer(card) {
    resetChronometer();
    $('#answerCardParent1').removeClass('active');
    $('#answerCardParent2').removeClass('active');
    $('#answerCardParent3').removeClass('active');
    $('#answerCardParent4').removeClass('active');
    if(card==1){
        $('#answerCardParent1').addClass('correct');
        aciertos++;
    } else {
        $('#answerCardParent1').addClass('correct');
        switch (card) {
            case 2:
                $('#answerCardParent2').addClass('wrong');
                break;
            case 3:
                $('#answerCardParent3').addClass('wrong');
                break;
            case 4:
                $('#answerCardParent4').addClass('wrong');
                break;
        }
    }
    nextQuestion();
}
function nextQuestion(){
    currentQuestion++;
    if(currentQuestion>9){
        $('#hiddenResults').val(aciertos).change();
        $('#hiddenForm').submit();
        console.log(aciertos)
    } else {
        setTimeout(function(){changeQuestion(storedQuestions[currentQuestion])}, 1000);
    }
}
function timeOut() {
    endChronometer();
    $('#answerCardParent1').addClass('correct');
    $('#answerCardParent2').addClass('inactive');
    $('#answerCardParent3').addClass('inactive');
    $('#answerCardParent4').addClass('inactive');
    $('#answerCardParent1').removeClass('active');
    $('#answerCardParent2').removeClass('active');
    $('#answerCardParent3').removeClass('active');
    $('#answerCardParent4').removeClass('active');
    setTimeout(function(){nextQuestion()}, 1000);
}
let startTime, elapsedTime = 0, timerInterval;
function startChronometer() {
    if (!timerInterval) {
        startTime = new Date().getTime() - elapsedTime;
        timerInterval = setInterval(updateTime, 10); // Update time every 10ms
    }
}
function updateTime() {
    const currentTime = new Date().getTime();
    elapsedTime = currentTime - startTime;

    let seconds = Math.floor((elapsedTime % (1000 * 60)) / 1000);

    seconds = padZero(seconds);

    newtime = 15-seconds;

    if(newtime>0){
        document.getElementById('chronometer').textContent = newtime;
    } else {
        document.getElementById('chronometer').textContent = '0';
        timeOut();
    }

}
function resetChronometer() {
    clearInterval(timerInterval);
    timerInterval = null;
    elapsedTime = 0;
    document.getElementById('chronometer').textContent = '15';
}
function endChronometer() {
    clearInterval(timerInterval);
    timerInterval = null;
    elapsedTime = 0;
    document.getElementById('chronometer').textContent = '0';
}
function padZero(num) {
    return (num < 10 ? '0' : '') + num;
}
</script>