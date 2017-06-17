<?php
if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['sa']) && isset($_POST['c']) && isset($_POST['st']) && isset($_POST['z']) && isset($_POST['m']) && isset($_POST['mc']) ){
	$n = $_POST['n']; // HINT: use preg_replace() to filter the data
	$e = $_POST['e'];

	$sa = $_POST['sa'];
	$c = $_POST['c'];
	$st = $_POST['st'];
	$z = $_POST['z'];
	$m = $_POST['m'];
	$mc = $_POST['mc'];
	
	
	
	$to = "neilfloyd99@gmail.com";	
	$from = $e;
	$subject = 'Contact Form Message';
	$message = '<b>Businsess Name:</b> '.$n.' <br><b>Email:</b> '.$e.' <br><b>Street Address:</b> '.$sa.' <br><b>City:</b> '.$c.' <br><b>State:</b> '.$st.' <br><b>Zip Code:</b> '.$z.' <br><b>Mobile Number:</b> '.$m.' <br><b>Mobile Carrier:</b> '.$mc.'';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "The server failed to send the message. Please try again later.";
	}
}
?>