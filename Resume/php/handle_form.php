<!doctype html>
<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <title>
            Form Feedback
        </title>
    </head>
    <body>
        <?php # Script 2.2 - handle_form.php

$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$comments = $_REQUEST["comments"];

echo "<p>Thank you, <strong>$name</strong>, for the following comments:</p>
<pre>$comments</pre>
<p>We will reply to you at <em>$email</em>.</p>\n";
?>
    </body>
</html>