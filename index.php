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
</div><br/><br/><br/>
<b>Search by: <input type="radio" name="searchClass" value="Name" checked>Name</input>&nbsp;&nbsp;<input type="radio" name="searchClass" value="Style">Style</input>
&nbsp;&nbsp;<input type="radio" name="searchClass" value="Rating">Rating</input></b>

</form>

</div>
</header>
<div id="contents">
<section id="main">
<section id="featured">
<h2 class="ftheading">Featured</h2>
<div class="ftwrap">
<div class="ftimg">

  <img src="images/img1.jpg" width="204" height="128" alt="img1"></div>
  <!-- LOGIN HERE -->
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
<p> We could add news updates here at some point, i.e. "user x gave 5 stars to burger king," or it could be used by admins (easier) </p>
<?php
/*
$db = mysqli_connect('localhost', 'root', '', '');
$query = "SELECT * FROM blogs ORDER BY Date";
$result = mysqli_query($db, $query);
while($row = mysqli_fetch_array($result))
{
$author = $row['Name'];
$currentdate = $row['Date'];
$blog = $row['Post_Content'];

echo "<article class=\"post\">";
echo "<header><h3>$author</h3><p class=\"postinfo\">Published on <time>$currentdate</time> under <a href=\"#\">CSS Templates </a></p></header>";
echo "<p>$blog</p><footer><span class=\"author\">$author</span><span class=\"permalink\"><a href=\"#permalink\">Read Full</a></span>";
echo "<span class=\"comments\"><a href=\"#\">0 Comments</a></span></footer></article>";
}
*/
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
