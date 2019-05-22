<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 8</title>
    </head>
    <body>
        
        
        <?php
        $months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
        
        for ($i = 0; $i <= 11; $i++) {
            echo $months[$i].'</br>';
        }
        ?>
    </body>
</html>