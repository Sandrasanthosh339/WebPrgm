<html>
<head>
<title>Login</title>
</head>

<body>

<?php
if ($_POST["username"] == "php" && $_POST["password"] == "php")
{
  session_start();
  $_SESSION["Login"] = "YES";
  echo "<h1>You Are Now Logged Correctly In</h1>";
  echo "<p><a href='document.php'>Link To Protected File</a></p>";
 }
else
{
 session_start();
 $_SESSION["Login"] = "NO";
 echo "<h1>You Are Not Logged Correctly In </h1>";
 echo "<p><a href='document.php'>Link To Protected File</a></p>";
}
?>

</body>

</html>