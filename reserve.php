<!DOCTYPE>
<html>
<head>
<link type="text/css" rel="stylesheet" href="styles.css" />
<title>Miami</title>
</head>

<div class=".header">
<?php include 'header.php';?>
</div>

<body>
	<?php
	if (isset ( $_SESSION ['user'] )) {
		$filename = 'tripmania.sql';
		$mysql_host = 'localhost';
		$mysql_username = 'root';
		$mysql_password = '';
		$mysql_database = 'tripmania';
		
		// Connect to MySQL server
		$dbhandle = mysql_connect ( $mysql_host, $mysql_username, $mysql_password ) or die ( 'Error connecting to MySQL server: ' . mysql_error () );
		// Select database
		$db = mysql_select_db ( $mysql_database ) or die ( 'Error selecting MySQL database: ' . mysql_error () );
		
		$tripid = $_GET ['new_session_variable1'];
		
		$dbquery = "INSERT INTO user (username, tripid) VALUES ('" . mysql_real_escape_string ( $_SESSION ['user'] ) . "', $tripid)";
		
		$dbresult = mysql_query ( $dbquery, $dbhandle );
		
		if ($dbresult == false) {
			die ( "Unable to to perform query<br>" );
		} else {
			?>
						<div id="form_container1">
						Thank you for reserving trip # <?php echo $tripid ?>. 
						<br> <br> We hope you enjoy your trip! <br> <br> <a
			href="index.php">Home</a> <br> <br> <a href="account.php">View
			account details</a>
	</div>
						
					<?php
		}
	} else {
		?>
		<div id="form_container1">
		<a href="login.php">GO TO LOGIN</a>
	</div>
		<?php
	}
	?>
					
</body>

<div class="footer">
<?php include 'footer.php';?>
</div>

</html>