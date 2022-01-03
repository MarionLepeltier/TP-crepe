<?php

// Fait apelle au fichier dans lequel se trouve la classe.
require './TP-crepe.php';


// Exercice : Creer une fonction qui affiche la recette

// Pour creer un objet on l'apelle en creant une fonction auto new 


$recette = new Crepe("1l", 3, "500gr", "1 cuillère", "200gr", "1 pincée", "Confiture");


var_dump($recette);

?>