<?php
 session_start();

 $errors = ["Name" => "", "Email" => "","Phonenumber" => "", "Username" => "", "Password" => "", "ConfirmPassword" => "", "Genders" => ""];
 if(!isset($_POST["submit"]))
 {
 	echo"Not found";
 }
 
 if(empty($_POST['Name']))
 {
 	$errors["Name"] = "*Required";
 }
 elseif (!isValidName($_POST["Name"]));
 {
 	$errors["Name"] = "*Invalid";
 }
 if(empty($_POST['Email']))
 {
 	$errors["Email"] = "*Required";
 }
 elseif (!isValidEmail($_POST["Email"]));
 {
 	$errors["Email"] = "*Invalid";
 }
 if(empty($_POST["Phonenumber"]))
 {
 	$errors["Phonenumber"] = "*Required";
 }
 elseif (!isValidphonenumber($_POST["Phonenumber"]));
 {
 	$errors["Phonenumber"] = "*Invalid";
 }

 if(empty($_POST['Username']))
 {
 	$errors["Username"] = "*Required";
 }
 elseif (!isValidUsername($_POST["Username"]));
 {
 	$errors["Username"] = "*Invalid";
 }
 if(empty($_POST["Password"]))
 {
 	$errors["Password"]="*Required";
 }
 elseif (empty($_POST["ConfirmPassword"]));
 {
 	$errors["ConfirmPassword"]="*Invalid";
 }
 else
 {
 	if(!isValidPassword($_POST["Password"],$_POST["ConfirmPassword"]))
 	{
 		$errors["Password"] = "*Your Password doesm't match"
 	}
 }

?>