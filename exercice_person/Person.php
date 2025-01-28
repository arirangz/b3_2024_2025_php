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

    /**
     * Get the value of firstName
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName(): string
    {
                                    return $this->lastName;
    }

    /**
     * Set the value of lastName
     */
    public function setLastName(string $lastName): self
    {
                                    $this->lastName = $lastName;

                                    return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge(): int
    {
                                    return $this->age;
    }

    /**
     * Set the value of age
     */
    public function setAge(int $age): self
    {
                                    $this->age = $age;

                                    return $this;
    }
}