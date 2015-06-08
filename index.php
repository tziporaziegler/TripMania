<!DOCTYPE>
<html>
<head>
<link type="text/css" rel="stylesheet" href="styles.css" />
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="slide_show.js"></script>
<title>TripMania</title>
</head>

<?php
if (session_status () == PHP_SESSION_NONE) {
	session_start ();
}

if (isset ( $_COOKIE ['username'] )) {
	unset ( $_COOKIE ['username'] );
	//$_SESSION ['user'] = $_COOKIE ['username'];
}

if (isset ( $_GET ['new_session_variable2'] )) {
	unset ( $_GET ['new_session_variable2'] );
	unset ( $_SESSION ['user'] );
	unset ( $_COOKIE ['username'] );
}
?>

<div class=".header">
<?php include 'header.php';?>
</div>

<body>
	<div id="main"></div>

	<section>
		<ul id="image_list">
			<li><a href="images/utah.png" title="Deer Creek State Park, Utah"></a></li>
			<li><a href="images/mountain.jpg"
				title="San Juan Mountains, Colorado"></a></li>
			<li><a href="images/skyline.jpg"
				title="New York City Skyline, New York"></a></li>
			<li><a href="images/fish.jpeg" title="Miami Extreme, Florida"></a></li>
			<li><a href="images/water.jpg" title="Lake Tahoe, California"></a></li>
		</ul>
		<p>
			<img src="images/utah.png" alt="image not found" id="image">
		</p>
		<h2 id="caption">Deer Creek State Park, Utah</h2>
	</section>
</body>

<h2>HI!</h2>

<div class="footer">
<?php include 'footer.php';?>
</div>

</html>