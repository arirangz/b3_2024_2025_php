<?php
require_once "Person.php";
require_once "Employee.php";

$person1 = new Person("John", "Doe", 31);

echo $person1->getFullName()."<br>";

$employee1 = new Employee("Google", "Senior Dev", "Mark", "Spencer", 37);

echo $employee1->getFullName();

