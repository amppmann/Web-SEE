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


$sql_create="CREATE TABLE movie(
    movie_name varchar(50),
    director_name varchar(50),
    actor_name varchar(50),
    ratings int,
    role varchar(50),
    language varchar(50),
    genre varchar(50))";

if($conn->query($sql_create)===TRUE){
    echo "Table created successfully";
    echo "<hr>";
}else {
    echo "Sorry! Table already exists...";
    echo "<hr>";
}

mysqli_close($conn);

?>