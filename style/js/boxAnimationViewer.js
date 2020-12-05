$(function () {

    showAboveBoxOnHover();

});



function showAboveBoxOnHover() {
    $(".singleBoxContainer").hover(function () {

        let boxToBeAnimated = $(this);
        let aboveSingleBox = boxToBeAnimated.children('.aboveSingleBox');
        let aboveSingleBoxText = aboveSingleBox.children('.aboveSingleBoxText');

        aboveSingleBox.fadeIn(500);
        aboveSingleBox.css('display', 'block');

        aboveSingleBoxText.fadeIn(500);
        aboveSingleBoxText.css('display', 'block');
        aboveSingleBoxText.css('transform', 'rotateY(0deg) skewY(0deg)');

        $(this).mouseleave(function () {
            aboveSingleBoxText.css('transform', 'rotateY(-25deg) skewY(8deg)');
            aboveSingleBox.fadeOut(500);
        });
    });
} 








