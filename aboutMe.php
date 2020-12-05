<?php
ob_start();
?>

    <title> Quantumz | A Propos</title>

    <link rel="stylesheet" type="text/css" href="style/css/aboutMe.css">


    <div class="aboutMeWrapper">

        <div class="aboutMePageTitleContainer">
            <div class="aboutMePageTitle">
                A Propos
            </div>
        </div>

        <div class="aboutMeContainer">
            <div class="personalPicContainer">
                <img alt="sirage al dbiyat" class="personalPic" src="/quantumz/images/pics/siragealdbiyat.jpg">
            </div>

            <div class="aboutMeContentContainer">
                <div class="aboutMeName">
                    Sirage AL DBIYAT
                </div>

                <div class="aboutMeProfession">
                    <div>Un développeur web full stack, passionné par la programmation, les projets open-source et la
                        contribution à la modernisation du web
                    </div>
                    <div>
                        Visiter mon site web pour plus :
                        <a href="https://ilovesemicolons.io">iLoveSemicolons.io</a>
                    </div>
                </div>

                <div class="aboutMeText">

                </div>
            </div>
        </div>
    </div>

<?php
$content = ob_get_contents();
ob_end_clean();
require(__DIR__ . "/includes/template.php");

