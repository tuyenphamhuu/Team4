<?php require 'partials/head.php'; ?>
<div class="wrapper-user">
	<div class="container-fluid top-user-page">
		<div class="row">
			<div class="col-md-2 left-top-user-page">
				<!-- <div id="ad-admin-inner" class="text-center">
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
				</div> -->
			</div>
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-10">
						 <p></p>
					</div>
					<div class="col-md-2 right-top-user-page text-center">
						<img class="image-admin-account" src="public/images/troll.jpg">
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
	<div class="container-fluid main-user-page">
		<div class="row">
			<div class="col-md-2 left-main-user-page">
			  	<a href="#"><b>Add account</b></a>
			  	<br>
		  		<a href="admin/editUser?id=1"><b>Repair account</b></a>
			  	<br>
		  	   	<a href="delUser?id=1" onclick="return confirm('Do you want to del this ?')"><b>Remove account</b></a>
			</div>
			<div class="col-md-10 right-main-user-page">
				<!-- <table class="table-user">
		  			<thead>
			    		<tr>
			      			<th  scope="col" class="col-No">No.</th>
			      			<th  scope="col" >User name</th>
			      			<th  scope="col" >Password</th>
			      			<th  scope="col" >Rule_rank</th>
			      			<th  scope="col">Email</th>
			      			<th  scope="col">Address</th>
			      			<th  scope="col">Phone number</th>
			      			<th  scope="col">Control</th>
			   			 </tr>
			   		</thead>
			   		<tbody>
			    		<tr>
			    			<td class="col">1</td>
			      			<td class="colUsername">Hang Vo</td>
			      			<td class="colPass">2222</td>
			      			<td class="colRuleR"></td>
			      			<td class="colEmail">hang.vt@neo-lab.vn</td>
			      			<td class="colAddress">Quang Nam</td>
			      			<td class="colPhone">0165 798 6375</td>
			      			<td class="colControl">
								<a href="admin/editUser?id=1">Edit</a>
								<a href="delUser?id=1" onclick="return confirm('Do you want to del this ?')">Delete</a>	
			      			</td>
			    		</tr>
			    		<tr>
			    			<td class="col">1</td>
			      			<td class="colUsername">Hong nhung Nguyen</td>
			      			<td class="colPass">3333</td>
			      			<td class="colRuleR"></td>
			      			<td class="colEmail">nhung.nth@neo-lab.vn</td>
			      			<td class="colAddress">Hue</td>
			      			<td class="colPhone">0123456779</td>
			      			<td class="colControl">
								<a href="admin/editUser?id=1">Edit</a>
								<a href="delUser?id=1" onclick="return confirm('Do you want to del this ?')">Delete</a>	
			      			</td>
			    		</tr>
			    		<tr>
			    			<td class="col">1</td>
			      			<td class="colUsername">Phi Vu Nguyen</td>
			      			<td class="colPass">4444</td>
			      			<td class="colRuleR"></td>
			      			<td class="colEmail">hang.vt@neo-lab.vn</td>
			      			<td class="colAddress">Quang Nam</td>
			      			<td class="colPhone">0165 798 6375</td>
			      			<td class="colControl">
								<a href="admin/editUser?id=1">Edit</a>
								<a href="delUser?id=1" onclick="return confirm('Do you want to del this ?')">Delete</a>	
			      			</td>
			    		</tr>
			    		<tr>
			    			<td class="col">1</td>
			      			<td class="colUsername">Hang Vo</td>
			      			<td class="colPass">2222</td>
			      			<td class="colRuleR"></td>
			      			<td class="colEmail">hang.vt@neo-lab.vn</td>
			      			<td class="colAddress">Quang Nam</td>
			      			<td class="colPhone">0165 798 6375</td>
			      			<td class="colControl">
								<a href="admin/editUser?id=1">Edit</a>
								<a href="delUser?id=1" onclick="return confirm('Do you want to del this ?')">Delete</a>	
			      			</td>
			    		</tr>
			    	</tbody>
  				</table> -->
  				<table class="table table-hover table-userpage">
					<thead class="thead-inverse">
					   <tr>
			      			<th scope="col" class="col-No">No.</th>
			      			<th scope="col" >User name</th>
			      			<th scope="col" >Password</th>
			      			<th scope="col" >Rule_rank</th>
			      			<th scope="col">Email</th>
			      			<th scope="col">Address</th>
			      			<th scope="col">Phone number</th>
			      			<th scope="col">Control</th>
			   			 </tr>
					</thead>
					<tbody>
					    <tr>
			    			<td scope="row" class="col">1</td>
			      			<td class="colUsername">Hang Vo</td>
			      			<td class="colPass">2222</td>
			      			<td class="colRuleR"></td>
			      			<td class="colEmail">hang.vt@neo-lab.vn</td>
			      			<td class="colAddress">Quang Nam</td>
			      			<td class="colPhone">0165 798 6375</td>
			      			<td class="colControl">
								<a href="admin/editUser?id=1">Edit</a>
								<a href="delUser?id=1" onclick="return confirm('Do you want to del this ?')">Delete</a>	
			      			</td>
			    		</tr>
			    		<tr>
			    			<td class="col">1</td>
			      			<td class="colUsername">Hong nhung Nguyen</td>
			      			<td class="colPass">3333</td>
			      			<td class="colRuleR"></td>
			      			<td class="colEmail">nhung.nth@neo-lab.vn</td>
			      			<td class="colAddress">Hue</td>
			      			<td class="colPhone">0123456779</td>
			      			<td class="colControl">
								<a href="admin/editUser?id=1">Edit</a>
								<a href="delUser?id=1" onclick="return confirm('Do you want to del this ?')">Delete</a>	
			      			</td>
			    		</tr>
			    		<tr>
			    			<td class="col">1</td>
			      			<td class="colUsername">Phi Vu Nguyen</td>
			      			<td class="colPass">4444</td>
			      			<td class="colRuleR"></td>
			      			<td class="colEmail">vu.np@neo-lab.vn</td>
			      			<td class="colAddress">Da Nang</td>
			      			<td class="colPhone">0165 798 6375</td>
			      			<td class="colControl">
								<a href="admin/editUser?id=1">Edit</a>
								<a href="delUser?id=1" onclick="return confirm('Do you want to del this ?')">Delete</a>	
			      			</td>
			    		</tr>
			    		<tr>
			    			<td class="col">1</td>
			      			<td class="colUsername">Huu Tuyen Pham</td>
			      			<td class="colPass">5555</td>
			      			<td class="colRuleR"></td>
			      			<td class="colEmail">tuyen.ph@neo-lab.vn</td>
			      			<td class="colAddress">Hue</td>
			      			<td class="colPhone">0165 798 6375</td>
			      			<td class="colControl">
								<a href="admin/editUser?id=1">Edit</a>
								<a href="delUser?id=1" onclick="return confirm('Do you want to del this ?')">Delete</a>	
			      			</td>
			    		</tr>
					  </tbody>
					</table>

			</div>
		</div>	
	</div>
</div>


<?php require 'partials/footer.php'; ?>

