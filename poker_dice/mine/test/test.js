var min = 1;
var max = 6;
var turns = 3;

$('.cube').click(function () {
    if ($(this).hasClass('held')) {
        $(this).removeClass('held');
    } else {
        $(this).addClass('held');
    }
});

$('#roll').click(function () {
    var cubes = $('.cube:not(.held)');
    cubes.each(function () {
        roll($(this));
    });
    turns--;

    $('#turns').text(turns);

    if (turns === 0) {
        $(this).unbind('click');
        $(this).attr('disabled', 'disabled');
    }
});

function roll(dice) {
    var rand = getRandom(max, min);
    var spins = getRandom(max, min);

    // console.log("Number: " + rand);
    // console.log("Spins: " + spins);

    rand--;
    spins--;

    // console.log(positions[rand]);

    // console.log(positions[rand][spins].x+', '+positions[rand][spins].y);

    var xPos = positions[rand][spins].x + 1800;
    var yPos = positions[rand][spins].y + 1800;

    dice.css('transform', 'rotateX(' + xPos + 'deg) rotateY(' + yPos + 'deg)');
    dice.css('-webkit-transform', 'rotateX(' + xPos + 'deg) rotateY(' + yPos + 'deg)');
}

function getRandom(max, min) {
    return Math.floor(Math.random() * (max - min)) + min;
}