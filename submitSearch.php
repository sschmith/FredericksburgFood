<!doctype html>

<html lang="en-US">
<head>
<meta charset="UTF-8" />
<title>My BLog</title>
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

</p>
<nav id="sitenav">
<ul>
<li class="current"><a href="index.php">Home</a></li>
<li><a href="contact.php">Make A Post</a></li>

</ul>

</nav>
</section>
<header id="pageheader">
<h1>
fred<span>food</span>
</h1>
<div id="search">

<form action="submitSearch.php" method="post">
<div class="searchfield">
<input type="text" name="search" id="s">
</div>
<div class="searchbtn">
<input type="image" src="images/searchbtn.png" name=searchbutton id=searchbutton alt="search">
</div>

</form>

</div>
</header>
<div id="contents">
<section id="main">
<div id="leftcontainer">
<h2 class="mainheading">
Search Results

</h2>
<?php
$db = mysqli_connect('localhost', 'root', '', 'testFood');

$searchTerms = $_POST['search'];

$query = "SELECT * FROM blogs ORDER BY Date";
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
