	<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>
	
<div id="wrapper-detail">
	<div class="container">	
		<nav class="breadcrumb">
			 <a class="breadcrumb-item" href="#">iPad Pro</a>	
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

										foreach ($products as $product) {
											?>
												<div class="col-lg-3 text-center">
								        			<div class="form-check">
												    	<input class="form-check-input" type="radio" name="Radios1" id="exampleRadios1" value="option1" checked>
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
				</div>
				<hr>
				<div class="detail5 row">
    				<a href="#" target="_blank"><button type="button" id="buynow-btn" class="btn btn-dark">Buy now</button></a>
    				<a href="#" target="_blank"><button type="button" id="add-btn" class="btn btn-dark">Add to cart</button></a>
				</div>
				<hr>
				<div class="detail6 row">
					<div class="tech-specs">
						<div class="row">
							<h4>Tech specs</h4>
						</div>
						<div class="row">
							<p>Khâu xong, Triệu Lam cắn chỉ, vuốt vuốt áo cho phẳng lại rồi đưa cho Phong Thiên Trí, bảo hắn mặc vào. Phong Thiên Trí mặc áo xong cười tươi như hoa, trong lòng nghĩ đến lúc về nhà sẽ đem cất áo này thật kỹ, không thể tùy tiện mặc, đây chính là chiếc áo đầu tiên mà Triệu Lam đã tự tay đơm cúc cho hắn.</p>
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
				<p>Khâu xong, Triệu Lam cắn chỉ, vuốt vuốt áo cho phẳng lại rồi đưa cho Phong Thiên Trí, bảo hắn mặc vào. Phong Thiên Trí mặc áo xong cười tươi như hoa, trong lòng nghĩ đến lúc về nhà sẽ đem cất áo này thật kỹ, không thể tùy tiện mặc, đây chính là chiếc áo đầu tiên mà Triệu Lam đã tự tay đơm cúc cho hắn.</p>
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
       				<div class="col-md-3 text-center">
            			<img class="img-fluid" src="public/images/ipad-pro-12in-256GB.png">
            			<a class="colorblack" href="#">
            				<p>12.9-inch iPad Pro 256GB</p>
            			</a>
           			</div>	
        			<div class="col-md-3 text-center">
            			<img class="img-fluid" src="public/images/ipad-9in-128GB.png">
             			<a class="colorblack" href="#">
             				<p>9.7-inch iPad Pro 128GB</p>
             			</a>
        			</div>
    				<div class="col-md-3 text-center">	
             			<img class="img-fluid" src="public/images/ipad-mini4-128G.png">
            			<a class="colorblack" href="#">
             				<p>iPad Mini 4 128GB</p>
             			</a>
        			</div>
        			<div class="col-md-3 text-center">	
             			<img class="img-fluid" src="public/images/ipad-pro-10in-256G.png">
             			<a class="colorblack" href="#">
            				<p>10.5 inch iPad Pro 256GB</p>
             			</a>
    				</div>
      			</div>
 			</div>
 		</div>
 	</div>
</div>
<?php require 'partials/footer.php'; ?>