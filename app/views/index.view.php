<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>
<content>
	<div class="container-fluid">
		<div id="iphone" class="row text-center">
			<div class="col-12 text-center">
				<h1 class="prd-type">iPhone</h1>
				<p class="slogan">Safety, security is above all</p>
				<div class="container-fluid margin-lr">
					<div class="row justify-content-center prd">
						<div class="col-md-3">
							<div class="wrap-item-prd hover ehover3">
					      <img class="mx-auto d-block rounded" src="public/images/ip-x-f.jpg" alt="">
					      <div class="overlay">
					      	<h2>iPhone X</h2>
										<button type="button" class="info" data-toggle="modal" data-target=".myModal">
									Detail
										</button>
					      </div>
					    </div>
					  </div>
						<div class="col-md-3">
							<div class="wrap-item-prd hover ehover3">
								<img class="mx-auto d-block rounded" src="public/images/ip8-.jpg" alt="iphone_8">
								<div class="overlay">
									<h2>Iphone 8</h2>
									<button type="button" class="info" data-toggle="modal" data-target=".myModal">
									Detail
									</button>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="wrap-item-prd hover ehover3">
								<img class="mx-auto d-block rounded" src="public/images/ip7-.jpg" alt="iphone_7">
								<div class="overlay">
									<h2>Iphone 7</h2>
									<button type="button" class="info" data-toggle="modal" data-target=".myModal">
									Detail
									</button>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="wrap-item-prd hover ehover3">
								<img class="mx-auto d-block rounded" src="public/images/ip6s-.gif" alt="iphone_6">
								<div class="overlay">
									<h2>Iphone 6s</h2>
									<button type="button" class="info" data-toggle="modal" data-target=".myModal">
									Detail
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="ipad" class="row text-center">
			<div class="col-12 text-center">
				<h1 class="prd-type">iPad</h1>
				<p class="slogan">Safety, security is above all</p>
				<div class="container-fluid margin-lr">
					<div class="row prd">
						<div class="col-md-3">
							<div class="wrap-item-prd hover ehover3">
								<img class="mx-auto d-block rounded" src="public/images/ipad-pro-f.jpg" alt="ipad-pro-f.jpg">
								<div class="overlay">
									<h2>Ipad Pro</h2>
									<button type="button" class="info" data-toggle="modal" data-target=".myModal">
									Detail
									</button>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="wrap-item-prd hover ehover3">
								<img class="mx-auto d-block rounded" src="public/images/ipad-f.jpg" alt="ipad-f.jpg">
								<div class="overlay">
									<h2>Ipad</h2>
									<button type="button" class="info" data-toggle="modal" data-target=".myModal">
									Detail
									</button>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="wrap-item-prd hover ehover3">
								<img class="mx-auto d-block rounded" src="public/images/ipad-mini-4-f.jpg" alt="ipad-mini-4-f.jpg">
								<div class="overlay">
									<h2>Ipad mini 4</h2>
									<button type="button" class="info" data-toggle="modal" data-target=".myModal">
									Detail
									</button>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="wrap-item-prd hover ehover3">
								<img class="mx-auto d-block rounded" src="public/images/ios11-f.jpg" alt="ios11-f.jpg">
								<div class="overlay">
									<h2>iOS 11</h2>
									<button type="button" class="info" data-toggle="modal" data-target=".myModal">
									Detail
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      	<!-- view detail -->
				<div id="view-detail" class="container">
					<div class="row justify-content-around hr-v-dl">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<img class="img-dt mx-auto d-block" src="public/images/ip_8_f.jpg">
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 align-self-center text-transform text-left">
							<h4 class="text-red font-weight-bold">$699</h4>
							<h5 class="text-uppercase font-weight-bold">Iphone 8</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
							<button class="info">Add to Cart</button>
						</div>
					</div>
				</div>
		    </div>
		  </div>
		</div>

		<!-- cart -->
		<div class="cart">
			<h2 class="font-weight-bold text-center">My cart</h2>
			<table class="bill-ap table table-bordered text-transform table-hover table-responsive">
				<thead>
					<tr>
						<th style="width: 4%">STT</th>
						<th style="width: 45%">Name Products</th>
						<th style="width: 15%">Price</th>
						<th style="width: 15%">Quantity</th>
						<th style="width: 15%">Total Money</th>
						<th style="width: 6%">Delete</th>
					</tr>
				</thead>
				<tbody>
					<tr class="list-pr-ap">
						<th>1</th>
						<td>
							<div class="row">
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
									<img src="../../public/images/7+-f.jpg">
								</div>
								<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9">
									iPhone 8
								</div>
							</div>
						</td>
						<td>$699</td>
						<td class="count-ap">
							<input class="text-center" type="number" value="1">
						</td>
						<td>$699</td>
						<td class="edit-bill">

		<!-- Button trigger modal -->
		<button type="button" data-toggle="modal" data-target="#exampleModal">
		  <img src="/public/images/trash.png">
		</button>
<!-- Modal -->
		<div class=" modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Confirm delete</h5>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
		        <button type="button" class="remove btn btn-primary">Delete</button>
		      </div>
		    </div>
		  </div>
		</div>


	<script type="text/javascript">
		$('.remove').click(function() {
			$('#exampleModal').modal('hide');
			$(this).closest('tr').remove();
		});
	</script>
						</td>
					</tr>
					<tr class="list-pr-ap">
						<th>2</th>
						<td>
							<div class="row">
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
									<img src="../../public/images/ipad-pro-10in.png">
								</div>
								<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9">
									iPad Pro 12.9 inch
								</div>
							</div>
						</td>
						<td>$799</td>
						<td class="count-ap">
							<input class="text-center" type="number" value="2">
						</td>
						<td>$1598</td>
						<td class="edit-bill">
							<a class="remove" href="#"><img src="/public/images/trash.png"></a>
						</td>
					</tr>
					<tr class="list-pr-ap">
						<th>3</th>
						<td>
							<div class="row">
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
									<img src="../../public/images/7+-f.jpg">
								</div>
								<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9">
									iPhone 7 plus
								</div>
							</div>
						</td>
						<td>$669</td>
						<td class="count-ap">
							<input class="text-center" type="number" value="1">
						</td>
						<td>$669</td>
						<td class="edit-bill">
							<a class="remove" href="#"><img src="/public/images/trash.png"></a>
						</td>
					</tr>
					<tr class="list-pr-ap">
						<td colspan="4" class="text-left">
							<button class="btn btn-warning">&laquo; Keep buying</button>
						</td>
						<td class="font-weight-bold">
							Total: $2397
						</td>
						<td>
							<button class="btn btn-success">Pay &raquo;</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		
	</div>
	<div id="mac">
		<img src="images/imacbg-f.jpg">
		<a href="#"><div><strong>iMac Pro</strong><span>(Power to the pro)</span></div></a>
	</div>


</content>

<?php require 'partials/footer.php'; ?>
