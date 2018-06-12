<?php
$host= "localhost";
		$dbUsername="root";
		$dbPassword='12$Muskan';
		$dbname="form";
		
		$conn= new mysqli($host, $dbUsername, $dbPassword, $dbname);
		
		if(mysqli_connect_error())
		{
			die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
		}
		else
		{
		$inUsername = $_POST["email"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[] 
	$inPassword = $_POST["password"]; 
	
 //Compare if the database has username and password entered by the user. Password has to be decrypted while comparing.
$query="select * from register where email='".$inUsername."' and password='".$inPassword."'";

 $result=mysqli_query($conn,$query); 

 if(!$result)
    die("Query Failed: " .  mysqli_error($conn));
 else{
     if(mysqli_num_rows($result)>0)
     {
        $_SESSION['username']=$inUsername;
        echo "welcome to php";
     }
    else
    {
       echo'You entered username or password is incorrect';
     }
 }
	}
   ?>