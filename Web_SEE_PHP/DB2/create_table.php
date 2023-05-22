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


$sql_create="CREATE TABLE ronson(
    stid int,
    name varchar(50),
    usn varchar(50),
    branch varchar(50),
    city varchar(50),
    cgpa float)";

if($conn->query($sql_create)===TRUE){
    echo "Table created successfully";
    echo "<hr>";

} else {
    echo "ERROR! Table already exists...";
    echo "<hr>";
}

mysqli_close($conn);

?>