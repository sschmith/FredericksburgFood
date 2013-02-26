
<!doctype html>

<html lang="en-US">
<head>
<meta charset="UTF-8" />
<title>Success!</title>
<link href="style.css" rel="stylesheet" type="text/css">
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if IE 6]>
<script src="js/belatedPNG.js"></script>
<script>
	DD_belatedPNG.fix('*');
</script>
<![endif]-->
<script src="js/jquery-1.4.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/loopedslider.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
	$(function(){
		$('#slider').loopedSlider({
			autoStart: 6000,
			restart: 5000
		});

	});
</script> 
</head>

<body>
<div id="bodywrap">
<section id="pagetop">
<p id="siteinfo">
You have successfully added a new restaurant to the FredFood network!
</p>

<nav id="sitenav">
<ul>
<li class="current"><a href="index.php">Home</a></li>
<li><a href="contact.php">Review Another Restaurant</a></li>

</ul>

</nav>
</section>
<header id="pageheader">
<h1>
Fredericksburg<span>Food</span>
</h1>
<div id="search">

<form action="#">

<div class="searchfield">


<input type="text" name="search" id="s">

</div>
<div class="searchbtn">
<input type="image" src="images/searchbtn.png" alt="search">
</div>

</form>

</div>
</header>
<div id="contents">
<section id="main">
<div id="leftcontainer">
<section id="normalheader" class="header2">

</section>
  <h2>You have added a new restaurant!</h2>

 <?php
$db = mysqli_connect('localhost', 'root', '', 'restaurant_reviews');
 $authorname = $_POST['author'];
 $RestName = $_POST['RestName'];
 $StreetNum = $_POST['address1'];
 $StreetName = $_POST['address2'];
 $local = $_POST['location'];
 $phone = $_POST['phone'];
 $content = $_POST['comment'];

 $query = "INSERT INTO restaurants (Name, Street_Number, Street_Name, Area, Phone) VALUES ('$authorname', '$RestName', '$StreetNum', '$StreetName', '$local', '$phone')";
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