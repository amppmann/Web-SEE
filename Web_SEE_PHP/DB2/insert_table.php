<?php

$servername="localhost";
$username="root";
$password="";
$database="student2";

$conn=mysqli_connect($servername,$username,$password,$database);


if(!$conn){
    die("Connection failed!".$conn->connect_error);
}

echo "Database connected successfully";
echo "<hr>";


$sql_insert=mysqli_query($conn,"INSERT INTO ronson VALUES(
    103,'steve','4nm20ai087','aiml','nitte',4.67)");

if($conn->query($sql_insert)===FALSE){
    echo "New record inserted successfully";
    echo "<hr>";
} else {
    echo "ERROR! cant insert new record...";
    echo "<hr>";
}


mysqli_close($conn);

?>