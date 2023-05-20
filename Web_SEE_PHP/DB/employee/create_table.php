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


$sql_create="CREATE TABLE employee(
    empid int,
    emp_name varchar(20),
    dept varchar(20),
    designation varchar(20),
    salary int,
    doj varchar(20))";

if($conn->query($sql_create)===TRUE){
    echo "Table created successfully";
    echo "<br>";
    echo "<hr>";
} else {
    echo "Cant create the table since it already exists";
    echo "<hr>";
}

?>