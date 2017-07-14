<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hello</title>

</head>
<body>

<form action="index.php" method="POST">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="submit" value="Save">
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] = 'POST') {
    session_start();

    $_SESSION['name'] = $_POST['name'];
}
echo '<a href="hello.php">Hello page</a>';
?>




</body>
</html>