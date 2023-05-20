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

$sql_create="CREATE TABLE library(
    bookid int,
    title varchar(50),
    author varchar(50),
    issn varchar(50),
    price int,
    edition varchar(20))";

if($conn->query($sql_create)===TRUE){
    echo "Table created successfully";
    echo "<hr>";
} else {
    echo "SORRY! Table already exists...";
    echo "<hr>";
}

mysqli_close($conn);



?>