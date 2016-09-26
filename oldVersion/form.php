<!--
File: form.php
Author: Jesse Offei-Nkansah
Created:12.26.2014
Modified: 12.26.2014
Description: Initial page of "More" tab
after form is filled out, page switches to "thanks.php"
*to be put into "more" folder
-->
<p>If you liked what you saw here and you want to know me even more, 
request a resume from me.  You'll recieve it in just a few days.  If you 
have any suggestions on how to improve this site - what to add, what to 
change, what to fix - or if there was something that you wanted to know 
about me, but didn't find out here, leave me a message.  I always love 
hearing from new people.</p>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
	<div><span class="req">* = required field</span></div>
	Name/Company: 
	<input type="text" name="name" value="<?php echo $name; ?>"><span class="req">* <?php echo $nameErr; ?></span><br>
	E-mail Address: 
	<input type="text" name="email" value="<?php echo $email; ?>"><span class="req">* <?php echo $emailErr; ?></span><br>
	Website: 
	<input type="text" name="site" value="<?php echo $site; ?>"><br>
	Comments:<br>
	<textarea name="comments" rows="5" cols="40"><?php echo $comment ?></textarea><br>
	<input type="checkbox" name="resume" value="on" <?php if($_POST['resume']) echo "checked = 'checked'"; ?>> Request Resume<br>
	<input type="submit" name="submit" value="Submit">
</form>