<?php
    
    $fullname = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $user = 'root';
    $pass = '';
    $db = 'contactus';

    $conn = new mysqli("localhost", $user, $pass, $db) or die("Unable to Connect contactusdb");

    $sql = "insert into contactus(Name,Email,Message) values('$fullname','$email','$message')";
	
	if(mysqli_query($conn,$sql)){
		echo"<script>alert ('Record inserted successfully!!!')</script>";
		
	}
	else{
		echo"<script>alert ('Error in inserting records!!!')</script>";
	}
	
	mysqli_close($conn);
    header("Location: ../msgsent.html");
     
?>