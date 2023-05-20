<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "student2";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed!" . $conn->connect_error);
}

echo "Database connected successfully";
echo "<hr>";

$result=mysqli_query($conn,"SELECT * FROM employee");

echo "The Table contents are ";
echo "<br>";

while ($row = mysqli_fetch_array($result)) {
    echo "EMP_ID :" . $row["empid"] . "| EMP_NAME :" . $row["emp_name"] . "|DEPARTMENT :" . $row["dept"] . "| DESIGNATION :" . $row["designation"] . "| SALARY :" . $row["salary"] . "|DOJ : " . $row["doj"] . "<hr>";

}

mysqli_close($conn);

?>