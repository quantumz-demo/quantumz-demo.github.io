
<h2>
    C'est un site web vitrine uniquement pour vous montrer ce project, donc le formulaire de contact ne fonctionne pas car il n'est tous saimplemant pas connecté à une base de donnée, donc il ne stockera pas vos information, cependant, is vous souhaitez vraiment me contacter allez sur mon site web personnel :)
    <a href="https://ilovesemicolons.io/contact">iLoveSemicolons.io</a>
</h2>
<h2>
    Si vous avez aimez le design, sentez vous libre de l'utiliser sachant que je n'ai pas la propriété intellectuelle des illustrations utilisées dans le site
</h2>



<?php


require_once __DIR__ . '/../model/contactedByManager.php';

if ((filter_input(INPUT_POST, 'lastName') && !empty(filter_input(INPUT_POST, 'lastName'))) && (filter_input(INPUT_POST, 'firstName') && !empty(filter_input(INPUT_POST, 'firstName'))) && (filter_input(INPUT_POST, 'email') && !empty(filter_input(INPUT_POST, 'email'))) && (filter_input(INPUT_POST, 'subject') && !empty(filter_input(INPUT_POST, 'subject'))) && (filter_input(INPUT_POST, 'message') && !empty(filter_input(INPUT_POST, 'message')))) {
    $lastName = htmlspecialchars(filter_input(INPUT_POST, 'lastName'));
    $firstName = htmlspecialchars(filter_input(INPUT_POST, 'firstName'));
    $companyName = htmlspecialchars(filter_input(INPUT_POST, 'companyName'));
    $email = htmlspecialchars(filter_input(INPUT_POST, 'email'));
    $phoneNumber = htmlspecialchars(filter_input(INPUT_POST, 'phoneNumber'));
    $subject = htmlspecialchars(filter_input(INPUT_POST, 'subject'));
    $message = htmlspecialchars(filter_input(INPUT_POST, 'message'));

    $clientManager = new ContactedByManager();
    $clientManager->addNewClient($lastName, $firstName, $email, $phoneNumber, $companyName, $subject, $message);
} else {
    return false;
}
?>

