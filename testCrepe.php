<?php

    // Fait apelle au fichier dans lequel se trouve la classe.
    require './TP-crepe.php';


    // Exercice : Creer une fonction qui affiche la recette

    // Pour creer un objet on l'apelle en creant une fonction auto new 

    // On apelle notre classe on ajoute dans l'ordre les valeurs
    $recette = new Crepe("1l", 3, "500gr", "1 cuillère", "200gr", "1 pincée", ["Confiture"]);

    // On appelle la fonction get
    $recette-> afficher_recette();
    echo $recette-> getTopping();

    // On appelle la fonction set
    // $recette -> setTopping("Nutella");
    // echo "\n".$recette -> getTopping();

    // On apelle la fonction addTopping
    $recette->addTopping("caramel");
    $recette->addTopping("sucre");
    $recette->addTopping("citron");

    var_dump($recette);


    // Fonction removeTopping
    $recette->removeTopping("sucre");
    var_dump($recette)

?>