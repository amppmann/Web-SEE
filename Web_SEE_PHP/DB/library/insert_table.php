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

$sql_insert=mysqli_query($conn,"INSERT INTO library VALUES(
    1080,'Encyclopedia','D','013',100,'6rd')");


if($conn->query($sql_insert)===FALSE){
    echo "New record inserted successfully";
} else {
    echo "SORRY! Cant insert new record..";
}

mysqli_close($conn);


?>