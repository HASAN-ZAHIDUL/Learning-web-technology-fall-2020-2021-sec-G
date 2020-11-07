<!DOCTYPE html>
<html>
<head>
	<title>name</title>
</head>
<body>
	<form method="post"  >
		
			
				
				
			
			Name<br/>
			<input type="text" name="Name"> <br/>
			<br>
		
		    <input type="submit" name="url" value="Submit"> <br/>
	
		
		
	</form>
</body>
</html>

<?php
      if(isset($_POST['Submit']))
      {
      	if (empty($_POST['Name'])) {
      		echo "Name Field is completely empty! Please type your name.";
      	}
      	else
      	{
      		$name=$_POST['Name'];
      		if (str_word_count($name) >=2 && ctype_alpha($name[0]) && ctype_alpha(str_replace(" ","",$name)))
      		{


      		}
      		else if  
      			
      		
      	}

      }
      




?>


