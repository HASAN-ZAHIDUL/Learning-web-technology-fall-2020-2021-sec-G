<?php

  if(isset($_POST['submit'])){
	$gender = $_POST['gender'];
	echo $gender;
}
?>


<html>
<head>
	<title>Gender</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>
				Gender

			</legend>
			 
			    <input type="radio" name="gender">Male 
		        <input type="radio" name="gender">Female 
		        <input type="radio" name="gender">Other <br/>
			
		</fieldset>
		<input type="submit" name="url" value="submit"> <br/>
		
	</form>
</body>
</html>