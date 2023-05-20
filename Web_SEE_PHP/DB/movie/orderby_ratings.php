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


$sql_display=mysqli_query($conn,"SELECT * FROM movie
ORDER BY ratings");

while($row=mysqli_fetch_array($sql_display)){
    echo "MOVIE NAME : ".$row["movie_name"]."|DIRECTOR NAME : ".$row["director_name"]."| ACTOR NAME : ".$row["actor_name"]."| RATINGS : ".$row["ratings"]."| ROLE : ".$row["role"]."| LANGUAGE : ".$row["language"]."| GENRE : ".$row["genre"]."<hr>";
}


mysqli_close($conn);

?>