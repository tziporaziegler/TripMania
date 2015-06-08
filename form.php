<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FORM</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<div class=".header">
	<?php include 'header.php';?>
</div>

<body>

	<div id="formbox">
		<form method="post" id="testform" action="mail.php" target="_blank">

			<p>
				Name:<br> <input type="text" name="name" size="24" maxlength="40" />
				<br> <br> Email:<br> <input type="text" name="email" size="24"
					maxlength="40" /> <br> <br>
			
			
			<p>
				What are you?<br> Male<input type="radio" name="gender" value="male">
				Female<input type="radio" name="gender" value="female"> <br> <br>
				Comments/Questions:<br>
				<textarea name="problem" rows=6 cols=40>
</textarea>
			</p>



			<input type="reset" value="reset"> <input type="submit" name="submit"
				value="submit">

		</form>
	</div>

</body>

<div class="footer">
<?php include 'footer.php';?>
</div>

</html>
