<?php
include (__DIR__ . "/header.php");
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="style/js/header.js"></script>

<link rel="stylesheet" type="text/css" href="style/css/main.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300" rel="stylesheet">         
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,500,600,700&display=swap" rel="stylesheet">


<!-------------------------------------FAVICON-------------------------------------------->
<link rel="apple-touch-icon" sizes="180x180" href="/quantumz/images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/quantumz/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/quantumz/images/favicons/favicon-16x16.png">
<link rel="manifest" href="/quantumz/images/favicons/site.webmanifest">
<link rel="mask-icon" href="/quantumz/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<!--------------------------------------------------------------------------------------->



<div class="mainContainer">
    <div class="mainContent">
        <?= $content ?>
    </div>    


        <?php
    include(__DIR__ . "/footer.php");
    ?>

<script src="/quantumz/vendor/validateOnTheFly/src/validateOnTheFly.js"></script>


</div>
