<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$birthdays = NULL;

		if (isset($_GET['id'])):
			$db = new mysqli('localhost','root','','calendar');
			$id = $db->escape_string($_GET['id']);

		$query = "select * from birthdays where id=$id";

		$result = $db->query($query);

		$birthdays = $result->fetch_assoc();

		endif;

	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','calendar');

		$id = $db->escape_string($_GET["id"]);
		$person = $db->escape_string($_POST["person"]);
		$day = $db->escape_string($_POST["day"]);
		$month =$db->escape_string($_POST["month"]);
		$year =$db->escape_string($_POST["year"]);


		$query = "update birthdays set person='$person', day=$day, month='$month', year=$year where id=$id";


		echo $query;
		$result = $db->query($query);

		$query = "select * from birthdays where id=$id";

		$result = $db->query($query);

		$birthdays = $result->fetch_assoc();

		header("location: index.php");

	endif;
