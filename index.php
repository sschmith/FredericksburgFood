<!doctype html>

<html lang="en-US">
<?php
 			include("includes/header.php");
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

echo $author . ' said: ' . $review . ' about ' . $rest ;


}

?>
<<<<<<< HEAD

</div>
=======
>>>>>>> 0bf610abc327813d44a10bd982d9d2ed8227a829
</section>
<section id="sidebar">
<?php
	include("includes/footer.php");
	?>
