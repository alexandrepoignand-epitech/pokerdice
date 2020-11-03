let turnsLeft;
let rollButton;
let informationSpan;
let turnsLeftSpan;
let die1Image;
let die3Image;
let die2Image;
let die4Image;
let die5Image;
let check1Input;
let check2Input;
let check3Input;
let check4Input;
let check5Input;
let scoreSpan;
let combinaisons

function initGame() {
    rollButton = document.getElementById("rollButton");
    informationSpan = document.getElementById("information");
    turnsLeftSpan = document.getElementById("turnsLeft");
    die1Image = document.getElementById("die1");
    die2Image = document.getElementById("die2");
    die3Image = document.getElementById("die3");
    die4Image = document.getElementById("die4");
    die5Image = document.getElementById("die5");
    check1Input = document.getElementById('die1Check');
    check2Input = document.getElementById('die2Check');
    check3Input = document.getElementById('die3Check');
    check4Input = document.getElementById('die4Check');
    check5Input = document.getElementById('die5Check');
    scoreSpan = document.getElementById('score');
    combinaisons = document.getElementById('combinaisons')
    startNewGame();
}

function rollDice() {
    for (let dieNumber = 1; dieNumber <= 5; dieNumber++) {
        const currentDieIsChecked = eval('die' + dieNumber + 'Check');
        if (!currentDieIsChecked.checked) {
            eval("die" + dieNumber + "Image").src = "assets/" + rollDie() + ".jpg";
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
    const finalScore = calculateScore(die1Image.src.substr(75, 1), die2Image.src.substr(75, 1), die3Image.src.substr(75, 1), die4Image.src.substr(75, 1), die5Image.src.substr(75, 1));
    scoreSpan.innerHTML = finalScore;
    console.log(finalScore);
}

function calculateScore(die1, die2, die3, die4, die5) {
    const finalResult = die1 + die2 + die3 + die4 + die5;
    let numberOf1 = countOccurence(finalResult, 1)
    let numberOf2 = countOccurence(finalResult, 2)
    let numberOf3 = countOccurence(finalResult, 3)
    let numberOf4 = countOccurence(finalResult, 4)
    let numberOf5 = countOccurence(finalResult, 5)
    let numberOf6 = countOccurence(finalResult, 6)
    console.log(finalResult)
    if (((numberOf1 == "2") && (numberOf2 == "2" ^ numberOf3 == "2" ^ numberOf4 == "2" ^ numberOf5 == "2" ^ numberOf6 == "2")) || ((numberOf2 == "2") && (numberOf1 == "2" ^ numberOf3 == "2" ^ numberOf4 == "2" ^ numberOf5 == "2" ^ numberOf6 == "2")) || ((numberOf3 == "2") && (numberOf1 == "2" ^ numberOf2 == "2" ^ numberOf4 == "2" ^ numberOf5 == "2" ^ numberOf6 == "2")) || ((numberOf4 == "2") && (numberOf1 == "2" ^ numberOf2 == "2" ^ numberOf3 == "2" ^ numberOf5 == "2" ^ numberOf6 == "2")) || ((numberOf5 == "2") && (numberOf1 == "2" ^ numberOf2 == "2" ^ numberOf3 == "2" ^ numberOf4 == "2" ^ numberOf6 == "2")) || ((numberOf6 == "2") && (numberOf1 == "2" ^ numberOf2 == "2" ^ numberOf3 == "2" ^ numberOf4 == "2" ^ numberOf5 == "2"))) {
        combinaisons.innerHTML = "double paire";
        finalScore = 20 + parseInt(die1) + parseInt(die2) + parseInt(die3) + parseInt(die4) + parseInt(die5);
    } else if (numberOf1 == "2" ^ numberOf2 == "2" ^ numberOf3 == "2" ^ numberOf4 == "2" ^ numberOf5 == "2" ^ numberOf6 == "2") {
        combinaisons.innerHTML = "paire";
        finalScore = 10 + parseInt(die1) + parseInt(die2) + parseInt(die3) + parseInt(die4) + parseInt(die5);
    }

    if ((numberOf1 >= "1" && numberOf2 >= "1" && numberOf3 >= "1" && numberOf4 >= "1") || (numberOf2 >= "1" && numberOf3 >= "1" && numberOf4 >= "1" && numberOf5 >= "1") || (numberOf3 >= "1" && numberOf4 >= "1" && numberOf5 >= "1" && numberOf6 >= "1")) {
        combinaisons.innerHTML = "little flush :)";
        finalScore = 30 + parseInt(die1) + parseInt(die2) + parseInt(die3) + parseInt(die4) + parseInt(die5);
    }

    if (numberOf1 == "3" ^ numberOf2 == "3" ^ numberOf3 == "3" ^ numberOf4 == "3" ^ numberOf5 == "3" ^ numberOf6 == "3") {
        combinaisons.innerHTML = "Three of a kind";
        finalScore = 40 + parseInt(die1) + parseInt(die2) + parseInt(die3) + parseInt(die4) + parseInt(die5);
    }

    if ((numberOf1 == "1" && numberOf2 == "1" && numberOf3 == "1" && numberOf4 == "1" && numberOf5 == "1" || numberOf2 == "1" && numberOf3 == "1" && numberOf4 == "1" && numberOf5 == "1" && numberOf6 == "1")) {
        combinaisons.innerHTML = "flush";
        finalScore = 50 + parseInt(die1) + parseInt(die2) + parseInt(die3) + parseInt(die4) + parseInt(die5);
    }

    if ((numberOf1 == "2" || numberOf2 == "2" || numberOf3 == "2" || numberOf4 == "2" || numberOf5 == "2" || numberOf6 == "2") && (numberOf1 == "3" || numberOf2 == "3" || numberOf3 == "3" || numberOf4 == "3" || numberOf5 == "3" || numberOf6 == "3")) {
        combinaisons.innerHTML = "full house";
        finalScore = 60 + parseInt(die1) + parseInt(die2) + parseInt(die3) + parseInt(die4) + parseInt(die5);
    }

    if (numberOf1 == "4" ^ numberOf2 == "4" ^ numberOf3 == "4" ^ numberOf4 == "4" ^ numberOf5 == "4" ^ numberOf6 == "4") {
        combinaisons.innerHTML = "Four of a kind";
        finalScore = 70 + parseInt(die1) + parseInt(die2) + parseInt(die3) + parseInt(die4) + parseInt(die5);
    }

    if (numberOf1 == "5" ^ numberOf2 == "5" ^ numberOf3 == "5" ^ numberOf4 == "5" ^ numberOf5 == "5" ^ numberOf6 == "5") {
        combinaisons.innerHTML = "Poker";
        finalScore = 90 + parseInt(die1) + parseInt(die2) + parseInt(die3) + parseInt(die4) + parseInt(die5);

    }
    return finalScore;
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
    return count;
}
