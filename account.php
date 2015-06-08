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
	<div id="form_container1">
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

$dbquery = "SELECT * FROM user where username = '" . mysql_real_escape_string ( $_SESSION ['user'] ) . "'";

$dbresult = mysql_query ( $dbquery, $dbhandle );

if ($dbresult == false) {
	die ( "You do not have any trips currently reservered.<br>" );
} else {
	?>
	<h2>CURRENT TRIPS:</h2>
	<?php
}

$listhandle = mysql_list_fields ( $mysql_database, 'user', $dbhandle );

while ( $dbrow = mysql_fetch_array ( $dbresult, MYSQL_ASSOC ) ) {
	echo array_values ( $dbrow )[1] . "<br><br>";
}

?>
<a href="index.php?new_session_variable2=logout">Log out</a>
	</div>
</body>

<div class="footer">
<?php include 'footer.php';?>
</div>

</html>