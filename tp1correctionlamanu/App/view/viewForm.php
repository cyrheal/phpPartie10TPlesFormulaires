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
                <p>Votre lien CodeCademy: <?= (isset($codecademy)) ? '<a href="'.$codecademy.'" title="CodeCademy">Codecademy</a>' : ''; ?></p>
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