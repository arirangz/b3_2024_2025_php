<?php

class Rectangle
{
    private float $longueur;
    private float $largeur;
    private string $couleur;

    public function __construct(float $longueur, float $largeur, string $couleur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->couleur = $couleur;
    }

    public function calculerSurface():float
    {
        return $this->longueur * $this->largeur;
    }
}