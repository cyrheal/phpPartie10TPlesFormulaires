<?php
// je charge mes 4 tableaux dans 1 tableaux multi-dimensionnel
$portrait0 = array(
    1 => array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg'),
    2 => array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg'),
    3 => array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg'),
    4 => array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg')
);
$portraitX = array(
    1 => array('name' => 'lolo', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg'),
    2 => array('name' => 'lala', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg'),
    3 => array('name' => 'toto', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg'),
    4 => array('name' => 'tata', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg')
);
// function generique qui va parcourir le tableau renseigner afin d'en renvoyer l'affichage de mes sous tableaux indexé
function showTable($portraitGenerique) {
    foreach ($portraitGenerique as $littlePortrait) {
        ?>
        <p><?= $littlePortrait['name'] . ' ' . $littlePortrait['firstname']; ?></p>
        <p><img src="<?= $littlePortrait['portrait'] ?> " width="500"/></p>  
        <?php
    }
}
?>