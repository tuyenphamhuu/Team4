<?php require 'app/views/partials/head.php'; ?>

<div id="ad-admin">
	<div class="row">
		<!-- left-admin -->
		<div class="col-md-2">
			<div id="ad-admin-inner" class="text-center">
				<div id="top-ad" class="apple">
					<img id="logo-admin" src="../../images/apple-logo.png">
				</div>
				<div id="btom-ad">
					<a class="btom-ad-item" href="#">
						<img class="mx-auto d-block" src="../../images/prd-ad.png">
						<p class="hidden-ad">Products</p>
					</a>
					<a class="btom-ad-item" href="#">
						<img class="mx-auto d-block" src="../../images/cate-ad.png">
						<p class="hidden-ad">Categories</p>
					</a>
					<a class="btom-ad-item" href="#">
						<img class="mx-auto d-block" src="../../images/account-ad.png">
						<p class="hidden-ad">Accounts</p>
					</a>
				</div>
			</div>
		</div>

		<!-- right-admin -->
		<div class="col-md-10">
			<div class="t-r-ad row">
				<div class="col-md-10"></div>
				<div class="col-md-2 align-self-end text-center">
					<img class="ad-ac" src="../../images/16113923_552970454892621_2517366653216049468_n.jpg">
					<!-- hover-on-avt -->
					<div class="li-la">
						<div class="row">
							<div class="avt col-md-3">
								<div id="wp-ac" class="text-center">
									<img class="ad-ac" src="../../images/16113923_552970454892621_2517366653216049468_n.jpg">
									<p class="text-transform">Avatar</p>

								</div>
							</div>
							<div class="col-md-9 text-transform">
								<p class="name-ad lette-spacing font-weight-bold">Nguyen Thi Hong Nhung</p>
								<p class="email-ad lette-spacing">nhung.nth@neo-lab.vn</p>
								<button class="text-transform">My Account</button>
							</div>
						</div>
						<div class="wp-io-ad justify-content-between">
							<div id="io-ad" class="row">
								<div class="mr-top col-md-6">
									<button>Add Account</button>
								</div>
								<div class="col-md-6">
									<button>Logout</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>	



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
			<th>Control</th>
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
			<td>
				<a href="admin/editUser?id=<?php echo $user->ID_Account?>">Edit</a>
				<a href="delUser?id=<?php echo $user->ID_Account?>" onclick="return confirm('Do you want to del this ?')" >Delete</a>	
			</td>
		</tr>
		<?php
			}
		 ?>	
	</table>
</body>
</html>

