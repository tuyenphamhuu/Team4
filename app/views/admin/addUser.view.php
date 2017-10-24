<?php require 'app/views/partials/head-admin.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/addUser" method="POST">
		UserName :
		<input type="text" name="user"><br>
		PassWord :
		<input type="password" name="pass"><br>
		Rule_rank :
		<input type="text" name="rule"><br>
		Email :
		<input type="text" name="email"><br>
		ADD :
		<input type="text" name="add"><br>
		PhoneNumber :
		<input type="text" name="phone"><br>
		<button type="submit">add</button>
	</form>
</body>
</html>