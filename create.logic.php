<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','calendar');

		$person = $db->escape_string($_POST["person"]);
		$day = $db->escape_string($_POST["day"]);
		$month = $db->escape_string($_POST["month"]);
		$year = $db->escape_string($_POST["year"]);


	// prepare insert instruction
	$sql = "insert into birthdays (person, day, month, year) values('$person','$day','$month','$year')";
	
	// execute insert instruction
	$result = $db->query($sql);

		header("location: index.php");

		
	endif;

?>


