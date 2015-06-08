<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>

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

$dbquery = 'SELECT * FROM login';

$dbresult = mysql_query ( $dbquery, $dbhandle );

if ($dbresult == false) {
	die ( "Unable to to perform query<br>" );
}

$listhandle = mysql_list_fields ( $mysql_database, 'login', $dbhandle );
$numfields = mysql_num_fields ( $listhandle );

$_SESSION ['LoggedIn'] = false;

while ( $dbrow = mysql_fetch_array ( $dbresult, MYSQL_ASSOC ) ) {
	$name = $_POST ['name'];
	if (array_values ( $dbrow )[0] == $name && array_values ( $dbrow )[1] == $_POST ['pswd']) {
		setcookie ( 'username', $name );
		$_SESSION ['user'] = $name;
		$_SESSION ['LoggedIn'] = true;
		break;
	}
}
?>

<div class=".header">
<?php include 'header.php';?>
</div>

<body>
	<div id="form_container1">	
<?php
if ($_SESSION ['LoggedIn']) {
	echo "<span id='hello'>Hello " . $_SESSION ['user'] . "!</span>";
	?>
		<br> <br> <br> <a href="index.php">Home</a> <br> <br> <a
			href="account.php">View account details</a>
<?php
} else {
	echo "Username or password is incorrect<br><br>";
	$_SESSION ['LoggedIn'] = false;
	?>
		<a href="index.php">Home</a> <br> <br> <a href="login.php">Back to
			Login</a> 
	<?php
}
?>
</div>

</body>
<img id="bottom" src="images/bottom.png" alt="">
<div class="footer">
	<?php include 'footer.php';?>
	</div>
</html>