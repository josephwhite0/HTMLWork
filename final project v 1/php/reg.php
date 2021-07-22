<?php
  #see template.php and logn.php
  session_start();
  include_once 'dbh.php';

  #JW - this is taking the info from the register file and assigning it to a variable. This actually needs a bit of validation code
  #to make sure that all fields are entered before posting the data
  $first = $_POST['first'];
  $last = $_POST['last'];
  $email = $_POST['email'];
  $user = $_POST['user'];
  $pwd = $_POST['pwd'];
  #JW - here we make a query to the database, but instead of asking for information we are inserting information
  $sql = "INSERT INTO users(username, password, first_name, last_name, email)
  VALUES ('$user', '$pwd', '$first', '$last', '$email');";
  mysqli_query($conn, $sql);

  header("Location: ../template.php");