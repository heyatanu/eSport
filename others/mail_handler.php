<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='atanud662@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."PUBG ID NAME :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo '<h1>YOUR PASSWORDIS:123456----------THANKS FOR JOINING GO TO LOBBY AND WAIT------
			<a href="lobby.html">Go To The Lobby By Click Here</a></h1>';
		}
		else{
			echo "Something went wrong!";
		}
	}
?>