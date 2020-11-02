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

function initGame() {
    rollButton = document.getElementById("rollButton");
    informationSpan = document.getElementById("information");
    turnsLeftSpan = document.getElementById("turnsLeft");
    die1Span = document.getElementById("die1");
    die2Span = document.getElementById("die2");
    die3Span = document.getElementById("die3");
    die4Span = document.getElementById("die4");
    die5Span = document.getElementById("die5");
    check1Input = document.getElementById('die1Check');
    check2Input = document.getElementById('die2Check');
    check3Input = document.getElementById('die3Check');
    check4Input = document.getElementById('die4Check');
    check5Input = document.getElementById('die5Check');
    scoreSpan = document.getElementById('score');
    startNewGame();
}

function rollDice() {
    for (let dieNumber = 1; dieNumber <= 5; dieNumber++) {
        const currentDieIsChecked = eval('die' + dieNumber + 'Check');
        if (!currentDieIsChecked.checked) {
            eval("die" + dieNumber + "Span").innerHTML = rollDie();
        }
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
    document.getElementById('scoreShower').style.visibility = "hidden";
    rollDice();
}

function rollDie() {
    return Math.floor(Math.random() * Math.floor(6) + 1);
}

function endGame() {
    rollButton.disabled = true;
    turnsLeft = 0;
    document.getElementById('scoreShower').style.visibility = "visible";
    turnsLeftSpan.innerHTML = turnsLeft;
    informationSpan.style.visibility = "visible";
    document.getElementById('scoreShower').style.visibility = "visible";
    const finalScore = calculateScore(die1Span.innerHTML, die2Span.innerHTML, die3Span.innerHTML, die4Span.innerHTML, die5Span.innerHTML);
    scoreSpan.innerHTML = finalScore;
}

function calculateScore(die1, die2, die3, die4, die5) {
    console.log(die1 + die3)
    const finalResult = die1 + die2 + die3 + die4 + die5;
    let numberOf1 = countOccurence(finalResult, 1)
    console.log("il y a "+numberOf1+" 1")
    let numberOf2 = countOccurence(finalResult, 2)
    console.log("il y a "+numberOf2+" 2")
    let numberOf3 = countOccurence(finalResult, 3)
    console.log("il y a "+numberOf3+" 3")
    let numberOf4 = countOccurence(finalResult, 4)
    console.log("il y a "+numberOf4+" 4")
    let numberOf5 = countOccurence(finalResult, 5)
    console.log("il y a "+numberOf5+" 5")
    let numberOf6 = countOccurence(finalResult, 6)
    console.log("il y a "+numberOf6+" 6")
    
    console.log(finalResult)
   // return parseInt(die1) + parseInt(die2) + parseInt(die3) + parseInt(die4) + parseInt(die5);
}

function countOccurence(finalResult, nombre) {
    let count = 0;

    // looping through the items
    for (let i = 0; i < finalResult.length; i++) {

        // check if the character is at that position
        if (finalResult.charAt(i) == nombre) {
            count += 1;
        }
    }
    console.log(count);
}
