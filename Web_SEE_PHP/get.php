<?php


echo "<h1>Student Details</h1>";
echo "<br>";

if (isset($_GET["submit"])) {

    $firstName = $_GET["firstName"];
    $lastName = $_GET["lastName"];
    $contact = $_GET["contact"];
    $email = $_GET["email"];
    $age = $_GET["age"];
    $bloodgroup = $_GET["bloodgroup"];
    

    echo "FIRST NAME : " . $firstName;
    echo "<br>";

    echo "LAST NAME : ".$lastName;
    echo "<br>";
    
    echo "CONTACT NO. :".$contact;
    echo "<br>";

    echo "EMAIL : ".$email;
    echo "<br>";


    echo "AGE : ".$age;
    echo "<br>";

    echo "BLOODGROUP : ".$bloodgroup;
    echo "<br>";


}
?>