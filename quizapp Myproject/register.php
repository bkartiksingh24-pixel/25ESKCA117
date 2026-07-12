<?php
include("db.php");

if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(name,email,password)
            VALUES('$name','$email','$password')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>
        alert('Registration Successful');
        window.location='login.php';
        </script>";
    }
    else
    {
        echo "Error!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">

<h2>Student Registration</h2>

<form method="POST">

<input type="text" name="name" placeholder="Enter Name" required><br><br>

<input type="email" name="email" placeholder="Enter Email" required><br><br>

<input type="password" name="password" placeholder="Enter Password" required><br><br>

<input type="submit" name="register" value="Register">

</form>

<br>

<a href="login.php">Already have an account? Login</a>

</div>

</body>
</html>