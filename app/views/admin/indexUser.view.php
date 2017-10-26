<?php require 'app/views/partials/head-admin.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php require 'app/views/partials/sidebar-left.php'; ?>
        
        <div class="right col-lg-10 col-md-10 col-sm-9 col-12">
            <a class="btn btn-primary" href="/admin/addUser" role="button">Add User</a>
            <table id="example" class="display" cellpadding="0" width="100%">
				<thead>
					<tr class="thead-inverse">
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
					
					<?php 

						foreach ($user as $user) {
							?>
					<tr>
						<td><?php echo $user->ID_Account; ?></td>
						<td><?php echo $user->UserName; ?></td>
						<td><?php echo $user->PassWord; ?></td>
						<td><?php echo $user->Rule_rank; ?></td>
						<td><?php echo $user->Email; ?></td>
						<td><?php echo $user->Addr; ?></td>
						<td><?php echo $user->PhoneNumber; ?></td>
						<td>
							<a class="btn btn-sm btn-dark" href="admin/editUser?id=<?php echo $user->ID_Account?>">Edit</a>
							<a class="btn btn-sm btn-warning"  href="delUser?id=<?php echo $user->ID_Account?>" onclick="return confirm('Do you want to del this ?')" >Delete</a>	
						</td>
					</tr>
				
					<?php
						}
					 ?>
				 </tbody>	
			</table>
        </div>
    </div>
</div>
	<script>
		$(document).ready(function() {
		    $('#example').DataTable( {
		        "paging":   true,
		        "ordering": false,
		        "info":     false
		    } );
		} );
 	 </script>






