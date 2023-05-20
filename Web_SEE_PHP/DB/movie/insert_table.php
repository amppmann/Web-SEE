<?php
$servername="localhost";
$username="root";
$password="";
$database="student2";


$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Connection Failed!".$conn->connect_error);
}

echo "Database connected successfully";
echo "<hr>";


$sql_insert=mysqli_query($conn,"INSERT INTO movie VALUES(
    'Oppenheimer','Chris','A',6,'B','english','drama')");

if($conn->query($sql_insert)===FALSE){
    echo "New Record inserted successfully";
    echo "<hr>";
} else {
    echo "ERROR! Can't insert record..";
    echo "<hr>";
}

mysqli_close($conn);

?>