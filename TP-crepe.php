<?php

    // TP Classe
    // Creer une classe crépe:

    class Crepe {
        public $lait;
        public $oeuf;
        public $farine;
        public $extraitDeVanille;
        public $beurre;
        public $sel;
    }

    // Creer une fonction qui affiche la recette

    $crepe = new Crepe;

    function Recette ($recette){
       echo "Pour faire des crépes il vous faut : \n- $crepe"; 
    }

    echo $recette; 
?>