<?php require 'app/views/partials/head.php'; ?>
<?php require 'app/views/partials/header-admin.php'; ?>

	<!-- Account -->
	<h5 class="tt-ad font-weight-bold">Account Admin</h5>
	<form class="table account-ad form-func add-new">
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">ID Account</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Product name">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">Use Name</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter New Price">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">Password</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Old Price">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">ID_Rule</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter ID_Type Product">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">Email</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Color Product">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">Add</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Config">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">Phone Number</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Description">
		    </div>
		</div>
		<button type="submit" class="btn btn-primary">Add</button>
	</form>

	<!-- add new button detail -->
	<h5 class="tt-ad font-weight-bold">Add Products</h5>
	<form class="table add-new add-new-detail">
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">Product name</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Product name">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">New Price</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter New Price">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">Old Price</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Old Price">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">ID_Type Product</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter ID_Type Product">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">Color Product</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Color Product">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">Config</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Config">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">Description</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Description">
		    </div>
		</div>
		<button type="submit" class="btn btn-primary">Add</button>
	</form>

	<!-- detail-oder -->
	<h5 class="tt-ad font-weight-bold">Detail Order</h5>
	<table class="table detail-order-ad text-transform">
	  	<thead>
	    	<tr>
		      	<th>STT</th>
		      	<th>ID Detail Order</th>
		      	<th>ID Order</th>
		      	<th>ID Product</th>
		      	<th>Quantity</th>
	    	</tr>
	  	</thead>
	  	<tbody>
	    	<tr>
		      	<th scope="row">1</th>
		      	<td>CTOD0001</td>
		      	<td>OD0001</td>
		      	<td>001</td>
		      	<td>Quantity</td>
	    	</tr>
	    	<tr>
		      	<th scope="row">2</th>
		      	<td>CTOD0002</td>
		      	<td>OD0002</td>
		      	<td>002</td>
		      	<td>Quantity</td>
	    	</tr>
	    	<tr>
		      	<th scope="row">3</th>
		      	<td>CTOD0003</td>
		      	<td>OD0003</td>
		      	<td>003</td>
		      	<td>Quantity</td>
	    	</tr>
	  	</tbody>
	</table>

	<!-- order -->
	<h5 class="tt-ad font-weight-bold">Order</h5>
	<table class="table order-ad text-transform">
	  	<thead>
	    	<tr>
		      	<th>STT</th>
		      	<th>ID Order</th>
		      	<th>ID Account</th>
		      	<th>OrderDate</th>
		      	<th>Status</th>
		      	<th>Add</th>
		      	<th>Total</th>
		      	<th>Accepter</th>
		      	<th>PhoneNumber</th>
	    	</tr>
	  	</thead>
	  	<tbody>
	    	<tr>
		      	<th>1</th>
		      	<th>OD0001</th>
		      	<th>ID01</th>
		      	<th>10/10/2017</th>
		      	<th>Order Complete</th>
		      	<th>iPad Pro</th>
		      	<th>Total</th>
		      	<th>Hang</th>
		      	<th>0903 333 999</th>
	    	</tr>
	    	<tr>
		      	<th>2</th>
		      	<th>OD0002</th>
		      	<th>ID01</th>
		      	<th>11/10/2017</th>
		      	<th>Order Complete</th>
		      	<th>iPad Mini</th>
		      	<th>Total</th>
		      	<th>Vu</th>
		      	<th>0903 333 999</th>
	    	</tr>
	    	<tr>
		      	<th>3</th>
		      	<th>OD0003</th>
		      	<th>ID01</th>
		      	<th>12/10/2017</th>
		      	<th>Order Complete</th>
		      	<th>iPhone X</th>
		      	<th>Total</th>
		      	<th>Tuyen</th>
		      	<th>0903 333 999</th>
	    	</tr>
	    	<tr>
		      	<th>4</th>
		      	<th>OD0004</th>
		      	<th>ID01</th>
		      	<th>13/10/2017</th>
		      	<th>Order Complete</th>
		      	<th>iPhone 8</th>
		      	<th>Total</th>
		      	<th>Nhung</th>
		      	<th>0903 333 999</th>
	    	</tr>
	  	</tbody>
	</table>

	<!-- product-detail -->
	<h5 class="tt-ad font-weight-bold">Product Detail</h5>
	<table class="table product-detail-ad text-transform">
	  	<thead>
	    	<tr>
		      	<th>STT</th>
		      	<th>ID Product</th>
		      	<th>Cate_Product Name</th>
		      	<th>New Price</th>
		      	<th>Old Price</th>
		      	<th>ID_Type Product</th>
		      	<th>Color Product</th>
		      	<th>Config</th>
		      	<th>Description</th>
	    	</tr>
	  	</thead>
	  	<tbody>
	    	<tr>
		      	<th scope="row">1</th>
		      	<td>001</td>
		      	<td>iPhone X 256GB</td>
		      	<td>38.990.000VND</td>
		      	<td>39.990.000VND</td>
		      	<td>IPX01</td>
		      	<td>Silver</td>
		      	<td>Apple, ios: 11, 5.8 inch, 174g, 1125 x 2436 pixel, RAM 3GB, 256GB</td>
		      	<td>Intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.</td>
	    	</tr>
	    	<tr>
		      	<th scope="row">2</th>
		      	<td>001</td>
		      	<td>iPhone X 64GB</td>
		      	<td>34.990.000VND</td>
		      	<td>36.990.000VND</td>
		      	<td>IPX02</td>
		      	<td>Black</td>
		      	<td>Apple, ios: 11, 5.8 inch, 174g, 1125 x 2436 pixel, RAM 3GB, 64GB</td>
		      	<td>Intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.</td>
	    	</tr>
	    	<tr>
		      	<th scope="row">3</th>
		      	<td>001</td>
		      	<td>iPhone 8+</td>
		      	<td>19.794.375VND</td>
		      	<td>21.990.900VND</td>
		      	<td>IP801</td>
		      	<td>Silver</td>
		      	<td>Apple, ios: 11, 5.8 inch, 174g, 1125 x 2436 pixel, RAM 3GB</td>
		      	<td>Intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.</td>
	    	</tr>
	    	<tr>
		      	<th scope="row">4</th>
		      	<td>001</td>
		      	<td>iPhone 8</td>
		      	<td>17.894.375VND</td>
		      	<td>18.990.450VND</td>
		      	<td>IP802</td>
		      	<td>Silver</td>
		      	<td>Apple, ios: 11, 5.8 inch, 174g, 1125 x 2436 pixel, RAM 3GB</td>
		      	<td>Intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.</td>
	    	</tr>
	    	<tr>
		      	<th scope="row">5</th>
		      	<td>001</td>
		      	<td>iPhone 7+</td>
		      	<td>16.956.244VND</td>
		      	<td>14.765.353VND</td>
		      	<td>IP701</td>
		      	<td>Pink</td>
		      	<td>Apple, ios: 11, 5.8 inch, 174g, 1125 x 2436 pixel, RAM 3GB</td>
		      	<td>Intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.</td>
	    	</tr>
	    	<tr>
		      	<th scope="row">6</th>
		      	<td>001</td>
		      	<td>iPhone 7</td>
		      	<td>15.757.757VND</td>
		      	<td>14.758.650VND</td>
		      	<td>IP702</td>
		      	<td>Yellow</td>
		      	<td>Apple, ios: 11, 5.8 inch, 174g, 1125 x 2436 pixel, RAM 3GB</td>
		      	<td>Intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.</td>
	    	</tr>
	    	<tr>
		      	<th scope="row">7</th>
		      	<td>002</td>
		      	<td>iPad Pro</td>
		      	<td>9.090.757VND</td>
		      	<td>8.516.650VND</td>
		      	<td>IPd01</td>
		      	<td>Rose Gold</td>
		      	<td>Apple, 12.9 inch, Camera: 8.0MP</td>
		      	<td> The redesigned Retina display is as stunning to look at as it is to touch. And it all comes together with iOS, the world’s most advanced mobile operating system.* iPad Pro.</td>
	    	</tr>
	  	</tbody>
	</table>

	<!-- product-rep -->
	<h5 class="tt-ad font-weight-bold">Product Repository</h5>
	<table class="table product-rep-ad text-transform">
	  	<thead>
	    	<tr>
		      	<th>STT</th>
		      	<th>ID Product Rep</th>
		      	<th>ID Products</th>
		      	<th>Quantity</th>
	    	</tr>
	  	</thead>
	  	<tbody>
	    	<tr>
		      	<th>1</th>
		      	<th>IDPR001</th>
		      	<th>001</th>
		      	<th>Quantity</th>
	    	</tr>
	    	<tr>
		      	<th>2</th>
		      	<th>IDPR002</th>
		      	<th>002</th>
		      	<th>Quantity</th>
	    	</tr>
	    	<tr>
		      	<th>3</th>
		      	<th>IDPR003</th>
		      	<th>003</th>
		      	<th>Quantity</th>
	    	</tr>
	  	</tbody>
	</table>

	<!-- Product -->
	<h5 class="tt-ad font-weight-bold">Product</h5>
	<table class="table product-ad">
	  	<thead>
	    	<tr>
		      	<th>STT</th>
		      	<th>ID Product</th>
		      	<th>Product Name</th>
		      	<th>Edit</th>
	    	</tr>
	  	</thead>
	  	<tbody>
	    	<tr>
		      	<th scope="row">1</th>
		      	<td>001</td>
		      	<td>iPhone</td>
		      	<td class="">
			      	<img src="../../images/diff-ignored.svg">
			      	<img src="../../images/trashcan.svg">
		      	</td>
	    	</tr>
	    	<tr>
		      	<th scope="row">2</th>
		      	<td>002</td>
		      	<td>iPad</td>
		      	<td class="">
			      	<img src="../../images/diff-ignored.svg">
			      	<img src="../../images/trashcan.svg">
		      	</td>
	    	</tr>
	    	<tr>
		      	<th scope="row">3</th>
		      	<td>003</td>
		      	<td>MacBook</td>
		      	<td class="">
			      	<img src="../../images/diff-ignored.svg">
			      	<img src="../../images/trashcan.svg">
		      	</td>
	    	</tr>
	  </tbody>
	</table>

	<!-- rule -->
	<h5 class="tt-ad font-weight-bold">Rule</h5>
	<table class="table rule-ad text-transform">
	  	<thead>
	    	<tr>
		      	<th>STT</th>
		      	<th>ID Rule</th>
		      	<th>RuleName</th>
		      	<th>NameAd</th>
	    	</tr>
	  	</thead>
	  	<tbody>
	    	<tr>
		      	<th>1</th>
		      	<td>IDR001</td>
		      	<td>Admin</td>
		      	<td>Hang</td>
	    	</tr>
	    	<tr>
		      	<th>2</th>
		      	<td>IDR002</td>
		      	<td>Admin</td>
		      	<td>Vu</td>
	    	</tr>
	    	<tr>
		      	<th>3</th>
		      	<td>IDR003</td>
		      	<td>Admin</td>
		      	<td>Tuyen</td>
	    	</tr>
	    	<tr>
		      	<th>4	</th>
		      	<td>IDR004</td>
		      	<td>Admin</td>
		      	<td>Nhung</td>
	    	</tr>
	  	</tbody>
	</table>

<?php require 'app/views/partials/footer-admin.php'; ?>