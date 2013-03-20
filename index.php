<!doctype html>

<html lang="en-US">
<?php
 			require("includes/header.php");
?>
<div id="leftcontainer">
<h2 class="mainheading">
News

</h2>
<p>  </p>
<?php

$db = mysqli_connect('localhost', 'root', '', 'restaurant_reviews');
$query = "SELECT username, Review_Text, Name FROM user_info INNER JOIN 
	reviews ON user_info.user_id = authorid INNER JOIN restaurants ON 
	restaurants.id = Restaurant_ID";
$result = mysqli_query($db, $query);
while($row = mysqli_fetch_array($result))
{
$author = $row['username'];
$rest = $row['Name'];
$review = $row['Review_Text'];

echo "<article class=\"post\">";

echo $author . ' said: ' . $review . 'about ' . $rest ;


}

?>

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
