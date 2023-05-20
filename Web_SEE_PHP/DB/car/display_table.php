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


$sql_display=mysqli_query($conn,"SELECT * FROM car");

while($row=mysqli_fetch_array($sql_display)){
    echo "REG NO : ".$row["reg_no"]."| OWNER : ".$row["owner"]."|ADDRESS : ".$row["address"]."| FUEL_TYPE : ".$row["fuel_type"]."| MODEL : ".$row["model"]."| PRICE : ".$row["price"]."<hr>";
}

mysqli_close($conn);    
?>