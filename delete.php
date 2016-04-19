<html>
	<?php
	    require_once "delete.logic.php";
	    include "common/header.php";
	    
	?>


<body>
	<div>
	<form method="post">
		<input type="hidden" name="id" value="<?=$birthdays['id']?>">
			<label for="name">Name:</label>
			<span><?=$birthdays['person']?></span>
	</div>
		<div>
			<label>Wil je de aangeklikte datum verwijderen?</label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
</body>
