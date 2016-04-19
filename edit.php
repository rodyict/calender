	<?php
	require_once "edit.logic.php";
	include "common/header.php";
	?>

		<h1>Edit name/date</h1>
	<form method="post">
		<div>
			<label for="name">Person:</label>
			<input type="text" id="person" name="person" value="<?=$birthdays['person']?>">
		</div>
		<div>
			<label for="name">Day:</label>
			<select name="day" id="day">
				<?php for($day=1; $day<=31; $day++) {?>
			    <option <?php if ($birthdays['day'] == $day) {echo "selected";}?> value="<?= $day; ?>"><?= $day; ?></option>
			    <?php } ?>
			</select>
		</div>
		<div>
			<label for="name">Month:</label>
			<select name="month" id="month">
			    <option <?php if ($birthdays['month'] == "1") {echo "selected";}?> value="1">January   </option>
			    <option <?php if ($birthdays['month'] == "2") {echo "selected";}?>	value="2">February  </option>
			    <option <?php if ($birthdays['month'] == "3") {echo "selected";}?>	value="3">March     </option>
			    <option <?php if ($birthdays['month'] == "4") {echo "selected";}?> value="4">April     </option>
			    <option <?php if ($birthdays['month'] == "5") {echo "selected";}?>	value="5">May       </option>
			    <option <?php if ($birthdays['month'] == "6") {echo "selected";}?>	value="6">June      </option>
			    <option <?php if ($birthdays['month'] == "7") {echo "selected";}?>	value="7">July      </option>
			    <option <?php if ($birthdays['month'] == "8") {echo "selected";}?>	value="8">August    </option>
			    <option <?php if ($birthdays['month'] == "9") {echo "selected";}?>	value="9">September </option>
			    <option <?php if ($birthdays['month'] == "10") {echo "selected";}?>	value="10">October   </option>
			    <option <?php if ($birthdays['month'] == "11") {echo "selected";}?>	value="11">November  </option>
			    <option <?php if ($birthdays['month'] == "12") {echo "selected";}?>	value="12">December  </option>
		    </select>
		</div>
		<div>
			<label for="name">Year:</label>
			<select name="year" id="year">
				<?php for($year=2016; $year>=1900; $year--) {?>
			    <option <?php if ($birthdays['year'] == $year) {echo "selected";}?> value="<?= $year; ?>"><?= $year; ?></option>
			    <?php } ?>
		    </select>
    	
		</div>	

		<div>
			<label></label>
			<input type="submit" value="EDIT">
		</div>