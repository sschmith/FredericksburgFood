
<!doctype html>

<html lang="en-US">
<head>
<meta charset="UTF-8" />
<title>Add A New Restaurant</title>
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
Don't see the restaurant you wanted? Add it here!
</p>
<nav id="sitenav">
<ul>
<li class="current"><a href="index.php">Home</a></li>
<li><a href="contact.php">Add your review!</a></li>

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
  <h2>Add Your Restaurant!</h2>

  <article class="post">

  <form action="query.php" method="post" class="form">
   <p class="textfield">
       <input name="author" id="author" value="" size="22" tabindex="1" type="text">
          <label for="author">
             <small>Author (required)</small>
          </label>
		  <input name="RestName" id="RestName" value="" size="22" tabindex="1" type="text">
          <label for="Restaurant Name">
             <small>Restaurant Name (required)</small>
          </label>
		  <input name="address1" id="address1" value="" size="22" tabindex="1" type="text">
          <label for="Address">
             <small>Street Number</small>
          </label>
		  <input name="address2" id="address2" value="" size="22" tabindex="1" type="text">
          <label for="Address">
             <small>Street Name</small>
          </label>
		  <input name="location" id="location" value="" size="22" tabindex="1" type="text">
          <label for="location">
             <small>City</small>
          </label>
		  <input name="phone" id="phone" value="" size="22" tabindex="1" type="text">
          <label for="phone">
             <small>Phone Number</small>
          </label>
   </p>
   <p>
       <small><strong>Your Thoughts?</strong> </small>
   </p>
   <p class="text-area">
       <textarea name="comment" id="comment" cols="50" rows="10" tabindex="4"></textarea>
   </p>
   <p>
       <input name="submit" id="submit" tabindex="5" type="image" src="images/submit.png">
       <input name="comment_post_ID" value="1" type="hidden">
   </p>
   <div class="clear"></div>
</form>
  
<!--Important--><div class="clear"></div>
</article>
</div>
</section>
<section id="sidebar">
<div id="sidebarwrap">
<h2>About FredFood</h2>
<p>Here you can find and create reviews for all your local restaurants and watering holes! </p>

<h2>Recently Added</h2>
<h2>Restaurant --> Stars (out of 10)</h2>
<ul>

	<li><a href="#">Restaurant1</a> 5</li>
	<li><a href="#">Restaurant2</a>8</li>
	<li><a href="#">Restaurant3</a>10</li>
	<li><a href="#">Restaurant4</a>4</li>
	<li><a href="#">Restaurant5</a>4</li>
	<li><a href="#">Restaurant6</a>5</li>
	<li><a href="#">Restaurant7</a>6</li>
	<li><a href="#">Restaurant8</a>1</li>


</ul>
<h2>Latest Reviews</h2>

<ul>

	<li><a href="#">Add Name and Review from 3 most recent DB entries</a></li>


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