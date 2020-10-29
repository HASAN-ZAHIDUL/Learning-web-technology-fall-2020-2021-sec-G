<html>
<head>
	<title>email</title>
</head>
<body>
	<form method="post" action="emailcheck.php">
		<fieldset>
			<legend>
				Email<br/>
		
			</legend>
			 <input type="text" name="email" value="<?php

  if(isset($_POST['submit'])){
	$email = $_POST['email'];
	echo $email;
}
?>"> <br>
		     <input type="submit" name="url" value="submit"> <br/>
			
		</fieldset>
		
	</form>
</body>
</html>