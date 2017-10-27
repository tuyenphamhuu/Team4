<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; 
//if(isset($_SESSION['sl'])){echo $_SESSION['sl'];}
?>
	
<div id="wrapper-detail">
	<div class="container">	
		<nav class="breadcrumb">
			 <a class="breadcrumb-item" href="/iPad?id=2">iPad</a>	
		</nav>
		<hr>
	</div>
	<div id="detail-item" class="container">
		<div class="row">

			<div class="col-md-6 text-center">
				<div class="detail-image">
					<img src="public/images/<?php echo $products[0]->Image; ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="detail1">
					<h2><?php echo $products[0]->ProductName; ?></h2>
					<hr>
				</div>
				<div class="detail2">
					<div class="panel-group" >
   						<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        						<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        						Color</a>
      							</h4>
    						</div>
    						<div id="collapse2" class="panel-collapse collapse">
      							<div class="panel-body">
					        		<div class="row">
									
									<?php 
										if($products[0]->Color != ''){
										foreach ($products as $product) {
											?>
												<div class="col-lg-3 text-center">
								        			<div class="form-check">
												    	<input class="form-check-input" type="radio" name="Radios1" id="exampleRadios1" checked="checked" value="<?php echo $product->Color ?>" >
												    		<label for="exampleRadios1" class="form-check-label">
												     		<span>
												    			<img class="image-color" src="public/images/<?php echo $product->Color ?>.png">
												    			<p><?php echo $product->Color ?></p>
												    		</span>
												  		</label>	 
													</div>
								        		</div>
											<?php
										}
									}
									 ?>
									 
					        		</div>
 								 </div>
    						</div>
  						</div>
		        	</div>
		      	</div>
		      	<hr>
  				<div class="detail4 row">
					 <label for="example-number-input" class="col-3 col-form-label">Quantity</label>
					 <div class="col-3">
					    <input class="form-control" type="number" value="1" min="1" id="example-number-input">
					 </div>
					 <input type="text" id="idProduct" hidden="hidden"  value="<?php echo $products[0]->ID_Product; ?>">
					 <input type="text" id="ProductName" hidden="hidden"  value="<?php echo $products[0]->ProductName; ?>">
					 <input type="text" id="NewPrice" hidden="hidden"  value="<?php echo $products[0]->NewPrice; ?>">
					 <input type="text" id="image" hidden="hidden"  value="<?php echo $products[0]->Image; ?>">
				</div>
				<hr>
				<div class="detail5 row">
    				<button type="button"  id="add-btn" class="btn btn-dark">Add to cart</button>
				</div>

				<hr>
				<div class="detail6 row">
					<div class="tech-specs">
						<div class="row">
							<h4>Tech specs</h4>
						</div>
						<div class="row">
							<p><?php echo $product->Config ?></p>
						</div>
					</div>	
				</div>
		    </div>
		</div>
		<hr> 	
	</div>
	<div class="container">
		<div class="description-detail">
			<div class="row">	
				<h4>Description</h4>
			</div>
			<div class="row ">
				<p><?php echo $product->description ?></p>
			</div>
			<hr>
		</div>
	</div>
	<div class="container">
 		<div class="seemore">
 			<div class="row">
 				<h4>See more</h4>
			</div>
 		<div class="row">
                <div class="row semore-product">
                	<?php 
                		foreach ($moreprd as $moreprds) {
                			?>
                				<div class="col-md-3 text-center">
			            			<img class="img-fluid" src="public/images/<?php echo $moreprds->Image ?>">
			            			<a class="colorblack" href="/detailProduct?idProduct=<?php echo $moreprds->ID_Product ?>&type=<?php echo $moreprds->ID_TypeProduct ?>">
			            				<?php echo $moreprds->ProductName ?>
			            			</a>
			           			</div>
                			<?php
                		}
                	 ?>
       					
        			
      			</div>
 			</div>
 		</div>
 	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
	<div class="modal-header">
	  <h5 class="modal-title" id="exampleModalLabel">Add to Cart</h5>

	</div>
	<div class="modal-body">
	<div class="alert alert-primary" role="alert">
	Add product to success.
	</div>
	
	</div>
	<div class="modal-footer">
	  <button type="button" class="btn btn-info"  onclick="goBack()" >Back on</button>
	  <button type="button" class="btn btn-secondary" data-dismiss="modal">On page</button>
	  <a href="/mycart"><button type="button" class="btn btn-primary">Checkout</button></a>
	</div>
  </div>
</div>
</div>


<?php require 'partials/footer.php'; ?>

<script>
jQuery(document).ready(function(){
    jQuery("#add-btn").click(function(){
     jQuery.ajax({
      type:"POST",
      url:"/ajaxAddProduct", //goi toi file ajax.php
      data:"color="+jQuery('input[name=Radios1]:checked').val()+"&sl="+jQuery("#example-number-input").val()+"&id="+jQuery("#idProduct").val()+"&name="+jQuery("#ProductName").val()+"&price="+jQuery("#NewPrice").val()+"&image="+jQuery("#image").val(),
      success:function(html){
         $('#exampleModal').modal('show');
      }
     });
    });
   });

   function goBack() {
    window.history.back();
	}
</script>