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

$sql_update="UPDATE ronson set city='NMAMIT'";

if($conn->query($sql_update)===TRUE){
    echo "Record updated successfully";
    echo "<hr>";
} else {
    echo "ERROR! Cant update...";
    echo "<hr>";
}



mysqli_close($conn);


?>