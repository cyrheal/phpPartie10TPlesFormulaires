<?php

function showError($key) {
    global $errors; //Récupère la variable $errors dans la portée globale
    return !empty($errors[$key]) ? '<div class="bg-warning bgError2">' . $errors[$key] . '</div>' : '';
}

if (!empty($_POST)) {
    // Création et récupération de mes différentes variables
    $gender = htmlspecialchars((string) $_POST['gender']);
    $firstName = htmlspecialchars((string) $_POST['firstname']); //
    $lastName = htmlspecialchars((string) $_POST['lastname']); //
    $age = htmlspecialchars((string) $_POST['age']);
    $society = htmlspecialchars((string) $_POST['society']);
// Création de mes variables contenant mes Regex
    $firstNameRegex = '#([a-zA-Z_])$#';
    $lastNameRegex = '#([a-zA-Z_])$#';
    $ageRegex = '\'([0-9]{0,3})\'s';
    $societyRegex = '/^[\w\-]{3,60}$/';
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
// Vérification de l'age
    if (empty($age)) {
        $errors['age'] = "L'age ne peut être vide";
    }
    if (!preg_match($ageRegex, $age)) {
        $errors['age'] = "L'age ne doit contenir que des chiffres et être entre 0 et 3 caractères";
    }
// Vérification de Société
    if (empty($society)) {
        $errors['society'] = "La société ne peut être vide";
    }
    if (!preg_match($societyRegex, $society)) {
        $errors['society'] = "La société ne doit contenir que des lettres et des chiffres et être entre 3 et 60 caractères";
    }
}
if (isset($_POST['isValidated'])) {
    if (empty($errors)) {
        $success = 'Le formulaire est bien rempli'; 
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
        <title>Page index</title>
    </head>
    <body>
        <div class="exercice">
            <p> Faire une page permettant de saisir les informations suivantes :</p>
            <ul>
                <li>Civilité (liste déroulante)</li>
                <li>Nom</li>
                <li>Prénom</li>
                <li>Age</li>
                <li>Société</li>
            </ul>
            <p>A la validation, les données saisies devront aparaitre sous le formulaire. Attention les données devront rester dans les différents éléments du formulaire même après la validation.</p> 

        </div>
        <div class="container result">
            <div class='rox'>
                <div class="col-md-10 offset-md-1">
                    <form class="form-group" name="form" method="post" action="">
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
                                <label  for="age">Votre Age : </label>
                                <input class="form-control" value="<?php
                                if (isset($age)) {
                                    echo ($age);
                                }
                                ?>" type="number" id="age" name="age" />
                                       <?= showError('age') ?>
                            </div>
                            <div class="col-md-4">
                                <label  for="society">Société : </label>
                                <input class="form-control" value="<?php
                                if (isset($society)) {
                                    echo $society;
                                }
                                ?>" type="text" id="society" name="society" placeholder="Société" />
                                       <?= showError('society') ?>
                            </div>
                        </div>
                        <legend class="legend2"><?= showError('information') ?></legend>
                        <input class="btn btn-success m-3 float-right" name="isValidated" type="submit" role="button" value="Soumettre le formulaire"/>
                    </form>
                </div>
            </div>
            <?php
            if (!empty($errors)):
                ?>
                <div class="bg-warning p-1 bgError">Merci de corriger les erreurs indiquées en jaune</div>
            <?php endif; ?>
            <?php if (!empty($success)): ?>
                <div class="p-1 bgSuccess"><?= $success; ?></div>
                <div class="row">
                    <div class="col-md-10 offset-md-1 mt-5 bg-light">
                        <h1>Résultat de vos informations transmises</h1>
                        <div class="row">
                            <!--affichage des informations -->
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
                                    <p>Votre Age : <?= (isset($age)) ? $age : ''; ?></p>
                                </div>
                                <div class="col-md-4">
                                    <p>Votre Société : <?= (isset($society)) ? $society : ''; ?></p>
                                </div>
                            </div>
                        </div>
                        <a href="index.php" title="Retour vers l'index">
                            <input type="button" class="btn btn-primary m-3 float-right" value="Retour au formulaire"/>
                        </a>
                    </div>
                </div>
            <?php endif; ?> 
        </div>
    </body>
</html>