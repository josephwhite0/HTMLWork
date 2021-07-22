<?php
  # JW - see template
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Register Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,600;1,100;1,200;1,300&display=swap" rel="stylesheet">
  </head>

  <header> Login Page</header>

  <form action="php/logn.php" method="POST">
    <input type="text" name="username" placeholder="UserName">
    <br>
    <input type="password" name="pwd" placeholder="Password">
    <br><br>
    <button type= "submit" name="submit">Log in!</button>
    </form>
</html>