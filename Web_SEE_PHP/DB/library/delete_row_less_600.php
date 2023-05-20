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

$sql_delete=mysqli_query($conn,"DELETE FROM library
where price<600");

if($conn->query($sql_delete)===FALSE){
    echo "Record deleted successfully";
    echo "<hr>";
} else{
    echo "ERROR! Record doesn't exists";
    echo "<hr>";
}


mysqli_close($conn);


?>