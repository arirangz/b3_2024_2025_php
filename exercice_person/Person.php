<?php

class Person
{
    public function __construct(private string $firstName,
                                private string $lastName,
                                private int $age)
    {
    }

    public function getFullName():string
    {
        return $this->firstName." ".$this->lastName;
        //return "{$this->firstName} {$this->lastName}";
    }
}