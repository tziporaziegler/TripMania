<!DOCTYPE>
<html id="login">
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="styles.css">

</head>

<body>
	<div id="form_container">
		<h1>
			<a>Login</a>
		</h1>
		<form class="appnitro" method="post" action="login_sql.php">
			<div class="form_description">
				<h2>Login</h2>
			</div>
			<table id="user_table">
				<tr>
					<td>
						<ul>

							<li><label class="description">Username </label>
								<div>
									<input name="name" class="element text medium" type="text"
										maxlength="50" value="" />
								</div>
							
							<li><label class="description">Password </label>
								<div>
									<input name="pswd" class="element text medium" type="password"
										maxlength="50" value="" />
								</div></li>

							<li class="buttons"><input type="hidden" name="form_id"
								value="1016004" /> <input id="saveForm" class="button_text"
								type="submit" name="submit" value="Submit" /></li>
						</ul>
					</td>
					<td><a href="newUser.php">New User</a></td>
				</tr>
			</table>
		</form>
	</div>
	<img id="bottom" src="images/bottom.png" alt="">
	<div class="footer">
<?php include 'footer.php';?>
</div>
</body>
</html>