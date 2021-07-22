<?php
    session_start();
    include_once 'dbh.php';



$subject = $_POST['subject'];
$post = $_POST['post'];
$user = $_SESSION['username'];

$sql = "INSERT INTO forum(subject, username, post) VALUES
('$subject', '$user', '$post');";
mysqli_query($conn,$sql);

if(!empty($_POST['subject'])){
    $e = mysqli_real_escape_string($conn, $_POST['subject']);
} else {
    $e = FALSE;
    echo '<p> class="error"> You forgot to enter your email address!</p>';
}

if(!empty($_POST['post'])){
    $p = trim($_POST['post']);
} else {
    $p = FALSE;
    echo '<p> class="error" You forgot to enter your password!</p>';
}

if($e && $p) {
    # JW - this code connects to the database and makes a query to determine whether the username and password has been registered
    $sql = "SELECT subject, post, postdate FROM forum WHERE subject = '$e'";
    $r = mysqli_query($conn,$sql) or trigger_error("Query:$sql\n<MySQL Error: " . mysqli_error($conn));

    if(@mysqli_num_rows($r) == 1){
        list($sub, $p, $pd) = mysqli_fetch_array($r, MYSQLI_NUM);
    }
    # JW - and if it is found then the username and password is assigned to the global $_SESSION variables
    if($sub == $subject && $p == $post){

        $_SESSION['subject'] = $sub;
        $_SESSION['post'] = $p;
        $_SESSION['pDate'] = $pd;    

    }

}
header("Location: ../forum.php");

?>