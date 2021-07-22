<?php
    session_start();
    # JW - including the dbh.php file allows the page to use the $conn variable and the connection to the database
    include_once 'dbh.php';
    # JW - This assigns the info from the login.html/php page to variables after submit button is pressed
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    
    # JW - simple validation code to make sure all fields have been entered
    if(!empty($_POST['username'])){
        $e = mysqli_real_escape_string($conn, $_POST['username']);
    } else {
        $e = FALSE;
        echo '<p> class="error"> You forgot to enter your email address!</p>';
    }

    if(!empty($_POST['pwd'])){
        $p = trim($_POST['pwd']);
    } else {
        $p = FALSE;
        echo '<p> class="error" You forgot to enter your password!</p>';
    }

    if($e && $p) {
        # JW - this code connects to the database and makes a query to determine whether the username and password has been registered
        $sql = "SELECT username, password FROM users WHERE username = '$e'";
        $r = mysqli_query($conn,$sql) or trigger_error("Query:$sql\n<MySQL Error: " . mysqli_error($conn));

        if(@mysqli_num_rows($r) == 1){
            list($uid, $pass) = mysqli_fetch_array($r, MYSQLI_NUM);
        }
        # JW - and if it is found then the username and password is assigned to the global $_SESSION variables
        if($uid == $username && $pass == $pwd){

            $_SESSION['username'] = $username;
            $_SESSION['pwd'] = $pwd;
        

            header("Location: ../template.php");
        }
    
    }

    
?>