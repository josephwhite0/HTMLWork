<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            Predefined variables
        </title>
    </head>
    <body>
        <?php
            #Script 1.5 - predefined.php

            $file = $_SERVER['SCRIPT_FILENAME'];
            $user = $_SERVER['HTTP_USER_AGENT'];
            $server = $_SERVER['SERVER_SOFTWARE'];

            echo "<p>You are running the file:<br /><strong>$file</strong>.</p>\n";
            echo "<p>You are viewing this page using:<br><strong>$user</strong>.</p>\n";
            echo "<p>This server is running:<br><strong>$server</strong>.</p>\n";
        ?>
    </body>
</html>