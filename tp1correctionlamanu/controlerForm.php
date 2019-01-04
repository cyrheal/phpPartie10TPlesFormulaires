<?php
$diploma = array(1 => 'Pré-Bac', 2 => 'Bac', 3 => 'Bac+2', 4 => 'Bac+3', 5 => 'Etudes supérieures');
//Déclaration regex numéro de téléphone
$regexPhone = '/^[0-9]{10}$/';
//Déclaration regex nom
$regexName = "#([a-zA-Z_])$#";
//Déclaration regex date
$regexDate = "/[0-9]{4}-[0-9]{2}-[0-9]{2}/";
//Déclaration regex texte
$regexText = '/^[0-9a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-\ \.\,\?\:\!\']+$/';
//Déclaration regex adresse
$regexAddress = '/^[A-z0-9àáâãäåçèéêëìíîïðòóôõöùúûüýÿ\- ]+$/';
//Déclaration regex nombre et lettre
$regexNumberLetter = '/^[0-9A-z]+$/';
//Déclaration des erreurs du formulaire:
$formError = array();
// Si $POST lastname extsite alors je declare ma varible $lastname
// et je la verrifie avec ma regex.
if (isset($_POST['lastname'])) {
    $lastname = htmlspecialchars($_POST['lastname']);
// Si $lastname ne respecte pas les conditions de ma regex alors je stock un message d'erreur
// dons mon tableau formError
    if (!preg_match($regexName, $lastname)) {
        $formError['lastname'] = 'Nom, la saisie est invalide.';
    }
//Si c'est vide je stock un message d'erreur.
    if (empty($lastname)) {
        $formError['lastname'] = 'Erreur,merci de remplir le champ Nom.';
    }
}
if (isset($_POST['firstname'])) {
    $firstname = htmlspecialchars($_POST['firstname']);
    if (!preg_match($regexName, $firstname)) {
        $formError['firstname'] = 'Prenom, la saisie est invalide.';
    }
    if (empty($firstname)) {
        $formError['firstname'] = 'Erreur,merci de remplir le champ Prenom.';
    }
}
//Date de naissance
if (isset($_POST['birthdate'])) {
    $birthdate = htmlspecialchars($_POST['birthdate']);
    if (!preg_match($regexDate, $birthdate)) {
        $formError['birthdate'] = 'Naissance, la saisie est invalide.';
    }
    if (empty($birthdate)) {
        $formError['birthdate'] = 'Erreur,merci de remplir le champ date de naissance.';
    }
}
//Pays de naissance
if (isset($_POST['coutryBorn'])) {
    $coutryBorn = htmlspecialchars($_POST['coutryBorn']);
    if (!preg_match($regexName, $coutryBorn)) {
        $formError['coutryBorn'] = 'Pays de naissance, la saisie est invalide.';
    }
    if (empty($coutryBorn)) {
        $formError['coutryBorn'] = 'Erreur,merci de remplir le champ Pays De Naisssance.';
    }
}
//Nationnalité
if (isset($_POST['nationality'])) {
    $nationality = htmlspecialchars($_POST['nationality']);
    if (!preg_match($regexName, $nationality)) {
        $formError['nationality'] = 'Nationalité, la saisie est invalide.';
    }
    if (empty($nationality)) {
        $formError['nationality'] = 'Erreur, merci de remplir le champ nationalité.';
    }
}
//Adresse
if (isset($_POST['address'])) {
    $address = htmlspecialchars($_POST['address']);
    if (!preg_match($regexAddress, $address)) {
        $formError['address'] = 'Adresse, la saisie est invalide.';
    }
    if (empty($address)) {
        $formError['address'] = 'Erreur, merci de remplir le champ adresse.';
    }
}
//Mail
if (isset($_POST['mail'])) {
    $mail = htmlspecialchars($_POST['mail']);
//Emploi de la fonction PHP Filter_var pour valider l'adresse Email.
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $formError['mail'] = 'Mail, la saisie est invalide.';
    }
    if (empty($mail)) {
        $formError['mail'] = 'Erreur,merci de remplir le champ Mail.';
    }
}
//Telephone
if (isset($_POST['phone'])) {
    $phone = htmlspecialchars($_POST['phone']);
    if (!preg_match($regexPhone, $phone)) {
        $formError['phone'] = 'Telephone, la saisie est invalide.';
    }
    if (empty($phone)) {
        $formError['phone'] = 'Erreur, merci de remplir le champ telephone.';
    }
}
//Niveau d'étude
if (isset($_POST['diploma'])) {
    $diplom = htmlspecialchars($_POST['diploma']);
//initilatisation d'un tableau vide:
    $result = [];
//chargement de la valeur correspondant a la clé $diplom du tableau $diploma
    $result = $diploma[$diplom];
}
?>