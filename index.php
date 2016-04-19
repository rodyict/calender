<html>
<?php
    require_once "index.logic.php";
    include "common/header.php";
    
    $currMonth = null;
?>

	
	<body>
        <?php 
        foreach ($birthdays as $birthday) {
            if ($birthday['month'] != $currMonth) {
                echo "<h1>" . $months[$birthday['month'] -1] . "</h1>";
                $currMonth = $birthday['month'];
            } ?>
            <h2><?= $birthday['day']; ?></h2>
            <p>
                <a href="edit.php?id=<?= $birthday['id']; ?>"><?= $birthday['person']; ?> (<?= $birthday['year']; ?>)</a>
                <a href="delete.php?id=<?= $birthday['id']; ?>">x</a>
            </p>
        <?php
        }
        ?>


<p><a href="create.php">+ Toevoegen</a></p>

	</body>
</html>