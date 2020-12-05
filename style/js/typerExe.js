$(function ()
{
    var text = ["créons des idées.",
        "sommes talentueux.",
        "sommes créatifs.",
        "proposons des solutions."
    ];

    var i = 0;

    var speed;
    var text_array_index = 0;
    var text_array_length = text.length;
    var tiny_slider_complete = document.getElementById('typerCompleting');


    function typewriter()
    {
        speed = 100;
        var text_length = text[text_array_index].length;


        if (i < text_length)
        {
            tiny_slider_complete.innerHTML += text[text_array_index].charAt(i);
            i++;
            setTimeout(typewriter, speed);
        }

        if (i === text_length - 1)
        {
            tiny_slider_complete.innerHTML.replace(tiny_slider_complete.innerHTML[0],'<span style="color: yellow;">'+tiny_slider_complete.innerHTML[0]+'</span>');
            setTimeout(function ()
            {
                tiny_slider_complete.innerHTML = "";
                if (text_array_index === text_array_length - 1)
                {
                    text_array_index = 0;
                } else
                {
                    text_array_index++;
                }
                i = 0;

                typewriter();
            }, 2000);
        }
    }
    typewriter();


    setInterval(function ()
    {
        $('#typerTypingCurosr').fadeIn(150).delay(250).fadeOut(150).delay(250);
    }, 0);
});


