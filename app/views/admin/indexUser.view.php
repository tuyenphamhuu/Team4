
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>UserName</th>
			<th>PassWord</th>
			<th>Rule_rank</th>
			<th>Email</th>
			<th>Addr</th>
			<th>PhoneNumber</th>
		</tr>
		<tr>
			<?php 
				foreach ($user as $user) {
					?>
			<td><?php echo $user->ID_Account; ?></td>
			<td><?php echo $user->UserName; ?></td>
			<td><?php echo $user->PassWord; ?></td>
			<td><?php echo $user->Rule_rank; ?></td>
			<td><?php echo $user->Email; ?></td>
			<td><?php echo $user->Addr; ?></td>
			<td><?php echo $user->PhoneNumber; ?></td>
			
		</tr>
		<?php
			}
		 ?>	
	</table>
</body>
</html>

