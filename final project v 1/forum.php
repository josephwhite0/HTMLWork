<?php
  session_start();
  include_once 'php/dbh.php';

  #JW - this query pulls the max number of forum posts
  $sql = "SELECT MAX(forumID) FROM forum";
  $r = mysqli_query($conn,$sql);
  if(@mysqli_num_rows($r) == 1){
    list($maxFoID) = mysqli_fetch_array($r, MYSQLI_NUM);
    $forumIDMax = $maxFoID;
  }
  
  
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

<a href="template.php">Home</a>
<?php
  #JW -This shows a link to the post page if you are logged in. If you aren't logged in it shouldn't show up
   if(isset($_SESSION['username']))
    echo '<a href="post.php">Post</a>';
  #JW -this loop will pull data from the database and print it out to html for as many posts there is
  for($x = 1;$x <= $forumIDMax; $x++){
    $sql = "SELECT subject, post, postdate, username FROM forum WHERE forumID = $x";
    $r = mysqli_query($conn,$sql) or trigger_error("Query:$sql\n<MySQL Error: " . mysqli_error($conn));
    if(@mysqli_num_rows($r) == 1){
      list($sub, $p, $pd, $uid) = mysqli_fetch_array($r, MYSQLI_NUM);
      $subject = $sub;
      $post = $p;
      $pDate = $pd;
      $user = $uid;
  }

    echo 
    '<table>
      <tr>
        <th>User</th>
        <th>Thread</th>
        <th>Date posted</th>
      </tr>
      <tr>
        <td>' . $user . '</td>
        <td>' . $subject . '</td>
        <td>' . $pDate . '</td>
      </tr>
      <tr>
        <th>Post</th>
      </tr>
      <tr>
        <td>' . $post . '</td>
      </tr>
      <br>';
}
?>

</html>