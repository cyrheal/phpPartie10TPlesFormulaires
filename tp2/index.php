<?php
// Création de mes regex
$regexlastName = '#([a-zA-Z_])$#';
$regexfirstName = '#([a-zA-Z_])$#';
$regexAge = '\'([0-9]{3})\'s';
$regexSociety = '/^[\w\-]{3,60}$/';
//je verifie que  mes POST existe .
if (!empty($_POST) || isset($_POST['gender']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['age']) && isset($_POST['society'])) {
    $gender = htmlspecialchars($_POST['gender']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $firstName = htmlspecialchars($_POST['firstName']);
    $age = htmlspecialchars($_POST['age']);
    $society = htmlspecialchars($_POST['society']);
    //si mes POST existe alors j'affiche mes données
}   //si les post existe alors je verifie mais regex
if (preg_match($regexlastName, $lastName) && preg_match($regexfirstName, $firstName) && preg_match($regexAge, $age) && preg_match($regexSociety, $society)) {
    
} else {
    ?>
    <!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <title>TP2</title>
            <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
            <link href="asset/bootstrap/css/bootstrap.css" rel="stylesheet">
        </head>
        <body> 
            <div class="container-fluid">
                <div class="exercice">
                    Faire une page permettant de saisir les informations suivantes :

                    Civilité (liste déroulante)
                    Nom
                    Prénom
                    Age
                    Société

                    A la validation, les données saisies devront aparaitre sous le formulaire. 
                    Attention les données devront rester dans les différents éléments du formulaire même après la validation.
                </div>
                <div class="result">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
                            <form method="POST" action="" class="form">
                                <fieldset>
                                    <legend>Formulaire</legend>
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <h1>Bonjour, Veuillez remplir le formulaire suivant.</h1>
                                        </div>
                                    </div>
                                    <fieldset>
                                        <legend>Informations personnelles</legend>
                                        <h4>Civilité :</h4>
                                        <label  for="gender" value="
                                        <?php
                                        if (isset($_POST['gender'])) {
                                            echo $_POST['gender'];
                                        }
                                        ?>">Civilité : </label>
                                        <select name="gender">
                                            <option value="Civility" > </option>
                                            <option value="Mr" >Monsieur</option>
                                            <option value="Mme">Madame</option>
                                        </select>
                                        <h4>Votre identité :</h4>
                                        <p>
                                            <label for="lastName"> Nom : </label><input type="text" placeholder="Nom" name="lastName" value="
                                            <?php
                                            if (isset($_POST['lastName'])) {
                                                echo $_POST['lastName'];
                                            }
                                            ?>" />
                                            <label for="firstName">Prénom : </label><input type="text" placeholder="Prénomom" name="firstName" value="
                                            <?php
                                            if (isset($_POST['firstName'])) {
                                                echo $_POST['firstName'];
                                            }
                                            ?>"/>
                                        </p>
                                        <p>
                                            <label for="age">Age : </label><input type="text" name="age" value="
                                            <?php
                                            if (isset($_POST['age'])) {
                                                echo $_POST['age'];
                                            }
                                            ?>" />
                                    </fieldset>
                                    <fieldset>
                                        <legend>votre entreprise</legend>
                                        <p>
                                            <label for="society">Société : </label><input type="text" placeholder="Nom de votre société" name="society" value="
                                            <?php
                                            if (isset($_POST['society'])) {
                                                echo $_POST['society'];
                                            }
                                            ?>" />
                                    </fieldset>
                                    <div><label for="valid"></label><input class="valid" type="submit" name="valid" value="Valider"/></div>
                                </fieldset>
                            </form>
                        </div>
                    </div>


                    <?php
                    'Merci de remplir l\'ensemble des champs';
                }
                ?> 
                <?php if (isset($_POST['gender'])): ?>
<!--réponses du formulaires-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
                                <div class="result"></div>
                                <fieldset>
                                    <legend>Résumé de vos informations</legend>
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <h1 class="resulth1">Voici le resultat de vos données.</h1>
                                        </div>
                                    </div>
                                    <fieldset>
                                        <legend>Informations personnelles</legend>    
                                        <p>Civilité : <?= $gender ? $gender : ''; ?></p>
                                        <p>Votre Nom : <?= $lastName ? $lastName : ''; ?></p>
                                        <p>Votre Prénom : <?= $firstName ? $firstName : ''; ?></p>
                                        <p>Votre age : <?= $age ? $age : ''; ?></p>
                                    </fieldset>
                                    <fieldset>
                                        <legend>votre entreprise</legend> 
                                        <p>Votre société : <?= $society ? $society : ''; ?></p>
                                        <a href="index.php" title="Modifier mes informations"><input type="button" class="valid" value="Modifier mes informations"/></a>
                                    </fieldset>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </body>
</html>
