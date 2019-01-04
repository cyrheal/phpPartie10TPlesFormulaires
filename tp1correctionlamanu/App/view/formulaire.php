<?php
if (!empty($errors)):
    ?>
    <div class="bg-danger p-1 bgError">Merci de corriger les erreurs indiquées en rouge</div>
<?php endif; ?>
<?php if (!empty($success)): ?>
    <div class="p-1 bgSuccess"><?= $success; ?></div>
    <?php require('App/view/viewForm.php'); ?>
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