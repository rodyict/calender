<?php

$db = new mysqli('localhost','root','','calendar');

$sql = "SELECT * FROM `birthdays`";

$result = $db->query($sql);

$birthdays = $result->fetch_all(MYSQLI_ASSOC);

foreach ($birthdays as $key => $row) {
    $months[$key]  = $row['month'];
    $days[$key] = $row['day'];
    $years[$key] = $row['year'];
}

array_multisort($months, SORT_ASC, $days, SORT_ASC, $years, SORT_ASC, $birthdays);

$months = array("Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "December");

?>