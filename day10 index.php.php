<?php
include("header.php");
?>

<form action="process.php" method="post">

<label>Name</label>
<input type="text" name="name" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Mobile</label>
<input type="text" name="mobile" required>

<label>Gender</label>
<select name="gender">
    <option>Male</option>
    <option>Female</option>
    <option>Other</option>
</select>

<label>Password</label>
<input type="password" name="password" required>

<button type="submit" name="submit">Register</button>

</form>

<?php
include("footer.php");
?>