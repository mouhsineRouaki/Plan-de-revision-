<?php 
class Voiture{
    public $marque ;
    public $modele;
    public $vitesse;
    public function __construct($modele , $marque){
        $this->modele = $modele; 
        $this->marque = $marque ;
    }
    public function accelerer($vitesse){
        $this->vitesse = $vitesse;
    }
}
$voitue1 = new Voiture("2024" , 'dacia');
$voitue2 = new Voiture('ford' , '2020');
$voitue1->accelerer(20);
$voitue2->accelerer(40);