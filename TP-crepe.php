<?php

    // TP Classe
    // Creer une classe crépe:

    // Toujours une majuscule quand on déclare une classe
    // Les variables dans une classe se nomme des attributs ou de propriétés
    // Les fonctions dans une classe s'appelle une methode
    // Les attributs peuvent étre public(accessible à l'interieur et a l'ext de la classe), 
    // private(acces uniquement à l'interieur de la classe) ou protected

    class Crepe {
        public $lait;
        public $oeuf;
        public $farine;
        public $extraitDeVanille;
        public $beurre;
        public $sel;
        public $topping;


        // Fonction constructeur obligé dans une classe, le faire pour chaque attribut
        // Il sert a creer un objet crépe espace underscore construct
        public function __construct(
            // Paramétres qui sont les attributs de votre classe, une virgule entre chaque.
            $ingredient1,$ingredient2,$ingredient3,$ingredient4,$ingredient5,$ingredient6,$ingredient7
        ){
            // Traitement de votre fonction
            $this->lait = $ingredient1;
            $this->oeuf = $ingredient2;
            $this->farine = $ingredient3;
            $this->extraitDeVanille = $ingredient4;
            $this->beurre = $ingredient5;
            $this->sel = $ingredient6;
            $this->topping = $ingredient7; 
        }
        // Fin de la fonction construct

        public function ingredients(){
            echo "Pour faire des crêpes il vous faut : \n
            - $lait 1L ";
        }
    }
    
    
    ?>