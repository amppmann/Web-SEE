<?php


echo "<h1>Student Details</h1>";
echo "<br>";

if (isset($_POST["submit"])) {

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $bloodgroup = $_POST["bloodgroup"];
    

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