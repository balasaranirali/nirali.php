<from action=""method="post">
	username : <input type="text" name="name">
	<br>
	password : <input type="text" name="pwd">
	<br>
	<input type="submit" name="submit">
</from>

<?php
	if(isset($_POST['serch']))
	{
		echo $_POST['name']
		echo $_POST['pwd']
	}