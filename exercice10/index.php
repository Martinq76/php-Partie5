<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 10</title>
    </head>

    <body>


        <?php
        $departements = array(
            2 => "Aisne",
            59 => "Oise",
            62 => "Pas-de-Calais",
            80 => "Somme");
        
        foreach ($departements as$cle => $element) {
            echo 'Le département '.$element.' a le numéro '.$cle; ?>
        <p></p>
        <?php
        }
        ?>
    </body>
</html>