
<!doctype html>

<html lang="en-US">
<?php
 			require("includes/header.php");
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

 $query = "INSERT INTO restaurants (Name, Street_Number, Street_Name, Area, Phone) VALUES ('$RestName', $StreetNum, '$StreetName', '$local', $phone)";
 $sql = mysqli_query($db, $query);
 
 if ( false===$sql ) 
 {
  printf("error: %s\n", mysqli_error($db));
}
 
 $query2 = "INSERT INTO reviews (Restaurant_Name, Reviewed_By, Review_Text ) VALUES ('$RestName', '$authorname', '$content')";
 $sql2 = mysqli_query($db, $query2);
 ?>
   
</div>
</section>
<section id="sidebar">
<?php
	include("includes/footer.php");
	?>