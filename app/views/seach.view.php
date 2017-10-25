	<div class="container"> 
		<nav class="breadcrumb">
		  	<a class="breadcrumb-item" href="#">iPhone</a>
		</nav>
		<hr>
	</div>
	<div class="container-fluid">
		<div class="iphone-products row">
			<?php 
					foreach ($results as $items) {
						?>
			<div class="col-md-3">
				
				<div class="iphone-item">
					<a href="#">
						<div class="overlay-image-ip">
							<img src="public/images/<?php 
								if ($items->Image != ''){
									echo $items->Image;
								}
								else{
									echo 'knowledge_graph_logo.png';
								}
								?>">
							<div class="overlay">
								<div class="text">
									<a href="/detailProduct?idProduct=<?php echo $items->ID_Product; ?>&type=<?php echo $items->ID_TypeProduct ?>">View Detail</a>
								</div>
							</div>
						</div>
					</a>
					<div>
						<h5><?php echo $items->ProductName; ?></h5>
						<p><b>From $<?php echo $items->NewPrice; ?></b></p>
						<a href="/detailProduct?idProduct=<?php echo $items->ID_Product; ?>&type=<?php echo $items->ID_TypeProduct ?>"><button type="button" class="btn btn-dark">Buy</button></a>
					</div>
					
				</div>

			</div>
			
			<?php
					}
				 ?>
		</div>
	</div>

