<?php

class Rectangle extends Forme
{
    private float $longueur;
    private float $largeur;

    public function __construct(float $longueur, float $largeur, string $couleur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        parent::__construct($couleur);
    }

    public function calculerSurface():float
    {
        return $this->longueur * $this->largeur;
    }
}