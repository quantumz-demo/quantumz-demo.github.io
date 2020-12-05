

$(function() {
//calling the animation function
    nav_menu_icon_animation();

//calling the function
    showing_navbar_overlay();
});



//this function will show the overlay containing links to otherpages including particlesJS background
function showing_navbar_overlay (){
    var header_nav_menu_icon = $('#header_nav_menu_container');
    var header_overlay = $('.header_overlay');
    var links_container = $('.links_container');

    header_nav_menu_icon.on('click',function() {
        var header = $('#header');
        header_overlay.css('top',header.outerHeight(true));
        header_overlay.toggleClass('header_overlay_shown');
        links_container.toggleClass('links_container_show_me');
    });
}




function nav_menu_icon_animation() {
    $('#header_nav_menu_container').click(function(){
        $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').toggleClass('open');
    });
}




//the header will be viewed sticky on page
//function fixing_header(pageY, headerJS)
//{
//    var sticky_header = headerJS.offsetTop;
//
//    if (pageY > sticky_header)
//    {
//        headerJS.classList.add('sticky');
//    } else
//    {
//        headerJS.classList.remove('sticky');
//    }
//}


//nav bar header, triggered when clicking on the icon(FOR RESPONSIVE DESIGH)
function header_nav_bar_toggler()
{
    $(function ()
    {
        $(".header_page_links_container_mob_responsive").css('display', 'none');
        $(".header_menu_icon").click(function () {

            $(".header_page_links_container_mob_responsive").css('visibility', 'visible').animate({
                width: "toggle"
            });
        });
    });
}


header_nav_bar_toggler();



function responsive_header(WIDTH)
{

    if (WIDTH < 1050)
    {
    }

    if (WIDTH >= 1050)
    {
        $(function ()
        {
            // 000000000000000000 THIS FUNCTION SHOULD UNCOMMENTED WHEN THE FUNCTION IS UNCOMMENTED 000000000000000000000000000
            //header_computer_responsive();

        });
    }
}







//window.addEventListener("resize", function (e)
//{
//    WINDOW_CLIENT_WIDTH = window.innerWidth;
//    responsive_header(WINDOW_CLIENT_WIDTH);
//});

//responsive_header(WINDOW_CLIENT_WIDTH);

