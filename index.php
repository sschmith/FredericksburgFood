<!doctype html>

<html lang="en-US">
<?php
 			include("includes/header.php");
?>
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
</section>
<section id="sidebar">
<?php
	include("includes/footer.php");
	?>