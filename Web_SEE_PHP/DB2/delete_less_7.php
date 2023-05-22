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

$sql_delete="DELETE FROM ronson WHERE cgpa<7.75";

if($conn->query($sql_delete)===TRUE){
    echo "Records deleted successfully..";
    echo "<hr>";
}else{
    echo "ERROR!.Record may not exists..";
    echo "<hr>";
}

mysqli_close($conn);


?>