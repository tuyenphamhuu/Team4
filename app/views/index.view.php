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
						      	<img class="mx-auto d-block rounded" src="public/images/ipx.png" alt="">
						      	<div class="overlay">
						      		<h2>iPhone X</h2>
									<button type="button" class="info" data-toggle="modal" data-target=".myModal">Detail</button>
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
							<h5 class="text-uppercase font-weight-bold">Iphone 8</h5>
							<h4 class="text-red font-weight-bold"><i>$699.00</i></h4>
							<hr>
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



		
	</div>
	<div id="mac">
		<img src="images/imacbg-f.jpg">
		<a href="#"><div><strong>iMac Pro</strong><span>(Power to the pro)</span></div></a>
	</div>


</content>

<?php require 'partials/footer.php'; ?>
