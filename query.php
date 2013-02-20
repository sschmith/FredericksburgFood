
<!doctype html>

<html lang="en-US">
<head>
<meta charset="UTF-8" />
<title>Make A Post</title>
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
Put your Caption of Phone Number // +123 456789
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
silver<span>blog</span>
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
  <h2>You have submitted a post</h2>

 <?php
$db = mysqli_connect('localhost', 'root', '', 'blog_posts');
 $authorname = $_POST['author'];
 $date = date("Y-m-d");
 $content = $_POST['comment'];

 $query = "INSERT INTO blogs (Name, Date, Post_Content) VALUES ('$authorname', '$date', '$content')";
 $sql = mysqli_query($db, $query);
 ?>
   
</div>
</section>
<section id="sidebar">
<div id="sidebarwrap">
<h2>About SilverBlog</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a diam eget velit fringilla consequat. Duis nec justo urna, at tempus augue. Curabitur tristique, mi vitae ultrices lacinia, ante odio auctor odio, quis bibendum nulla augue quis diam. Aenean commodo justo ac leo cursus porttitor. </p>

<h2>Categories</h2>
<ul>

	<li><a href="#">Web Design</a>(4)</li>
	<li><a href="#">Graphics Design</a>(8)</li>
	<li><a href="#">Computers</a>(12)</li>
	<li><a href="#">Typography</a>(3)</li>
	<li><a href="#">Photogrphy</a>(4)</li>
	<li><a href="#">Mathematics</a>(5)</li>
	<li><a href="#">General News</a>(24)</li>
	<li><a href="#">Music and Entertainment</a>(1)</li>


</ul>
<h2>Latest Posts</h2>

<ul>

	<li><a href="#">Web Design</a></li>
	<li><a href="#">Graphics Design</a></li>
	<li><a href="#">Computers</a></li>
	<li><a href="#">Typography</a></li>
	<li><a href="#">Photogrphy</a></li>
	<li><a href="#">Mathematics</a></li>
	<li><a href="#">General News</a></li>
	<li><a href="#">Music and Entertainment</a></li>


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
