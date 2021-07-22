<!-- JW - when using php and html together on the same page it should be saved as a .php file. 
PHP gets confused otherwise. Session_start() should be at the 
top of every page we make. It is what makes the login system work by assigning global variables  -->
<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>News Site Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,600;1,100;1,200;1,300&display=swap" rel="stylesheet">
  </head>
  <body>

<header> The Adventurer's Guild
<!-- JW - This bit of code creates a welcome message for the user after logging in by assigning the username to the global variable $_SESSION -->
<?php if(isset($_SESSION['username'])){echo '<br>Welcome, ' . $_SESSION['username'];} ?> 
</header>



<!--The nav tag contains all our major pages and should be present on every single page of the website.-->
<nav>


<!--Home page, and the basic launchpoint. Articles should be placed here as new publications, as well as forum threads that are the most recent.-->
<li><a href="index.html">Home</a></li>
<!--Main news hub - contains stylized graphics that function as links to news stories.-->
<li><a href="news.html">News</a></li>
<!--Forum home page. Contains a directory of forum threads.-->
<li><a href="forum.php">Forum</a></li>
<!--Login page. Contains PHP tools for user account access. Could be replaced with a more complex PHP script that can be displayed over other pages.-->
<!-- JW - This code makes the login and registration links disappear once the user logs in by checking whether or 
not the $_SESSION['username'] variable is set-->
<?php if(!isset($_SESSION['username']))
echo '<li><a href="login.php">Login</a></li>
<!--Registration page. Split off from logins to make the PHP needs more simple. Cannot be replaced, as sign-up process should be isolated for user clarity.-->
<li><a href="register.php">Register</a></li>'; ?>

</nav>

<!--I've taken the liberty of adding a new page to this project for forum posting rules. This will help us set a tone for the site as a whole, and increase the presentation quality. 
This should HOPEFULLY not have any PHP involved in it, so I will prioritize completing a prototye of it and sending it to the CSS team for styling.-->
<section id = "rules">
<p><a href="rules.html">Posting Guidelines</a></p>
</section>
<table>
<th>Thread</th>
<th>Created By</th>
<th>Posts</th>
<th></th>
<!--The rest of this table will be fleshed out once we have achieved a better understanding of how PHP will be integrated. 
For now, I will leave some notes: -->
    
<!-- For All Teams: The traditional character limit for a thread title is 85 characters. 
This will be important for both the database and styling.-->
    
<!-- For PHP Team: I have elected not to bother including the author of the last post in the thread, as this will likely just mean more work for you for no real benefit to the user. 
The date of the last post should be able to be extracted from the date/time of the device that posted it. 
I do not know if we wish to give a user the option to display a changing amount of threads per page (10, 25, 50, etc.), but if we do, we will need to create a simple control, in the form of a List Box with set options. 
That choice would then be plugged into whatever loads the forum table to determine its' size. If not, we should assume a standard number of displayed threads at ten.-->
    
<!-- For CSS Team: The styling of these viewports will likely be the greatest issue, as opposed to general styling issues. 
On tablet viewports, thread titles will need to be able to move to a multi-line formatting so that other table elements can be displayed properly, and on mobile viewports, it will need to have a single-line display that is over the other elements. 
This may even require us to create two rows for each thread - one containing the title, and the other containing everything else. 
Such an alternative will also need unqiue styling to have these paired rows appear as a seamless whole. -->
</table>

<div id="hero" class="tab-desk">
      <img src="images/tavern.jpg" alt="fantasy tavern">
</div>

<div id="test-text" class="tab-desk">
	<p>This is here to test fonts</p>
	
</div>


<footer>
      <p><a href="mailto:squidwardnose@gmail.com" id="contact-link">Contact Us</a></p>
      <p id="copyright">&copy; Copyright 2021. All Rights Reserved.</p>
    </footer> 
    </body>
</html>