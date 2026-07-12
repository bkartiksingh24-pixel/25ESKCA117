<?php
session_start();
include("db.php");

$score = 0;
$total = 0;

if(isset($_POST['answer']))
{
    foreach($_POST['answer'] as $id => $answer)
    {
        $result = mysqli_query($conn, "SELECT answer FROM questions WHERE id='$id'");
        $row = mysqli_fetch_assoc($result);

        $total++;

        if($answer == $row['answer'])
        {
            $score++;
        }
    }
}

$wrong = $total - $score;

if ($total > 0) {
    $percentage = ($score / $total) * 100;
} else {
    $percentage = 0;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Quiz Result</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">

<h1>Quiz Completed 🎉</h1>

<h2><?php echo $_SESSION['user']; ?></h2>

<h3>Total Questions : <?php echo $total; ?></h3>

<h3>Correct Answers : <?php echo $score; ?></h3>

<h3>Wrong Answers : <?php echo $wrong; ?></h3>

<h3>Percentage : <?php echo round($percentage,2); ?>%</h3>

<?php

if($percentage>=90)
echo "<h2 style='color:green'>Excellent</h2>";

else if($percentage>=70)
echo "<h2 style='color:blue'>Very Good</h2>";

else if($percentage>=50)
echo "<h2 style='color:orange'>Good</h2>";

else
echo "<h2 style='color:red'>Keep Practicing</h2>";

?>

<br>

<a href="quiz.php">
<button>Play Again</button>
</a>

<a href="logout.php">
<button>Logout</button>
</a>

</div>

</body>
</html>