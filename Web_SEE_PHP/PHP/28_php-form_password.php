<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Registration</title>
</head>
<body>
    <h1>FORM REGISTRATION</h1>
    <form  method="post">
        <label for="name">Enter your name :</label>
        <input type="text" name="name">
        <br>
        <br>
        <label for="password">Enter your password :</label>
        <input type="password" name="password">
        <br>   
        <br>
        <label for="re-password">Re-enter your password :</label>
        <input type="password" name="re-password">
        <br>
        <br>
        <input type="submit" value="submit" name="submit">
    </form>

    <?php 
    
        if(isset($_POST["submit"])){
            $name=$_POST["name"];
            $password=$_POST["password"];
            $repassword=$_POST["re-password"];


            if($password==null || $repassword == null || $name=""){
                echo "<script>alert('Fill up all fields')</script>";
            } 

            if($password!=$repassword && $password!=null && $repassword!=null){
                echo "<script>alert('Passwords do not match..')</script>";
            }else{
                echo "<em>Your data saved successfully</em>";
            }
        }
    ?>
    
</body>
</html>