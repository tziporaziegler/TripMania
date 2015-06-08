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
	$filename = 'tripmania.sql';
	$mysql_host = 'localhost';
	$mysql_username = 'root';
	$mysql_password = '';
	$mysql_database = 'tripmania';
	
	// Connect to MySQL server
	$dbhandle = mysql_connect ( $mysql_host, $mysql_username, $mysql_password ) or die ( 'Error connecting to MySQL server: ' . mysql_error () );
	// Select database
	$db = mysql_select_db ( $mysql_database ) or die ( 'Error selecting MySQL database: ' . mysql_error () );
	
	$place = $_SESSION ['code'] = $_GET ['new_session_variable'];
	
	$dbquery = 'SELECT * FROM places';
	
	$dbresult = mysql_query ( $dbquery, $dbhandle );
	
	if ($dbresult == false) {
		die ( "Unable to to perform query<br>" );
	}
	
	$listhandle = mysql_list_fields ( $mysql_database, 'places', $dbhandle );
	$numfields = mysql_num_fields ( $listhandle );
	$found = false;
	
	$code = "";
	while ( $dbrow = mysql_fetch_array ( $dbresult, MYSQL_ASSOC ) ) {
		if ($place == array_values ( $dbrow )[0]) {
			$code = ( string ) array_values ( $dbrow )[1];
		}
	}
	
	$dbquery = "SELECT * FROM trip where code = '" . mysql_real_escape_string ( $code ) . "'";
	
	$dbresult = mysql_query ( $dbquery, $dbhandle );
	
	if ($dbresult == false) {
		die ( "Unable to to perform query<br>" );
	}
	
	$listhandle = mysql_list_fields ( $mysql_database, 'trip', $dbhandle );
	$numfields = mysql_num_fields ( $listhandle );
	$found = false;
	
	while ( $dbrow = mysql_fetch_array ( $dbresult, MYSQL_ASSOC ) ) {
		$id = array_values ( $dbrow )[0];
		$price = array_values ( $dbrow )[2];
		?>
		<div class="trips">
		<ul>
			<li><span id="id"><a
					href="reserve.php?new_session_variable1=<?php echo $id?>">Trip ID: <?php echo $code; echo $id. "<br>";?></a></span></li>
			<li class="cost"><span>$<?php echo $price;?></span></li>
		</ul>
	</div>
		
		<?php
	}
	
	mysql_close ( $dbhandle );
	?>
					
</body>

<div class="footer">
<?php include 'footer.php';?>
</div>

</html>