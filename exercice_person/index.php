<?php
require_once "Person.php";

$person1 = new Person("John", "Doe", 31);

echo $person1->getFullName();