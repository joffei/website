<!--
File: form.php
Author: Jesse Offei-Nkansah
Created:09.25.2016
Modified: 09.25.2016
Description: Initial page of Contact section tab
after form is filled out, page switches to "thanks.php"
-->
<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
	<div class="field half first">
		<label for="name">Name</label>
		<input type="text" name="name" id="name" value="<?php echo $name; ?>"/>
	</div>
	<div class="field half">
		<label for="email">Email</label>
		<input type="text" name="email" id="email" value="<?php echo $email; ?>"/>
	</div>
	<div class="field">
		<label for="message">Message</label>
		<textarea name="message" id="message" rows="5"><?php echo $comment ?></textarea>
	</div>
	<div class="6u$ 12u$(small)">
		<input type="checkbox" id="resume" name="resume">
		<label for="resume" value="on" <?php if($_POST['resume']) echo "checked = 'checked'"; ?>>Request Resume</label>
	</div>
	<ul class="actions">
		<li><type="submit" class="button submit" value="Submit"/>Send Message</li>
	</ul>
</form>