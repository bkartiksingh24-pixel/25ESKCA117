<?php
session_start();
include("db.php");

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['user'] = $row['name'];

        header("Location: quiz.php");
    }
    else
    {
        echo "<script>alert('Invalid Email or Password');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

<h2>Student Login</h2>

<form method="POST">

<input type="email" name="email" placeholder="Enter Email" required><br><br>

<input type="password" name="password" placeholder="Enter Password" required><br><br>

<input type="submit" name="login" value="Login">

</form>

<br>

<a href="register.php">Create New Account</a>

</div>

</body>
</html>