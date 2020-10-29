<?php

    if(isset($_POST['submit'])){
	  $name = $_POST['name'];
	  echo $name;
}
?>






<!DOCTYPE html>
<html>
<head>
	<title>name</title>
</head>
<body>
	<form method="_POST" >
		<fieldset>
			<legend>
				Name<br/>
				
			</legend>
			<input type="text" name="name"> <br/>
		
		    <input type="submit" name="url" value="submit"> <br/>
		</fieldset>
		
		
	</form>
</body>
</html>