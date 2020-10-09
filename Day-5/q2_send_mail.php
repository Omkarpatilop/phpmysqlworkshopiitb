
<html>
	<h1>FEEDBACK PORTAL</h1>
	<h4>
		<form action='q2_send_mail.php' method='POST' >
			Name :     <input type='text' name='name' maxlength='50' required><br><br>
		  Email id : <input type='email' name='mailid' required><br><br>
			Feedback : <br><textarea name='feedback' required rows='10' cols='40'></textarea><br><br>
			<input type='submit' name='submit' value='Submit Feedback'>
		</form>
	</h4>
</html>

<?php

if(@$_POST['submit'])
{
	$name = $_POST['name'];
	$mailid = $_POST['mailid'];
	$feedback = $_POST['feedback'];


  $feeder = "@gmail.com";

	$subject = "Thank you for submitting feedback";
	$body ="Hi $name!<br> Thank you for your valuable feedback. <br><br>Following is the copy of the feedback you provided: <br>$feedback";
	$headers = "From: $feeder";

	mail($mailid, $subject, $body, $headers);

	$admin = "@gmail.com";
	$subject = "Feedback from $name";
	$body = "Feedback: <br>Name: $name<br>Email id: $mailid<br>Feedback: <br>$feedback";

	mail($admin, $subject, $body, $headers);

	die("Thank you for your feedback");
}


?>
