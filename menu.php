<!DOCTYPE>
<html>
<head>
<link type="text/css" rel="stylesheet" href="styles.css" />
<script src="jquery.min.js"></script>
<script src="menu.js"></script>
<title>TripMania</title>
</head>

<body>
	<nav class=".header">
		<ul>
			<li><img src="images/logo.png" alt="no image" id="mainImg" /></li>
			<li><a href="index.php">HOME </a></li>
			<li>DESTINATIONS
				<ul>
				<?php
				if (session_status () == PHP_SESSION_NONE) {
					session_start ();
				}
				
				$filename = 'tripmania.sql';
				$mysql_host = 'localhost';
				$mysql_username = 'root';
				$mysql_password = '';
				$mysql_database = 'tripmania';
				
				// Connect to MySQL server
				$dbhandle = mysql_connect ( $mysql_host, $mysql_username, $mysql_password ) or die ( 'Error connecting to MySQL server: ' . mysql_error () );
				// Select database
				$db = mysql_select_db ( $mysql_database ) or die ( 'Error selecting MySQL database: ' . mysql_error () );
				
				// Temporary variable, used to store current query
				$templine = '';
				// Read in entire file
				$lines = file ( $filename );
				// Loop through each line
				foreach ( $lines as $line ) {
					// Skip it if it's a comment
					if (substr ( $line, 0, 2 ) == '--' || $line == '')
						continue;
						
						// Add this line to the current segment
					$templine .= $line;
					// If it has a semicolon at the end, it's the end of the query
					if (substr ( trim ( $line ), - 1, 1 ) == ';') {
						// Perform the query
						mysql_query ( $templine ) or print ('Error performing query \'<strong>' . $templine . '\': ' . mysql_error () . '<br /><br />') ;
						// Reset temp variable to empty
						$templine = '';
					}
				}
				
				$dbquery = 'SELECT * FROM places';
				
				$dbresult = mysql_query ( $dbquery, $dbhandle );
				
				if ($dbresult == false) {
					die ( "Unable to to perform query<br>" );
				}
				
				$listhandle = mysql_list_fields ( $mysql_database, 'places', $dbhandle );
				$numfields = mysql_num_fields ( $listhandle );
				$found = false;
				
				while ( $dbrow = mysql_fetch_array ( $dbresult, MYSQL_ASSOC ) ) {
					$place = array_values ( $dbrow )[0];
					?>
	
	
	<li><a href="places.php?new_session_variable=<?php echo $place?>"
						id="destination"><?php echo $place;?></a></li>			
	
	<?php
				}
				
				?>

				</ul>
			</li>
			<li><a href="form.php">CONTACT US</a></li>
		<?php
		if (isset ( $_SESSION ['user'] )) {
			?>
			<li><a href="account.php">HI <?php echo strtoupper($_SESSION ['user'])?>!</a></li>
			<?php
		} else {
			?>
			<li><a href="login.php">LOGIN </a></li> <?php
		}
		?>

		</ul>
	</nav>
</body>
</html>