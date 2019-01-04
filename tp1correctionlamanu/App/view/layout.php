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
<div class="container">
             <?php
            if (!isset($_GET['isValided'])) {
                require('App/view/formulaire.php');
            } 
            ?>
</div>
    </body>
</html>
