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


$sql_create="CREATE TABLE car(
    reg_no int,
    owner varchar(50),
    address varchar(50),
    fuel_type varchar(50),
    model varchar(50),
    price int)";

if($conn->query($sql_create)===TRUE){
    echo "Table created successfully";
    echo "<hr>";
} else {
    echo "SORRY! Table already exists...";
    echo "<hr>";
}

mysqli_close($conn);    
?>