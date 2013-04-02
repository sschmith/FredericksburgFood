
<!doctype html>

<html lang="en-US">
<?php
 			include("includes/header.php");
?>
<div id="leftcontainer">
<section id="normalheader" class="header2">

</section>
  <h2>Your review has been submitted.</h2>

 <?php
	$db = mysqli_connect('localhost', 'Reviewer', 'food', 'restaurant_reviews');
	
	$rest_name = $_POST['restaurantName'];
	$authorname = $_SESSION['username'];
	$numStars = $_POST['qRating'];
	$priceRating = $_POST['vRating'];
	$content = $_POST['reviewText'];

	$query = "INSERT INTO reviews VALUES ('$rest_name','$authorname',$numStars,$priceRating,'$content')";
	$sql = mysqli_query($db, $query);
 ?>
   
</div>
</section>
<section id="sidebar">
<?php
	include("includes/footer.php");
	?>