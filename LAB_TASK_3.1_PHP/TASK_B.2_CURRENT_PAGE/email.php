<?php

  if(isset($_POST['submit'])){
	$email = $_POST['email'];
	echo $email;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>email</title>
</head>
<body>
	<form method="post" >
		<fieldset>
			<legend>
				Email<br/>
		
			</legend>
			 <input type="text" name="email"> <br>
		     <input type="submit" name="url" value="submit"> <br/>
			
		</fieldset>
		
	</form>
</body>
</html>