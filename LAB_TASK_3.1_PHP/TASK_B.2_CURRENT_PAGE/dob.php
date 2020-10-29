<?php

  if(isset($_POST['submit'])){
	$dob = $_POST['dob'];
	echo $dob;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Date of Birth</title>
</head>
<body>
	<form method="post" action="dobcheck" >
		<fieldset>
			<legend>
				Date of Birth

			</legend>
			 
			    <input type="date" name="dob"> <br/>
			    <input type="submit" name="url" value="submit"> <br/>
			
		</fieldset>
		
		
	</form>
</body>
</html>