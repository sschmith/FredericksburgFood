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
</section>
<section id="sidebar">
<?php
	include("includes/footer.php");
	?>