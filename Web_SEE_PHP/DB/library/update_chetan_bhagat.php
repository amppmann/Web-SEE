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

$sql_update="UPDATE library set author='Chetan Bhagat'";

if($conn->query($sql_update)===TRUE){
    echo "Record updated successfully";
    echo "<hr>";
} else{
    echo "Record cant be updated since record might not exists...";
    echo "<hr>";
}
mysqli_close($conn);


?>