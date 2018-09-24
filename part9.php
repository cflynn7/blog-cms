<?php 
 ini_set('display_errors', 1); // Show errors for debugging ?>

<?php

$firstName = "Jane";   // String Type Variable
$lastName = "Doe"; //String Type Variable
$age = 35;           // INTEGER type variable
$married = true;     //BOOLEAN type Variable
$childrenNames = array("Alice", "Bob");  //ARRAY variable

$fullName = $firstName . " " . $lastName; //CONCATENATION operator
$dogYears = $age/7;           //ARITHMETIC operator
$isAdult = $dogYears > 4; //COMPARISON operator
$isSettled = $isAdult and $married; // INTEGER type variable 

function getFullName($firstName, $lastName) {      //Function name
     return $firstName . " " . $lastName; //Returned value
}

$fullName = getFullName($firstname, $lastName; //Using Variables
$fullName = getFullName("Alice", "Doe"); //Using Values

function getIsSettled($age, $married) {       // FUNCTION name
    $dogYears = $age/7;
    $isAdult = $dogYears > 4;
    $isSettled = $isAdult and $married;
    return $isSettled;                   // RETURNED value
}

$isSettled = getIsSettled($age, $married); //Using variables
$isSettled = getIsSettled(5, false); //using values

if ($isSettled) {
    echo $fullName . " is settled.";
} else {
    echo $fullName . " is not settled.";
}

foreach($childrenNames as $childName) {
    echo "<li>" . $childName . "</li>"; 
}

