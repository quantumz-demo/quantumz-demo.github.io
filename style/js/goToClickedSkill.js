$(function () {
    $(".introSkill").click(function () {
        let clickedSkillClassName = getClickedSkillClassName(this);
        let targetSkillBox = getWhichSkillBox(clickedSkillClassName); //we only have text as a param
        scrollToSkill(targetSkillBox);
    });
});



//this function will extract the second class name of the clicked element
function getClickedSkillClassName(clickedSkill) {

    let listOfClass = clickedSkill.classList;
    let clickedSkillClassName = listOfClass[1];
    return clickedSkillClassName;
}


//this function will find and compare the returned class name of the 'getClickedSkillClassName'
//after finding it..it will get the parent of the parent and then trasform it from
//html to jqueyr element
function getWhichSkillBox(skillClassName) {
    
        let targetClass = $(".skillTextContainer").children("."+skillClassName);

        let targetObject = targetClass.parent().parent();
        let targetDiv = targetObject[0];
        let jqueryDiv = $(targetDiv);
        return jqueryDiv;
}

//this function will take a jqueyr element as a param and scroll the wanted skill box
function scrollToSkill(positionToScrollTo) {
    $("body").animate({scrollTop: positionToScrollTo.offset().top - 100}, 'slow');
}