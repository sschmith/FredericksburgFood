<!doctype html>

<html lang="en-US">
<?php
 			require("includes/header.php");
?>

<?php	
	$db = mysqli_connect('localhost', 'root', '', 'restaurant_reviews');

	$restName = $_POST['restName'];
	
	echo "<div id=\"leftcontainer\"><h2 class=\"mainheading\">Reviews for <b>$restName</b></h2>";
	
	$query = "SELECT * FROM reviews WHERE Restaurant_Name='$restName'";
	$result = mysqli_query($db, $query);
	
	while($row = mysqli_fetch_array($result))
	{
		$author = $row['Reviewed_By'];
		$numStars = $row['Num_Stars'];
		$priceRating = $row['Price_Rating'];
		$review = $row['Review_Text'];
		
		echo "<hr><table>";
		echo "<tr><td><b>Author</b>:</td><td>$author</td></tr>";
		echo "<tr><td><b>Quality</b>:</td><td>";
		
		for($i = 0; $i < $numStars; $i++)
		{
			echo "★";
		}
		echo "</td></tr>";
		echo "<tr><td><b>Value</b>: </td><td>";
		
		for($i = 0; $i < $numStars; $i++)
		{
			echo "★";
		}
		echo "</td></tr>";
		echo "<tr><td><b>Review</b>: </td>";
		echo "<td>$review</td></tr></table>";
	}
	echo "<hr>";
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
