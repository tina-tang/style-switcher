<?php 
/*
File name: form.php
File description: This file will process the corresponding HTML form "contact_form.html" .
Author: Tina Tang
Date: Jan 2014

*/


if(!($_POST["last"]))
{
     exit("Please type your last name");//if no lastname, displays warning 
}  
   

if(!($_POST["first"]))
{
    exit("Please type your first name"); //if no firstname, displays warning
}
  

if(!isset($_POST["age"]))
{
     exit("Please select your age group");//if age group not selected, displays warning 
} 

if(!isset($_POST["class"]))
{
     exit("Please pick a class that suits you best");//if not selected, displays warning 
}

if(($_POST["submit-button"]))// if submit button selected, displays message
 {
    echo "Thank you, your registration has been received.";

	/*
		echo $_POST["last"];
		echo $_POST["first"];
		echo $_POST["age"];
		echo $_POST["class"];
   */


 }



 
?>