<?php
session_start();
include("db.php");

if(!isset($_SESSION['user']))
{
    header("Location: login.php");
}

$result = mysqli_query($conn,"SELECT * FROM questions");
?>

<!DOCTYPE html>
<html>
<head>
<title>Quiz</title>

<link rel="stylesheet" href="css/style.css">

<script>
let timeLeft = 60;

function startTimer()
{
setInterval(function(){

document.getElementById("timer").innerHTML=timeLeft;

timeLeft--;

if(timeLeft<0)
{
document.getElementById("quizForm").submit();
}

},1000);
}
</script>

</head>

<body onload="startTimer()">

<div class="container">

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>

<h3>Time Left :
<span id="timer">60</span> sec
</h3>

<form method="POST" action="result.php" id="quizForm">

<?php

while($row=mysqli_fetch_assoc($result))
{

?>

<h3><?php echo $row['question']; ?></h3>

<input type="radio"
name="answer[<?php echo $row['id']; ?>]"
value="<?php echo $row['option1']; ?>">
<?php echo $row['option1']; ?>

<br>

<input type="radio"
name="answer[<?php echo $row['id']; ?>]"
value="<?php echo $row['option2']; ?>">
<?php echo $row['option2']; ?>

<br>

<input type="radio"
name="answer[<?php echo $row['id']; ?>]"
value="<?php echo $row['option3']; ?>">
<?php echo $row['option3']; ?>

<br>

<input type="radio"
name="answer[<?php echo $row['id']; ?>]"
value="<?php echo $row['option4']; ?>">
<?php echo $row['option4']; ?>

<hr>

<?php
}
?>

<input type="submit" value="Submit Quiz">

</form>

</div>

</body>
</html>