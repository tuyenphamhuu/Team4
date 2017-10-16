<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	 <?php 
	 	foreach ($user as $user) {
	 		?>
	 			<form action="/editUser" method="POST">
					PassWord :
					<input type="password" name="pass"><br>
					Rule_rank :
					<input type="text" name="rule" value="<?php echo $user->Rule_rank ?>"><br>
					Email :
					<input type="text" name="email" value="<?php echo $user->Email ?>"><br>
					ADD :
					<input type="text" name="add" value="<?php echo $user->Addr ?>"><br>
					PhoneNumber :
					<input type="text" name="phone" value="<?php echo $user->PhoneNumber ?>"><br>
					<input type="text" name="id" hidden="hidden" value="<?php echo $user->ID_Account ?>"><br>
					<button type="submit">Edit</button>
				</form>
	 		<?php
	 	}
	  ?>
	
</body>
</html>