<?php
//chalenge 1 et 2

class Voiture
{
    private $marque;
    private $modele;
    private $vitesse = 0;

    public function __construct($marque, $modele)
    {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function setVitesse(int $v)
    {
        if ($v >= 0) {
            $this->vitesse = $v;
            return true;
        } else {
            return false;
        }
    }

    public function getVitesse()
    {
        return $this->vitesse;
    }

    public function accelerer($increment)
    {
        $this->setVitesse($this->vitesse + $increment);
    }
    public function getModele()
    {
        return $this->modele;
    }
    public function setModele($model)
    {
        $this->modele = $model;
    }
    public function getMarque()
    {
        return $this->marque;
    }
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }
}

$Dacia = new Voiture("Dacia", "2026");
$Dacia->setVitesse(50);
$Dacia->setVitesse(-10);
echo "Vitesse: " . $maDacia->getVitesse();

//chalenge 3

class CompteBancaire
{
    private $solde;
    public function __construct($solde)
    {
        $this->solde = $solde;
    }
    public function deposer($montant)
    {
        if ($montant > 0) {
            $this->solde += $montant;
        }

    }
    public function retirer($montant)
    {
        if ($montant > 0 && $montant <= $this->solde) {
            $this->solde -= $montant;
        }

    }
}