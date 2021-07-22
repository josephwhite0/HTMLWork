<?php
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

  <header> Registeration Page</header>

  <form action="php/reg.php" method="POST">
    <input type="text" name="first" placeholder="Firstname">
    <br>
    <input type="text" name="last" placeholder="Lastname">
    <br>
    <input type="text" name="email" placeholder="E-mail">
    <br>
    <input type="text" name="user" placeholder="Username">
    <br>
    <input type="password" name="pwd" placeholder="Password">
    <br><br>
    <button type= "submit" name="submit">Sign up</button>
  </form>
</html>