<!DOCTYPE html>
<html>

<head>
    <title>Student Form</title>
</head>

<body>
    <h2>Student Form-GET ARRAY METHOD</h2>
    <p>Write a HTML code that takes name(fname and lname),
    contact number, email, age and blood group as input and
    display the entered details using $_POST array.</p>
    <form action="post.php" method="post">
        <label for="firstName">Enter your first name :</label>
        <input type="text" name="firstName" required>
        <br>
        <br>
        <label for="lastName">Enter your last name :</label>
        <input type="text" name="lastName">
        <br>
        <br>
        <label for="contact">Enter the contact number :</label>
        <input type="number" name="contact" required>
        <br>
        <br>
        <label for="email">Enter your email :</label>
        <input type="email" name="email" required>
        <br>
        <br>
        <label for="age">Enter your age :</label>
        <select name="age">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br>
        <br>
        <label for="bloodgroup">Select your blood group :</label>
        <select name="bloodgroup">
            <option value="A+" selected>A+</option>
            <option value="B+">B+</option>
            <option value="O+">O+</option>
            <option value="AB+">AB+</option>
            <option value="A-">A-</option>
            <option value="B-">B-</option>
            <option value="O-">O-</option>
        </select>
        <br>
        <br>
        <input type="submit" name="submit" value="submit">

    </form>
</body>

</html>