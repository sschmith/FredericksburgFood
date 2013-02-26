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