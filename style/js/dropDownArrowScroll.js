$(function () {
    //this function will work only one time even with another parameteres, always for the first call
        arrowScrollDown($('.typerContainer'));
});



function arrowScrollDown(positionToScrollTo) {
    var dropDownArrow = $('.dropdownArrow');

    dropDownArrow.click(function () {
        $("body").animate({
            scrollTop: positionToScrollTo.offset().top - 100}, 'slow');
    });
};






