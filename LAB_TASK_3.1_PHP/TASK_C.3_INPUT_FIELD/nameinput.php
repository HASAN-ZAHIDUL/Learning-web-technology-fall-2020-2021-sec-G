






<!DOCTYPE html>
<html>
<head>
	<title>name</title>
</head>
<body>
	<form method="_POST">
		<fieldset>
			<legend>
				Name<br/>
				
			</legend>
			<input type="text" name="name" 
			value="<?php

    if(isset($_POST['submit'])){
	  $name = $_POST['name'];
	  echo $name;
}
?>">


		
		    <input type="submit" name="url" value="submit"> <br/>
		</fieldset>
		
		
	</form>
</body>
</html>