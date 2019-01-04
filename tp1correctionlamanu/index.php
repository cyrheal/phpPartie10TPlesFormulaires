<?php
//insertion du controller PHP
include 'controlerForm.php';
?>
<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset="utf-8">
        <title>PHP Partie 10 TP 1</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <?php
                if (isset($_POST['submit']) && (count($formError) == 0)) {
                    ?>
                    <div class="text-center col-12">
                        Nom : <?= $lastname ?>
                    </div>
                    <div class="text-center col-12">
                        Prenom : <?= $firstname ?>
                    </div>
                    <div class="text-center col-12">
                        Votre date de naissance est le : <?= $birthdate ?>
                    </div>
                    <div class="text-center col-12">
                        Votre pays de naissance est : <?= $coutryBorn ?>
                    </div>
                    <div class="text-center col-12">
                        Votre nationalité est : <?= $nationality ?>
                    </div>
                    <div class="text-center col-12">
                        Votre adresse est : <?= $address ?>
                    </div>
                    <div class="text-center col-12">
                        Votre mail est : <?= $mail ?>
                    </div>
                    <div class="text-center col-12">
                        Votre numero de telephone est : <?= $phone ?>
                    </div>
                    <div class="text-center col-12">
                        Niveau scolaire : <?= $result ?>
                    </div>


                    <?php
                } else {
                    ?>
                    <div class="text-center text-info col-12" >
                        FORMULAIRE D'INSCRIPTION :
                    </div>
                    <form class="" method="POST" action="">
                        <div class="form-group">
                            <div class="form-row">             
                                <label for="lastname">Nom:</label><input name="lastname" type="text" class="form-control" id="lastname" placeholder="Nom" value="<?= isset($lastname) ? $lastname : '' ?>"  />
                                <p class="text-danger"> <?= isset($formError['lastname']) ? $formError['lastname'] : ' ' ?> </p>
                            </div>
                            <div class="form-row">             
                                <label for="firstname">Prenom:</label><input name="firstname" type="text" class="form-control" id="firstname" placeholder="Prenom" value="<?= isset($firstname) ? $firstname : '' ?>"  />
                                <p class="text-danger"> <?= isset($formError['firstname']) ? $formError['firstname'] : ' ' ?> </p>
                            </div>
                            <div class="form-row">             
                                <label for="birthdate">Date de naissance:</label><input name="birthdate" type="date" class="form-control" id="birthdate" placeholder="Date de naissance" value="<?= isset($birthdate) ? $birthdate : '' ?>" />
                                <p class="text-danger"> <?= isset($formError['birthdate']) ? $formError['birthdate'] : ' ' ?> </p>
                            </div>
                            <div class="form-row">             
                                <label for="coutryBorn">Pays de naissance:</label><input name="coutryBorn" type="text" class="form-control" id="coutryBorn" placeholder="Pays de naissance" value="<?= isset($coutryBorn) ? $coutryBorn : '' ?>" />
                                <p class="text-danger"> <?= isset($formError['coutryBorn']) ? $formError['coutryBorn'] : ' ' ?> </p>
                            </div>
                            <div class="form-row">             
                                <label for="nationality">Nationalité:</label><input name="nationality" type="text" class="form-control" id="nationality" placeholder="Nationalité" value="<?= isset($nationality) ? $nationality : '' ?>" />
                                <p class="text-danger"> <?= isset($formError['nationality']) ? $formError['nationality'] : ' ' ?> </p>
                            </div>
                            <div class="form-row">             
                                <label for="address">Adresse :</label><input name="address" type="text" class="form-control" id="address" placeholder="Adresse" value="<?= isset($address) ? $address : '' ?>" />
                                <p class="text-danger"> <?= isset($formError['address']) ? $formError['address'] : ' ' ?> </p>
                            </div>
                            <div class="form-row">             
                                <label for="mail">Email :</label><input name="mail" type="mail" class="form-control" id="mail" placeholder="Email" value="<?= isset($mail) ? $mail : '' ?>" />
                                <p class="text-danger"> <?= isset($formError['mail']) ? $formError['mail'] : ' ' ?> </p>
                            </div>
                            <div class="form-row">             
                                <label for="phone">Téléphone :</label><input name="phone" type="tel" class="form-control" id="phone" placeholder="Téléphone" value="<?= isset($phone) ? $phone : '' ?>"  />
                                <p class="text-danger"> <?= isset($formError['phone']) ? $formError['phone'] : ' ' ?> </p>
                            </div>
                            <div class="form-row">             
                                <label for="diploma">Diplôme(s) :</label>
                                <select name="diploma" value="<?= isset($diploma) ? $diploma : '' ?>">
                                    <?php foreach ($diploma as $key => $value) { ?>
                                        <option value = "<?= $key ?>"><?= $value ?></option>
                                    <?php } ?>
                                </select>
                                <p class="text-danger"> <?= isset($formError['diploma']) ? $formError['diploma'] : '' ?> </p>
                            </div>
                            <div class="form-row">             
                                <label for="peNumber">Identifiant pole emploi :</label><input name="peNumber" type="text" class="form-control" id="peNumber" placeholder="Identifiant pole emploi"  />
                            </div>
                            <div class="form-row">             
                                <label for="badges">Nombre de badge Codecademy :</label><input name="badges" type="number" class="form-control" id="badges" placeholder="Nombre de badges Codecademy"  />
                            </div>
                            <div class="form-row">             
                                <label for="codecademy">Lien Codecademy :</label><input name="codecademy" type="url" class="form-control" id="codecademy" placeholder="Lien Codecademy"  />
                            </div>
                            <div class="form-row">             
                                <label for="question1">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi? :</label><textarea name="question1" class="form-control" id="question1" placeholder="Réponse"></textarea>
                            </div>
                            <div class="form-row">             
                                <label for="question2">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :</label><textarea name="question2" class="form-control" id="question2" placeholder="Réponse"></textarea>
                            </div>
                            <div class="form-row">             
                                <label for="question3">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? :</label><textarea name="question3" class="form-control" id="question3" placeholder="Réponse"></textarea>
                            </div>
                            <input class="btn btn-info" type="submit" value="Valider" name='submit' />
                        </div>   
                    </form>
                    <?php
                }
                ?>

            </div>
        </div>
    </body>
</html> 