<?php require 'app/views/partials/head-admin.php'; ?>

<div id="ad-admin">
	<div class="row">
		<?php require 'app/views/partials/sidebar-left.php'; ?>
			<table id="tbUser">
				<div class="container-fluid">
				    <div class="row">
				        <?php require 'app/views/partials/sidebar-left.php'; ?>
				        
				        <div class="right col-lg-10 col-md-10 col-sm-9 col-12">
				            <a class="btn btn-primary" href="/admin/addProduct" role="button">Add product</a>
				            <table id="tbUser">
								<thead>
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
								</thead>
								<tbody>
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
								</tbody>
								<?php
									}
								 ?>	
							</table>
				        </div>
				    </div>
				</div>
				<script>
					$(document).ready(function() {
					    $('#tbUser').DataTable();
					} );
			  	</script>
			</div>
	
		</div>	
 	 </script>






