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

$sql_display=mysqli_query($conn,"SELECT * FROM library");

while($row=mysqli_fetch_array($sql_display)){
    echo "BOOK ID : ".$row["bookid"]."| TITLE : ".$row["title"]."| AUTHOR : ".$row["author"]."| ISSN : ".$row["issn"]."| PRICE : ".$row["price"]."| EDITION : ".$row["edition"]."<hr>";
}

mysqli_close($conn);


?>