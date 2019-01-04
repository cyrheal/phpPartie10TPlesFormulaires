<?php
require('form.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>TP_3p10.php</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <header id="header">
                        <h3>TP_3p10php</h3>
                        <p>Faire une fonction qui permet d'afficher les données des tableaux suivants :</p>
                        <pre>
$portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
                        </pre>       
                        <p>Les afficher tous sur une même page.</p>
                    </header>
                    <hr>
                    <div class="reponse">
                        <h3 class="color">Reponse :</h3>   
                        <hr>
                        <div class="reponse">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                    </div>
                                    <table class="table border">
                                        <tr>
                                            <td class="border color" ><?= showTable($portrait0) ?></td>                              
                                        </tr>
                                    </table>                                
                                </div>                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>