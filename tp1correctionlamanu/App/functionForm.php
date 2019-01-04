<?php
/**
 * Affiche les erreurs rencontrées
 * @param $key 
 * @return String
 */
function showError($key) {
    global $errors; //Récupère la variable $errors dans la portée globale
    return !empty($errors[$key]) ? '<div class="bg-danger bgError2">' . $errors[$key] . '</div>' : '';
}
if (!empty($_POST)) {
    // Création et récupération de mes différentes variables
    $gender = htmlspecialchars((string) $_POST['gender']);
    $firstName = htmlspecialchars((string) $_POST['firstname']); //
    $lastName = htmlspecialchars((string) $_POST['lastname']); //
    $birthday = htmlspecialchars((string) $_POST['birthday']);
    $country = htmlspecialchars((string) $_POST['country']);
    $nationality = htmlspecialchars((string) $_POST['nationality']);
    $adress = htmlspecialchars((string) $_POST['adress']); //
    $city = htmlspecialchars((string) $_POST['city']);
    $state = htmlspecialchars((string) $_POST['state']);
    $cp = htmlspecialchars((string) $_POST['cp']);
    $mail = htmlspecialchars((string) $_POST['mail']);
    $phone = htmlspecialchars((string) $_POST['phone']);
    $diplome = htmlspecialchars((string) $_POST['diplome']);
    $numberJob = htmlspecialchars($_POST['numberJob']);
    $numberBadge = htmlspecialchars($_POST['numberBadge']);
    $codecademy = htmlspecialchars((string) $_POST['codecademy']);
    $hero = htmlspecialchars((string) $_POST['hero']);
    $hack = htmlspecialchars((string) $_POST['hack']);
    $information = htmlspecialchars((string) $_POST['information']);
// Création de mes variables contenant mes Regex
    $firstNameRegex = '/^[\w\-]{3,30}$/';
    $lastNameRegex = '/^[\w\-]{3,30}$/';
    $countryRegex = '/^[\w\-]{3,60}$/';
    $nationalityRegex = '/^[\wç\s-,:]*/';
    $adressRegex = '/^[0-9]{0,5}\s[0-9a-zA-Z\'\-\s]*\s[0-9a-zA-Z\'\-\s]*/';
    $cityRegex = '/^[\w\-]{3,30}$/';
    $cpRegex = '\'([0-9]{5})\'s';
    $numberJobRegex = '/^[0-9]{7}[a-zA-Z]/';
    $stateRegex = '/^[\wç\s-,:]*/';
    $mailRegex = '/^[^\s@]+@[^\s@]+\.[^\s@]{2,3}$/';
    $phoneRegex = '/^[0-9][0-9\/]{0,13}[0-9][0-9\/]{3}/';
    $codecademyRegex = '#(https?://)([\w\d.&:\#@%/;$~_?\+\-=]*)#';
    $heroRegex = '/^[\w\D]*$/';
    $hackRegex = '/^[\w\D]*$/';
    $informationRegex = '/^[\w\D]*$/';
// Vérification du genre
    if ($gender === '0') {
        $errors['gender'] = "Veuillez choisir un genre";
    }
// Vérification du firstName
    if (empty($firstName)) {
        $errors['firstname'] = "Le nom ne peut être vide";
    }
    if (!preg_match($firstNameRegex, $firstName)) {
        $errors['firstname'] = "Le nom ne doit contenir que des lettres et des chiffres et être entre 3 et 30 caractères";
    }
// Vérification du lastName
    if (empty($lastName)) {
        $errors['lastname'] = "Le prénom ne peut être vide";
    }
    if (!preg_match($lastNameRegex, $lastName)) {
        $errors['lastname'] = "Le prénom ne doit contenir que des lettres et des chiffres et être entre 3 et 30 caractères";
    }
// Vérification de l'anniversaire
    if (empty($birthday)) {
        $errors['birthday'] = "Veuillez entrer une date de naissance ne peut être vide";
    }
// Vérification du Pays de naissance
    if (empty($country)) {
        $errors['country'] = "Le Pays de naissance ne peut être vide";
    }
    if (!preg_match($countryRegex, $country)) {
        $errors['country'] = "Le Pays de naissance ne doit contenir que des lettres et des chiffres et être entre 3 et 60 caractères";
    }
// Vérification de la Nationalité
    if (empty($nationality)) {
        $errors['nationality'] = "La nationalité ne peut être vide";
    }
    if (!preg_match($nationalityRegex, $nationality)) {
        $errors['nationality'] = "La nationalité ne doit contenir que des lettres et des chiffres et être entre 3 et 60 caractères";
    }
// Vérification de l'adresse
    if (empty($adress)) {
        $errors['adress'] = "L'adresse ne peut être vide";
    }
    if (!preg_match($adressRegex, $adress)) {
        $errors['adress'] = "L'adresse ne doit contenir que des lettres et des chiffres et être entre 3 et 100 caractères";
    }
// Vérification de la ville
    if (empty($city)) {
        $errors['city'] = "La ville ne peut être vide";
    }
    if (!preg_match($cityRegex, $city)) {
        $errors['city'] = "La ville ne doit contenir que des lettres et des chiffres et être entre 3 et 60 caractères";
    }
// Vérification du Pays
    if ($state === '0') {
        $errors['state'] = "Veuillez choisir un Pays";
    }
// Vérification du Code postal
    if (empty($cp)) {
        $errors['cp'] = "Le code postal ne peut être vide";
    }
    if (!preg_match($cpRegex, $cp)) {
        $errors['cp'] = "Le code postal ne doit contenir et être composé que de 5 chiffres";
    }
// Vérification de l'email
    if (empty($mail)) {
        $errors['mail'] = "L'email ne peut être vide";
    }
    if (!preg_match($mailRegex, $mail)) {
        $errors['mail'] = "L'email doit être sous forme : exemple@lamanu.com";
    }
// Vérification du numéro de téléphone
    if (empty($phone)) {
        $errors['phone'] = "Le numéro de téléphone ne peut être vide";
    }
    if (!preg_match($phoneRegex, $phone)) {
        $errors['phone'] = "Le numéro de téléphone doit être composé sous ce format exemple : 09/09/09/09/09";
    }
// Vérification Diplôme
    if ($diplome === '0') {
        $errors['diplome'] = "Veuillez choisir un diplôme";
    }
// Vérification de l'identifiant pôle emploi
    if (empty($numberJob)) {
        $errors['numberJob'] = "L'identifiant pôle emploi ne peut être vide";
    }
    if (!preg_match($numberJobRegex, $numberJob)) {
        $errors['numberJob'] = "L'identifiant pôle emploi doit être composé sous ce format exemple : 0000000A";
    }
// Vérification du numéro Badge
    if (empty($numberBadge)) {
        $errors['numberBadge'] = "Veuillez choisir un genre";
    }
// Vérification du lien codecademy
    if (empty($codecademy)) {
        $errors['codecademy'] = "Le lien codecademy ne peut être vide";
    }
    if (!preg_match($codecademyRegex, $codecademy)) {
        $errors['codecademy'] = "Le lien codecademy doit être sous forme : http://lamanu.com ou https://lamanu.fr";
    }
// Vérification du champ héro
    if (empty($hero)) {
        $errors['hero'] = "Veuillez entrer un message";
    }
    if (!preg_match($heroRegex, $hero)) {
        $errors['hero'] = "Veuillez entrer un message entre 3 et 255 caractères";
    }
// Vérification du champ hack
    if (empty($hack)) {
        $errors['hack'] = "Veuillez entrer un message";
    }
    if (!preg_match($hackRegex, $hack)) {
        $errors['hack'] = "Veuillez entrer un message entre 3 et 255 caractères";
    }
// Vérification du champ info
    if (empty($information)) {
        $errors['information'] = "Veuillez entrer un message";
    }
    if (!preg_match($informationRegex, $information)) {
        $errors['information'] = "Veuillez entrer un message entre 3 et 255 caractères";
    }
}
if (isset($_POST['isValidated'])) {
    if (empty($errors)) {
        $success = 'JE VALIDE CES DONNEES AVEC SUCCESS';
    } else {
        echo'';
    }
}

