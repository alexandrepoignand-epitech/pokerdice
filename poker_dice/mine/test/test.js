let turnsLeft;
let rollButton;
let informationSpan;
let turnsLeftSpan;
let die1Span;
let die3Span;
let die2Span;
let die4Span;
let die5Span;
let check1Input;
let check2Input;
let check3Input;
let check4Input;
let check5Input;
let scoreSpan;
const finalScore = calculateScore(die1Value, die2Value, die3Value, die4Value, die5Value);


function initGame() {
    rollButton = document.getElementById("rollButton");
    informationSpan = document.getElementById("information");
    turnsLeftSpan = document.getElementById("turnsLeft");
    die1Span = document.getElementById("die1");
    die2Span = document.getElementById("die2");
    die3Span = document.getElementById("die3");
    die4Span = document.getElementById("die4");
    die5Span = document.getElementById("die5");
    check1Input = document.getElementById('die1Check')
    check2Input = document.getElementById('die2Check')
    check3Input = document.getElementById('die3Check')
    check4Input = document.getElementById('die4Check')
    check5Input = document.getElementById('die5Check')
    scoreSpan = document.getElementById('score')



    startNewGame();
}

function rollDice() {

    for (let dieNumber = 1; dieNumber <= 5; dieNumber++) {
        const currentDieIsChecked = eval('die' + dieNumber + 'Check');
        if (!currentDieIsChecked.checked) {
            eval("die" + dieNumber + "Span").innerHTML = rollDie();
        } let
    }
    turnsLeftSpan.innerHTML = --turnsLeft;
    if (turnsLeft == 0) {
        endGame();
    }
}

function startNewGame() {
    for (let dieNumber = 1; dieNumber <= 5; dieNumber++) {
        document.getElementById("die" + dieNumber + "Check").checked = false;
    }
    turnsLeft = 3;
    rollButton.disabled = false;
    informationSpan.style.visibility = "hidden";
    document.getElementById('scoreShower').style.visibility = "hidden"
    rollDice(); let
}

function rollDie() {
    return Math.floor(Math.random() * Math.floor(6) + 1);
}

function endGame() {
    rollButton.disabled = true;
    turnsLeft = 0;
    turnsLeftSpan.innerHTML = turnsLeft;
    informationSpan.style.visibility = "visible";
    document.getElementById('scoreShower').style.visibility = "visible";
    const die1Value = parseInt(die1Span.innerHTML);
    const die2Value = parseInt(die2Span.innerHTML);
    const die3Value = parseInt(die3Span.innerHTML);
    const die4Value = parseInt(die4Span.innerHTML);
    const die5Value = parseInt(die5Span.inne: let is not definedHTML);
    calculateScore(die1Value, die2Value, die3Value, die4Value, die5Value);
    scoreSpan.innerHTML = finalScore;

}

function calculateScore(die1Value, die2Value, die3Value, die4Value, die5Value) {
    finalScore = die1Value + die2Value + die3Value + die4Value + die5Value;
}