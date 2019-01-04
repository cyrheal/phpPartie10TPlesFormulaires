<?php

/**
 * Affiche les erreurs rencontrées
 * @param $key 
 * @return String
 */
function showError($key) { //Récupère la variable $errors dans la portée globale
    global $errors;        // global permet de récupérer les erreurs sans limite.Sans le global, on affichera que la première erreur.
    return !empty($errors[$key]) ? '<div class="bg-warning bgError2">' . $errors[$key] . '</div>' : '';
}

if (!empty($_POST)) {
    // Création et récupération de mes différentes variables
    $gender = htmlspecialchars($_POST['gender']);
    $firstName = htmlspecialchars($_POST['firstname']);
    $lastName = htmlspecialchars($_POST['lastname']);
    $birthday = htmlspecialchars($_POST['birthday']);
    $country = htmlspecialchars($_POST['country']);
    $nationality = htmlspecialchars($_POST['nationality']);
    $adress = htmlspecialchars($_POST['adress']);
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    $cp = htmlspecialchars($_POST['cp']);
    $mail = htmlspecialchars($_POST['mail']);
    $phone = htmlspecialchars($_POST['phone']);
    $diplome = htmlspecialchars($_POST['diplome']);
    $numberJob = htmlspecialchars($_POST['numberJob']);
    $numberBadge = htmlspecialchars($_POST['numberBadge']);
    $codecademy = htmlspecialchars($_POST['codecademy']);
    $hero = htmlspecialchars($_POST['hero']);
    $hack = htmlspecialchars($_POST['hack']);
    $information = htmlspecialchars($_POST['information']);
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
        $errors['numberBadge'] = "Veuillez choisir un nombre de badge";
    }
// Vérification du lien codecademy
    if (empty($codecademy)) {
        $errors['codecademy'] = "Le lien codecademy ne peut être vide";
    }
    if (!preg_match($codecademyRegex, $codecademy)) {
        $errors['codecademy'] = "Le lien codecademy doit être sous forme : http://formulaire.com ou https://formulaire.fr";
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
/* validation si il n'y a pas d'erreur */
if (isset($_POST['isValidated'])) {
    if (empty($errors)) {
        $success = 'JE VALIDE CES DONNEES AVEC SUCCESS';
    } else {
        echo'';
    }
}
?>
<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='utf-8'>
        <link rel='stylesheet' href='assets/bootstrap/css/bootstrap.css'>
        <link rel='stylesheet' href='assets/css/style.css'>
        <script src="assets/js/jquery-3.2.1.js"></script>
        <script src="assets/bootstrap/js/bootstrap-formhelpers-phone.js"></script>
        <script src="assets/bootstrap/js/bootstrap-formhelpers-phone.format.js"></script>
        <title>Page index</title>
    </head>
    <body>
        <div class="container exercice">
            <div>Faire une page pour enregistrer un futur apprenant. On devra pouvoir saisir les informations suivantes :

                Nom
                Prénom
                Date de naissance
                Pays de naissance
                Nationalité
                Adresse
                Email
                Téléphone
                Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)
                Numéro pôle emploi
                Nombre de badge
                Liens codecademy
                Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?
                Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)
                Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?

                A la validation de ces informations, il faudra les afficher dans la même page à la place du formulaire.</div>
        </div>
        <div class="result">
            <div class="container">
                <?php
                if (!empty($errors)):
                    ?>
                    <div class="bg-warning p-1 bgError">Merci de corriger les erreurs indiquées en jaune</div>
                <?php endif; ?>
                <?php if (!empty($success)): ?>
                    <div class="p-1 bgSuccess"><?= $success; ?></div>
                   <!-- réponses du formulaire-->  
                    <div class="row">             
                        <div class="col-md-10 offset-md-1 mt-5 bg-light">
                            <h1>Résultat de vos informations transmises</h1>
                            <div class="row">
                                <div class="col-md-12 d-flex">
                                    <div class="col-md-4">
                                        <p>Civilité : <?= (isset($gender)) ? $gender : ''; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>Votre Nom : <?= (isset($firstName)) ? $firstName : ''; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>Votre Prénom : <?= (isset($lastName)) ? $lastName : ''; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 d-flex">
                                    <div class="col-md-4">
                                        <p>Votre date de naissance : <?= (isset($birthday)) ? $birthday : ''; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>Votre pays de naissance : <?= (isset($country)) ? $country : ''; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>Votre nationalité : <?= (isset($nationality)) ? $nationality : ''; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 d-flex">
                                    <div class="col-md-4">
                                        <p>Votre adresse : <?= (isset($adress)) ? $adress : ''; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>Votre ville : <?= (isset($city)) ? $city : ''; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>Votre pays : <?= (isset($state)) ? $state : ''; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 d-flex">
                                    <div class="col-md-4">
                                        <p>Votre code postal : <?= (isset($cp)) ? $cp : ''; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>Votre email : <?= (isset($mail)) ? $mail : ''; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>Votre Numéro de téléphone : <?= (isset($phone)) ? $phone : ''; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 d-flex">
                                    <div class="col-md-4">
                                        <p>Vos diplôme : <?= (isset($diplome)) ? $diplome : ''; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>Votre numéro Pôle emploi : <?= (isset($numberJob)) ? $numberJob : ''; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>Votre Nombre de badge : <?= (isset($numberBadge)) ? $numberBadge : ''; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 d-flex">
                                    <div class="col-md-4 offset-md-4">
                                        <p>Votre lien CodeCademy: <?= (isset($codecademy)) ? '<a href="' . $codecademy . '" title="CodeCademy">Codecademy</a>' : ''; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-10 offset-md-1">
                                        <p class="text-center">Qui seriez-vous et pourquoi ? :</p><p><?= (isset($hero)) ? $hero : ''; ?><p>
                                    </div>
                                </div>        
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-10 offset-md-1">
                                        <p class="text-center">Racontez-nous un de vos "hacks" :</p><p><?= (isset($hack)) ? $hack : '' ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-10 offset-md-1">
                                        <p class="text-center">Votre expérience avec la programmation :</p><p><?= (isset($information)) ? $information : '' ?></p>
                                    </div>
                                </div>
                            </div>
                            <a href="index.php" title="Retour vers l'index">
                                <input type="button" class="btn btn-primary m-3 float-right" value="Retour au formulaire"/>
                            </a>
                        </div>
                    </div>
                <?php endif; ?> 

                <div class='rox'>
                    <div class="col-md-10 offset-md-1">
                        <form class="form-group" name="form" method="post" action="" enctype="multipart/form-data">
                            <fieldset>
                                <legend>Formulaire</legend>
                                <div class="form-row">
                                    <div class="col-md-2">
                                        <label  for="gender">Civilité : </label>
                                        <select  class="form-control form-control-md" name="gender">
                                            <option value="0" <?php
                                            if (isset($gender) && $gender == "0") {
                                                echo " selected";
                                            }
                                            ?>>-- Choix --</option>
                                            <option value="Mr" <?php
                                            if (isset($gender) && $gender == "Mr") {
                                                echo " selected";
                                            }
                                            ?>>Mr</option>
                                            <option value="Mme" <?php
                                            if (isset($gender) && $gender == "Mme") {
                                                echo " selected";
                                            }
                                            ?>>Mme</option>
                                        </select>
                                        <?= showError('gender') ?>
                                    </div>
                                    <div class="col-md-4 offset-md-1">
                                        <label  for="firstname">Votre Nom : </label>
                                        <input class="form-control" value="<?php
                                        if (isset($firstName)) {
                                            echo $firstName;
                                        }
                                        ?>" type="text" id="firstname" name="firstname" placeholder="Nom" />
                                               <?= showError('firstname') ?>
                                    </div>
                                    <div class="col-md-4 offset-md-1">
                                        <label  for="lastname">Votre Prénom : </label>
                                        <input class="form-control" value="<?php
                                        if (isset($lastName)) {
                                            echo $lastName;
                                        }
                                        ?>" type="text" id="lastname" name="lastname" placeholder="Prénom" />
                                               <?= showError('lastname') ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <label  for="bitrhday">Votre date de naissance : </label>
                                        <input class="form-control" value="<?php
                                        if (isset($birthday)) {
                                            echo ($birthday);
                                        }
                                        ?>" type="date" id="birthday" name="birthday" />
                                               <?= showError('birthday') ?>
                                    </div>
                                    <div class="col-md-4">
                                        <label  for="country">Pays de naissance : </label>
                                        <input class="form-control" value="<?php
                                        if (isset($country)) {
                                            echo $country;
                                        }
                                        ?>" type="text" id="country" name="country" placeholder="Pays de naissance" />
                                               <?= showError('country') ?>
                                    </div>
                                    <div class="col-md-4">
                                        <label  for="nationality">Nationalité : </label>
                                        <input class="form-control" value="<?php
                                        if (isset($nationality)) {
                                            echo $nationality;
                                        }
                                        ?>" type="text" id="nationality" name="nationality" placeholder="Nationalité" />
                                               <?= showError('nationality') ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label  for="adress">Adresse : </label>
                                        <input class="form-control" value="<?php
                                        if (isset($adress)) {
                                            echo $adress;
                                        }
                                        ?>" type="text" id="adress" name="adress" placeholder="Adresse" />
                                               <?= showError('adress') ?>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-4">
                                        <label  for="city">Ville : </label>
                                        <input class="form-control" value="<?php
                                        if (isset($city)) {
                                            echo $city;
                                        }
                                        ?>" type="text" id="city" name="city" placeholder="Soissons" />
                                               <?= showError('city') ?>
                                    </div>
                                    <div class="form-group col-md-4 offset-md-1">
                                        <label for="state">Pays</label>
                                        <select id="state" class="form-control form-control-md" name="state">
                                            <option value="0" <?php
                                            if (isset($state) && $state == "0") {
                                                echo " selected";
                                            }
                                            ?>>-- Choix --</option>
                                            <option value="France" <?php
                                            if (isset($state) && $state == "France") {
                                                echo " selected";
                                            }
                                            ?>>France</option>
                                            <option value="Belgique" <?php
                                            if (isset($state) && $state == "Belgique") {
                                                echo " selected";
                                            }
                                            ?>>Belgique</option>
                                        </select>
                                        <?= showError('state') ?>
                                    </div>
                                    <div class="col-md-2 offset-md-1">
                                        <label for="cp">Code postal :</label>
                                        <input type="text" value="<?php
                                        if (isset($cp)) {
                                            echo $cp;
                                        }
                                        ?>" class="form-control" name="cp" id="cp" placeholder="02000">
                                               <?= showError('cp') ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-5 offset-md-1">
                                        <label for="mail">Email : </label>
                                        <input class="form-control" value="<?php
                                        if (isset($mail)) {
                                            echo $mail;
                                        }
                                        ?>" type="email" id="mail" name="mail" placeholder="exemple@lamanu.fr" />
                                               <?= showError('mail') ?>
                                    </div>
                                    <div class="col-md-5">
                                        <label  for="phone">Téléphone : </label>
                                        <input class="form-control bfh-phone" value="<?php
                                        if (isset($phone)) {
                                            echo $phone;
                                        }
                                        ?>" type="tel" data-country="FR" id="phone" name="phone" placeholder="01/23/45/67/89" />
                                               <?= showError('phone'); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-5 offset-md-1">
                                        <label for="diplome">Diplôme</label>
                                        <select class="form-control form-control-md" name="diplome">
                                            <option value="0" <?php
                                            if (isset($diplome) && $diplome == "0") {
                                                echo " selected";
                                            }
                                            ?>>-- Choix --</option>
                                            <option value="sans diplôme" <?php
                                            if (isset($diplome) && $diplome == "sans diplôme") {
                                                echo " selected";
                                            }
                                            ?>>Sans diplôme</option>
                                            <option value="Bac" <?php
                                            if (isset($diplome) && $diplome == "Bac") {
                                                echo " selected";
                                            }
                                            ?>>Bac</option>
                                            <option value="Bac+2" <?php
                                            if (isset($diplome) && $diplome == "Bac+2") {
                                                echo " selected";
                                            }
                                            ?>>Bac+2</option>
                                            <option value="Bac+3" <?php
                                            if (isset($diplome) && $diplome == "Bac+3") {
                                                echo " selected";
                                            }
                                            ?>>Bac+3 ou supérieur</option>
                                        </select>
                                        <?= showError('diplome') ?>

                                    </div>
                                    <div class="col-md-5">
                                        <label  for="numberJob">Numéro pôle emploi : </label>
                                        <input class="form-control" value="<?php
                                        if (isset($numberJob)) {
                                            echo $numberJob;
                                        }
                                        ?>" type="text" id="numberJob" name="numberJob" placeholder="Numéro pôle emploi" />
                                               <?= showError('numberJob') ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-5 offset-md-1">
                                        <label  for="numberBadge">Nombre de badge : </label>
                                        <input class="form-control" value="<?php
                                        if (isset($numberBadge)) {
                                            echo $numberBadge;
                                        }
                                        ?>" type="number" id="numberBadge" name="numberBadge" placeholder="Nombre de badge" />
                                               <?= showError('numberBadge') ?>
                                    </div>
                                    <div class="col-md-5">
                                        <label  for="codecademy">Lien codecademy : </label>
                                        <input class="form-control" value="<?php
                                        if (isset($codecademy)) {
                                            echo $codecademy;
                                        }
                                        ?>" type="text" id="codecademy" name="codecademy" placeholder="Lien codecademy" />
                                               <?= showError('codecademy') ?>
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="col-md-10 offset-md-1 text-center">
                                        <fieldset>
                                            <legend>
                                                Qui seriez-vous et pourquoi?
                                            </legend>
                                            <label for="hero">Si vous étiez un super héros/une super héroïne : </label>
                                            <textarea rows="3" class="form-control col-md-10 offset-md-1" id="hero" name="hero"><?php
                                                if (isset($hero)) {
                                                    echo $hero;
                                                }
                                                ?></textarea>
                                            <legend class="legend2"><?= showError('hero') ?></legend>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-10 offset-md-1 text-center">
                                        <fieldset>
                                            <legend>
                                                Racontez-nous un de vos "hacks"
                                            </legend>
                                            <label for="hack">pas forcément technique ou informatique </label>
                                            <textarea rows="3" class="form-control col-md-10 offset-md-1" id="hack" name="hack"><?php
                                                if (isset($hack)) {
                                                    echo $hack;
                                                }
                                                ?></textarea>
                                            <legend class="legend2"><?= showError('hack') ?></legend>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-10 offset-md-1 text-center">
                                        <fieldset>
                                            <legend>
                                                Votre expérience avec la programmation
                                            </legend>
                                            <label for="information">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                                            <textarea rows="3" class="form-control col-md-10 offset-md-1" id="information" name="information"><?= (isset($information)) ? $information : '' ?></textarea>
                                            <legend class="legend2"><?= showError('information') ?></legend>
                                        </fieldset>
                                    </div>
                                </div>
                                <input class="btn btn-success m-3 float-right" name="isValidated" type="submit" role="button" value="Soumettre le formulaire"/>
                                <legend class="legend2">Fin Formulaire</legend>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

            <!--            <form name="form" action="" method="POST">
                            <div><label for="gender">Civilité : </label>
                                <select name="gender">
                                    <option value="0">Civilité</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Mme">Mme</option>
                                </select>
                            </div>
                            <div><label for="lastname">Votre Nom : </label><input value="" type="text" name="lastname" placeholder="Nom" /></div>
                            <div><label for="firstname">Votre Prénom : </label><input value="" type="text" name="firstname" placeholder="Prénom" /></div>
                            <div><label for="birthday">Votre Date de naissance : </label><input value="" type="date" name="birthday" /></div>
                            <div><label for="country">Pays de naissance : </label><input value="" type="text" name="country" placeholder="Pays de naissance" /></div>
                            <div><label for="nationality">Nationalité : </label><input value="" type="text" name="nationality" placeholder="Nationalité" /></div>
                            <div><label for="adress">Adresse: </label><input value="" type="text" name="adress" placeholder="Adresse" /></div>
                            <div><label for="cp">code postal: </label><input value="" type="text" name="cp" placeholder="code postale" /></div>
                            <div><label for="city">ville: </label><input value="" type="text" name="city" placeholder="ville" /></div>
                            <div><label for="state">pays : </label><input value="" type="text" name="state" placeholder="pays" /></div>
                            <div><label for="mail">Email : </label><input value="" type="email" name="mail" placeholder="Email" /></div>
                            <div><label for="phone">Téléphone : </label><input value="" type="tel" name="phone" placeholder="01.23.45.67.89" /></div>
                            <div><label for="diplome">Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur): </label>
                                <select name="diplome">
                                    <option value="0">choix</option>
                                    <option value="sans diplôme">Sans diplôme</option>
                                    <option value="Bac">Bac</option>
                                    <option value="Bac+2">Bac+2</option>
                                    <option value="Bac+3">Bac+3 ou supérieur</option>
                                </select>
                            </div>
                            <div><label for="numberJob">Numéro pôle emploi : </label><input value="" type="text" name="numberJob" placeholder="Numéro pôle emploi" /></div>
                            <div><label for="numberBadge">Nombre de badge : </label><input value="" type="number" name="numberBadge" placeholder="Nombre de badge " /></div>
                            <div><label for="codecademy"> Liens codecademy: </label><input value="" type="text" name="codecademy" placeholder="Liens codecademy" /></div>
                            <div>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?: <textarea name="hero"></textarea></div>
                            <div>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) : <textarea name="hack"></textarea></div>
                            <div>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?: <textarea name="information"></textarea></div>
                            <input name="isValidated" type="submit" role="button" value="Soumettre le formulaire"/>
                        </form>   -->
        </div>  
    </body>
</html>

