<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les conditions</title>
</head>
<body>
<h1>Révision : Les conditions</h1>
<h1>condition simple: if</h1>
<p>On verifie si 1 condition est remplie</p>
<?php
// on met dans une variable un entier entre 0 et 10 inclus
$hasard = mt_rand(0,10);
echo 'Valeur de $hasard : '."<h3>$hasard</h3>";

// on va vérifier si le chiffre au hasard est plus petit que 5
if($hasard<5){
    // variable entre simple '' n'est pas interprétée (affiche $hasard en tant que texte)
    echo '$hasard vaut '.
        // entre "" la variable est interprétée
        "$hasard et est donc plus petit que 5";

}

?>
<h1>condition sinon: else</h1>
<p>On verifie si 1 condition est remplie SINON (else) on effectue une autre action</p>
<?php

// on va vérifier si le chiffre au hasard est plus petit que 5
if($hasard<5){
    // variable entre simple '' n'est pas interprétée (affiche $hasard en tant que texte)
    echo '$hasard vaut '.
        // entre "" la variable est interprétée
        "$hasard et est donc plus petit que 5";
}else{
    echo '$hasard vaut '."$hasard et est donc compris entre 5 et 10";
}

?>
<p>On peut imbriquer les conditions if else, en général on évite d'avoir plus de 3 niveaux d'imbrication</p>
<h5>
    <?php
    // si hasard est plus petit que 5
    if($hasard<5){

        /*
         * remplacer la condition if($hasard){ pour vérifier si hasard est impaire
         */

        // si hasard est impaire
        if($hasard%2 == 1){
            echo $hasard." est plus petit que 5 et est impaire";
            // si hasard est paire
        }else{
            echo $hasard." est plus petit que 5 et est paire";
        }
// si hasard est plus grand ou égal à 5
    }else{
        // si hasard est impaire
        if($hasard%2 ==1){
            echo $hasard." est plus grand ou égale à 5 et est impaire";
            // si hasard est paire
        }else{
            echo $hasard." est plus grand ou égale à 5 et est paire";
        }
    }
    ?>
</h5>
</body>
</html>