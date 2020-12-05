<?php
ob_start();
?>


    <title> Quantumz | Contact</title>


<link rel="stylesheet" type="text/css" href="/quantumz/style/css/contactUs.css">


<!-- CONTACT US FORM AND IMAGE  ==========================================================================-->
<div class="introWrapper">
    <div class="contactUsFormContainer">
        <div>
            <div class="contactUsFormPhrase1">Quantumz contribue à votre projet !</div>
            <img class="contactUsFormImage" alt="Your project done" src="/quantumz/images/illustration/yourProjectDone.svg">
        </div>



        <form method="post" class="contactUsForm" id="contactUsForm" action="/quantumz/control/controlContactedByForm.php">
            <div>
                <input class="contactUsFormInput contactUsFormInputHalfsize" type="text" id="contactUsFormLastName" name="lastName" placeholder="Nom*" required="true">
                <input class="contactUsFormInput contactUsFormInputHalfsize" type="text" id="contactUsFormFirstName" name="firstName" placeholder="Prénom*" required="true">
            </div>

            <div>
                <input class="contactUsFormInput contactUsFormInputFullsize" type="text" id="contactUsFormEmail" name="email" placeholder="Email*" required="true">
            </div>

            <div>
                <input class="contactUsFormInput contactUsFormInputFullsize" type="text" id="contactUsFormPhoneNumber" name="phoneNumber" placeholder="Téléphone*" required="true">
            </div>

            <div>
                <input class="contactUsFormInput contactUsFormInputFullsize" type="text" id="contactUsFormCompanyName" name="companyName" placeholder="Nom Entreprise">
            </div>

            <div>
                <input class="contactUsFormInput contactUsFormInputFullsize" type="text" id="contactUsFormSubject" name="subject" placeholder="Sujet *" required="true">
            </div>

            <div>
                <textarea class="contactUsFormInput contactUsFormInputFullsize" id="contactUsFormContactingReason" name="message" placeholder="Comment Quantumz peut m'accompagner ? *" rows="5" cols="10" required="true"></textarea>
            </div>  

            <div>
                <input class="contactUsFormSubmitButton" type="submit" id="contactUsFormSubmit" value="Me contacter" name="contactUsFormSubmit">
            </div>
        </form>
    </div>
</div>





<!-- CONTACT US DIRECTLY  ==========================================================================-->


<div class="contactMeDirectlyWrapper">
    <div class="contactMeDirectlyContainer">
        <div>
            Vous pouvez aussi nous joindre directement !
        </div>

        <div class="contactMeDirectlyBox">
            <img class="contactMeDirectlyIcon" alt="phone icon" src="/quantumz/images/icon/connectIcon/phoneIcon.svg">
            <span>+33 6 01 07 63 90</span>
        </div>

        <div class="contactMeDirectlyBox">
            <img class="contactMeDirectlyIcon" alt="phone icon" src="/quantumz/images/icon/connectIcon/emailIcon.svg">
            <span>adresseMail@adresseMail.com</span>
        </div>
    </div>
</div>


<div class="whiteSpaceDivisor100"></div>

<!--<script src="/quantumz/vendor/myNotificationHandler/notificationGenerator.js"></script>
<script src="/quantumz/vendor/myNotificationHandler/formControl.js"></script>-->
<?php
$content = ob_get_contents();
ob_end_clean();
require(__DIR__ . "/includes/template.php");
