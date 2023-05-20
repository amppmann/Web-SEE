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


$sql_insert=mysqli_query($conn,"INSERT INTO car VALUES(
    1006,'sohan','udupi','petrol','celerio',90000)");

if($conn->query($sql_insert)===FALSE){
    echo "New record inserted successfully";
    echo "<hr>";
} else {
    echo "ERROR! Cant insert new record..";
}

mysqli_close($conn);    
?>