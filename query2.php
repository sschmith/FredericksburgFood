
<!doctype html>

<html lang="en-US">
<?php
 			require($DOCUMENT_ROOT . "includes/header.php");
?>
<div id="contents">
<section id="main">
<div id="leftcontainer">
<section id="normalheader" class="header2">

</section>
  <h2>You have added a new restaurant!</h2>

 <?php
$db = mysqli_connect('localhost', 'root', '', 'restaurant_reviews');
 $authorname = $_SESSION['username'];
 $RestName = $_POST['RestName'];
 $StreetNum = $_POST['address1'];
 $StreetName = $_POST['address2'];
 $local = $_POST['location'];
 $phone = $_POST['phone'];
 $content = $_POST['comment'];

 $query = "INSERT INTO restaurants (Name, Street_Number, Street_Name, Area, Phone) VALUES ('$RestName', '$StreetNum', '$StreetName', '$local', '$phone')";
 $sql = mysqli_query($db, $query);
 $query = "INSERT INTO reviews (Restaurant_Name, Reviewed_By, Review_Text ) VALUES ('$RestName', '$authorname', '$content')";
 $sql = mysqli_query($db, $query);
 ?>
   
</div>
</section>
<section id="sidebar">
<div id="sidebarwrap">
<h2>From FredFood</h2>
<p>We appreciate you taking the time to help keep our site up-to-date with all the latest and greatest from the culinary world! Bon Apetite! </p>

<h2>What Else Is New?</h2>
<ul>

	<li><a href="#">Most Recent Review Posts</a></li>



</ul>
<h2>Top 10</h2>

<ul>

	<li><a href="#">10 top rated restaurants on FredFood</a></li>


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