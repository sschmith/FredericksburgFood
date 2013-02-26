<!doctype html>

<html lang="en-US">
<?php
 			require($DOCUMENT_ROOT . "includes/header.php");
?>
<div id="contents">
<section id="main">
<section id="featured">
<h2 class="ftheading">Featured</h2>
<div class="ftwrap">
<div class="ftimg">

  <img src="images/img1.jpg" width="204" height="128" alt="img1"></div>
  <div class="fttxt">
  <h3>Log In</h3>
  <form action="submitLogin.php" method="post">
  <table>
  <tr><td>Username</td><td><input type=text name=login id=login size=20/></td></tr>
  <tr><td>Password</td><td><input type=password name=password id=password size=20/></td></tr>
  <tr><td><input type="submit" value="Log In"/ style="height: 25px; width: 100px" ></tr></td>
  </table>
  </div>
  </div>
</section>
<div id="leftcontainer">
<h2 class="mainheading">
News

</h2>
<!-- LOGIN CODE -->
<?php
	$db = mysqli_connect('localhost','root','','testFood');
	$uname = $_POST['login'];
	$upass = $_POST['password'];

	// Check to see if the username exists
	$query = "SELECT username,password FROM users WHERE username='$uname'";
	$result = mysqli_query($db, $query);
	$numRows = $result->num_rows;
	
	// If it doesn't exist, tell the user.
	if($numRows == 0)
	{
		echo "<p>Login failed. User $uname not found.</p>";
	}
	// If the username does exist, check the password.
	else
	{
		$row = mysqli_fetch_array($result);
		$serverside_pass = $row['password'];
		
		// Successful login
		if($upass == $serverside_pass)
		{
			echo "<p>Login succeeded.</p>";
			$query2 = "UPDATE users SET logged_in=1 WHERE username='$uname'";
			$result2 = mysqli_query($db, $query2);
		}
		// Wrong password
		else
		{
			echo "<p>Password incorrect.";
		}
	}
?>

<div class="wp-pagenavi">
<span class="current">1</span><a href="/page/2/" title="2">2</a><a href="/page/3/" title="3">3</a><a href="/page/4/" title="4">4</a><a href="/page/5/" title="5">5</a><a href="/page/6/" title="6">6</a><a href="/page/7/" title="7">7</a><a href="/page/8/" title="8">8</a><a href="/page/2/">Next &raquo;</a><span class="extend">...</span><a href="/page/27/" title="Last &raquo;">Last &raquo;</a></div>
    <div class="clear"></div>
</div>
</section>
<section id="sidebar">
<div id="sidebarwrap">
<h2>About FredFood</h2>
<p> FredFood gives you an avenue to review your favorite restaurants in the Fredericksburg, VA area. Share it with your friends!</p>

<h2>Categories</h2>
<ul>

	<li><a href="#">Restaurant Reviews</a></li>
	<li><a href="#">User Profiles</a></li>


</ul>
<h2>Latest Posts</h2>

<ul>

	<li><a href="#">Set this to auto-update with new stories</a></li>


</ul>


</div>
</section>



<div class="clear"></div>
</div>

</div>
<footer id="pagefooter">
<div id="footerwrap">
<div class="copyright">
2010 &copy; Your Copyright Information Goes Here
</div>
<div class="credit">
<a href="http://cssheaven.org" title="Downlaod Free CSS Templates">Website Template</a> by CSSHeaven.org </div>
</div>
</footer>
</body>
</html>
