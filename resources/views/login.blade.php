<?php
?>

<form action="dologin" method="POST">
@csrf
	<?php echo $errors->first('username');?>
	<label for="username">Username:</label>
	<input type="text" id="username" name="username"><br><br>
	
	<?php echo $errors->first('password');?>
	<label for="password">Password:</label>
	<input type="password" id="password" name="password"><br><br>
	
	<input type="submit" value="submit">
</form>