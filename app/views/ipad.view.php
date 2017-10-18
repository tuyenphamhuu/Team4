<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>
<div id="wrapper-ipad">
	<div class="container">	
		<nav class="breadcrumb">
			  	<a class="breadcrumb-item" href="#">iPad</a>	  	
		</nav>
		<hr>
	</div>
	<div class="container-fluid">
		<div class="ipad-products row">
			<?php 
				foreach ($products as $products) {
			?>
			<div class="col-md-4">
				<div class="ipad-item">
					<a href="#">
						<div class="overlay-image">
							<img class="image-ipad" src="public/images/<?php 
									if ($products->Image != ''){
										echo $products->Image;
									}
									else{
										echo 'knowledge_graph_logo.png';
									}
									
									?>">
						    <div class="overlay">
							    <div class="text">View Detail</div>
							</div>
						</div>
						<h5><?php echo $products->ProductName; ?></h5>
						<p><b>From $<?php echo $products->NewPrice; ?></b></p>
						<a href="/detailProduct?idProduct=<?php echo $products->ID_Product; ?>"><button type="button" class="btn btn-dark">Buy</button></a>
					</a>
				</div>
			</div>
			<?php 
				}
			 ?>
		
		</div>
		
	</div>
</div>

<?php require 'partials/footer.php'; ?>
