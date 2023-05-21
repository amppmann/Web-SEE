<!DOCTYPE html>
<html>
<head>
    <title>PHP-Form validation</title>
</head>
<body>
    <h1>Form validation</h1>
    <form  method="post">
        <label for="firstName">Enter your first name :</label>
        <input type="text" name="firstName">
        <br>    
        <br>
        <label for="lastName">Enter your last name :</label>
        <input type="text" name="lastName">
        <br>
        <br>
        <label for="email">Enter your email id :</label>
        <input type="email" name="email">
        <br>
        <br>
        <label for="password">Enter your password :</label>
        <input type="password" name="password">
        <br>
        <br>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
        if(isset($_POST["submit"])){
            $firstName=$_POST["firstName"];
            $lastName=$_POST["lastName"];
            $email=$_POST["email"];
            $password=$_POST["password"];

            if($firstName==null || $lastName==null || $email==null || $password==null){
                echo "<script>alert('Fill all details..!')</script>";
            } else{
                echo "<em>Your data saved successfully</em>";
            }
        }
    ?>


</body>
</html>