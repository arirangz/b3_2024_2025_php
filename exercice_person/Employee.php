<?php

class Employee extends Person
{
    public function __construct(
        private string $company,
        private string $position,
        string $firstName,
        string $lastName,
        int $age
    ) {
        parent::__construct($firstName, $lastName, $age);
    }


    /**
     * Get the value of company
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * Set the value of company
     */
    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get the value of position
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * Set the value of position
     */
    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }
}
