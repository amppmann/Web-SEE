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

$sql_display=mysqli_query($conn,"SELECT * FROM ronson");

while($row=mysqli_fetch_array($sql_display)){
    echo "Student Id : ".$row["stid"]."| Student Name : ".$row["name"]."| USN : ".$row["usn"]."| Branch : ".$row["branch"]."| City : ".$row["city"]."| CGPA : ".$row["cgpa"]."<hr>";
}

mysqli_close($conn);


?>