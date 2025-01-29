<?php

class Cercle extends Forme
{
    private float $rayon;

    public function __construct(float $rayon, string $couleur)
    {
        $this->rayon = $rayon;

        parent::__construct($couleur);
    }

    public function calculerSurface():float
    {
        //return pi() * $this->rayon * $this->rayon;
        return pi() * pow($this->rayon, 2);
    }
}