<?php
ob_start();
?>

    <title> Quantumz | Acceuil</title>

    <script src="/quantumz-demo.github.io/style/js/typerExe.js"></script>
    <script src="/quantumz-demo.github.io/style/js/boxAnimationViewer.js"></script>
    <script src="/quantumz-demo.github.io/style/js/dropDownArrowScroll.js"></script>


    <link rel="stylesheet" type="text/css" href="style/css/homePage.css">

    <!-- ITNRO OVERLAY  ==========================================================================-->
    <div class="introContainerWrapper">
        <div class="introContainer">
            <div class="introContainerBackground"></div>
            <div class="introPhraseContainer">
                <div class="introPhrase">
                    Une <span class="highlightedBackgroundType1">passion</span> au service de votre produit.
                </div>

                <button class="introContactButton">Nous sommes prêts !</button>
            </div>

            <img alt="dropdownArrow" class="dropdownArrow dropdownArrowAnimated dropdownArrowBounce"
                 src="images/illustration/DropdownArrow.svg" alt="drop_down_arrow">
        </div>
    </div>

    <div class="afterIntrosContainer">
        <!-- JS TYPER ==========================================================================-->
        <div class="whiteSpaceDivisor100"></div>


        <div class="typerContainer">
            <div id="typerTitleBar">
                <span id="typerTitle">QuantumZ.exe </span>
            </div>
            <div class="typer">
                <span id="wordToComplete">Nous >_</span>
                <span id="typerCompleting"></span>
                <span id="typerTypingCurosr">|</span>
            </div>
        </div>


        <!-- IDEA BANNER ==========================================================================-->
        <div class="whiteSpaceDivisor100"></div>


        <div class="ideaBannerContainer">
            <img class="ideaBannerImage" alt="" src="/quantumz-demo.github.io/images/illustration/bg2.svg">

            <div>
                <div class="ideaBannerTextContainer">
                    <div class="ideaBannerTextLine">Une <span class="highlightedBackgroundType1">Idée</span> ?</div>
                    <div class="ideaBannerTextLine">Un <span class="highlightedBackgroundType1">projet</span> en tête ?
                    </div>
                    <div class="ideaBannerTextLine">Ou simplement développer un produit existant ?</div>
                </div>
                <a href="/quantumz-demo.github.io/contactUs.php">
                    <div class="ideaBannerButton">
                        Quantumz vous accompagne !
                    </div>
                </a>
            </div>
        </div>


        <!-- TRIPLE BANNER ==========================================================================-->

        <div class="tripleBoxContainer">


            <div class="singleBoxContainer">
                <div class="aboveSingleBox">
                    <div class="aboveSingleBoxText">
                        et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur
                    </div>
                </div>

                <div class="singleBoxTitle">Notre Passion ?</div>
                <img class="singleBoxImage" alt="our passion" src="/quantumz-demo.github.io/images/illustration/ourPassionBanner.svg">
            </div>


            <div class="singleBoxContainer">
                <div class="aboveSingleBox">
                    <div class="aboveSingleBoxText">
                        et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur
                    </div>
                </div>
                <div class="singleBoxTitle">Idées Créatives</div>
                <img class="singleBoxImage" alt="creative ideas"
                     src="/quantumz-demo.github.io/images/illustration/creativeIdeasBanner.svg">
            </div>


            <div class="singleBoxContainer">
                <div class="aboveSingleBox">
                    <div class="aboveSingleBoxText">
                        et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariSSatur. Excepteur
                    </div>
                </div>
                <div class="singleBoxTitle">Solutions Stratégiques</div>
                <img class="singleBoxImage" alt="strategic solutions"
                     src="/quantumz-demo.github.io/images/illustration/strategicSolutionsBanner.svg">
            </div>
        </div>


        <!-- OUTRO  ==========================================================================-->


        <div class="outroContainer">
            <img alt="contactUsOutroImage" src="/quantumz-demo.github.io/images/illustration/contactUs.svg">
            <div class="contactUsOutroImageText">N'y allez Pas tout seul, Quantumz est là !</div>
            <a href="/quantumz-demo.github.io/contactUs.php">
                <button class="outroContactButton">Contactez-nous</button>
            </a>
        </div>


        <div class="whiteSpaceDivisor100"></div>
    </div>

<?php

$content = ob_get_contents();
ob_end_clean();
require(__DIR__ . "/includes/template.php");
