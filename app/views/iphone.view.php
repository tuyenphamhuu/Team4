<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>

<div class="row wrapper-search-products">
	<div class="col-10"></div>
	<div class="col-2">
<input id="key" type="text" class="form-control search" placeholder="Search by name
by ajax" >
</div>
</div>


<!-- <h1>iPhone</h1> -->
<content>
<div id="wrapper-iphone">
	<div class="container"> 
		<nav class="breadcrumb">
		  	<a class="breadcrumb-item" href="#">iPhone</a>
		</nav>
		<hr>
	</div>
	<div class="container-fluid">
		<div class="iphone-products row">
			<?php 
					foreach ($products as $products) {
						?>
			<div class="col-md-3">
				
				<div class="iphone-item">
					<a href="#">
						<div class="overlay-image-ip">
							<img src="public/images/<?php 
								if ($products->Image != ''){
									echo $products->Image;
								}
								else{
									echo 'knowledge_graph_logo.png';
								}
								?>">
							<div class="overlay">
								<div class="text">
									<a href="/detailProduct?idProduct=<?php echo $products->ID_Product; ?>&type=<?php echo $products->ID_TypeProduct ?>">View Detail</a>
								</div>
							</div>
						</div>
					</a>
					<div>
						<h5><?php echo $products->ProductName; ?></h5>
						<p><b>From $<?php echo $products->NewPrice; ?></b></p>
						<a href="/detailProduct?idProduct=<?php echo $products->ID_Product; ?>&type=<?php echo $products->ID_TypeProduct ?>"><button type="button" class="btn btn-dark">Buy</button></a>
					</div>
					
				</div>

			</div>
			
			<?php
					}
				 ?>
		</div>
	</div>
</div>	
</content>
<?php require 'partials/footer.php'; ?>

<script>
	$('#key').on('keyup',function(e){
		// alert($('#sho').html());
     var name = $('#key').val();
		$.ajax({
			url: 'seach',
			type: 'POST',
			cache: false,
			data: {
				aname : name
			},
			success: function(data){
				$('#wrapper-iphone').html(data);
			},
			error: function (){
				alert('Có lỗi xảy ra');
			}
		});
    });
</script>	
