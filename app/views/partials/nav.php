<header>

	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 text-center">
		  		<a href="/" class="btn" role="button">
		  			<img class="logo" src="/public/images/logo-apple.png" alt="LOGO">
			  	</a>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-auto">
			  	<div class="search-ipt input-group stylish-input-group">
	                <input type="text" class="form-control search" placeholder="Search" >
	                <span class="input-group-addon">
	                    <button type="submit">
	                        <img src="images/search.svg" alt="search.svg">
	                    </button>  
	                </span>
	            </div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12 text-center">
				<a href="#">
					<img class="iconcart" src="/public/images/ic_shopping_cart_black_24px.svg" alt="shopping cart">
	           	</a>
			</div>
		</div>
	</div>
	<div class="backgroundblack">
		<div class="container">
			<div class="menu">
				<nav class="navbar navbar-expand-lg navbar-dark navbar-toggleable-md navbar-light">
				  	<!-- <a class="navbar-brand" href="#"></a> -->
				  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    	<!-- <span class="navbar-toggler-icon"></span> -->
				  	</button>
				  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav mr-auto ">
					      	<li class="nav-item">
					        	<a class="nav-link colorwhite" href="/">Home<span class="sr-only">(current)</span></a>
					      	</li>
							  <?php
							  	$datas = $_SESSION['data'];
									 foreach($datas as $data)
									 {
										?>
											<li class="nav-item">
												<a class="nav-link colorwhite" href="<?php echo $data->ProductName?>?id=<?php echo $data->ID_TypeProduct ?>"><?php echo $data->ProductName?></a>
											</li>
										<?php
									 } 
							  ?>
					      	
					      	
					    </ul>
				  	</div>
				</nav>
			</div>
		</div>
	</div >
</header>