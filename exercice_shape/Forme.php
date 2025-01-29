<?php

abstract class Forme
{
    protected string $color;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    abstract function calculerSurface():float;
}