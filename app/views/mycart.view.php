<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>

<div class="container-fluid">
	<!-- cart -->
	<div class="cart">
	<!-- <?php var_dump($_SESSION['cart']); ?> -->
		<h2 class="font-weight-bold text-center">My cart</h2>
		<table class="bg-cart bill-ap table text-transform table-hover table-responsive">
			<thead>
				<tr>
					<th style="width: 9%">Images</th>
					<th style="width: 40%">Products Name</th>
					<th style="width: 15%">Unit Price</th>
					<th style="width: 15%">Quantity</th>
					<th style="width: 15%">Total Amount</th>
					<th style="width: 6%">Delete</th>
				</tr>
			</thead>
			<tbody>
				<tr class="list-pr-ap align-middle">
					<td>
						<img class="img-myc" src="../../public/images/7+-f.jpg">
					</td>
					<td>iPhone 8</td>
					<th>$699</th>
					<td class="count-ap">
						<input class="text-center" type="number" value="1" min="1" >
					</td>
					<td>$699</td>
					<td class="edit-bill">
						<!-- Button trigger modal -->
						<button type="button" data-toggle="modal" data-target="#exampleModal">
						  	<img class="remove" src="/public/images/trash-ap-3.png">
						</button>
					</td>
				</tr>
				<tr class="list-pr-ap">
					<td>
						<img class="img-myc" src="../../public/images/ipad-pro-10in.png">
					</td>
					<td>iPad Pro 12.9 inch</td>
					<th>$799</th>
					<td class="count-ap">
						<input class="text-center" type="number" value="2" min="1">
					</td>
					<td>$1598</td>
					<td class="edit-bill">
						<!-- Button trigger modal -->
						<button type="button" data-toggle="modal" data-target="#exampleModal">
						  	<img class="remove" src="/public/images/trash-ap-3.png">
						</button>
					</td>
				</tr>
				<tr class="list-pr-ap">
					<td>
						<img class="img-myc" src="../../public/images/6+.jpg">
					</td>
					<td>iPhone 7 plus</td>
					<th>$669</th>
					<td class="count-ap">
						<input class="text-center" type="number" value="1" min="1">
					</td>
					<td>$669</td>
					<td class="edit-bill">
						<!-- Button trigger modal -->
						<button type="button" data-toggle="modal" data-target="#exampleModal">
						  	<img class="remove" src="/public/images/trash-ap-3.png">
						</button>
					</td>
				</tr>

				<?php 
					foreach ($arC as $value) {
						?>
						<tr class="list-pr-ap">
							<th><?php echo $value[0] ?></th>
							<td>
								<div class="row">
									<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
										<img class="img-myc" src="../../public/images/<?php echo $value[6] ?>">
									</div>
									<div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
										<?php echo $value[4] ?>
									</div>
								</div>
							</td>
							<th>$<?php echo $value[5] ?></th>
							<td class="count-ap">
								<input class="text-center" type="number" value="<?php echo $value[3] ?>" min="1">
							</td>
							<td>$<?php echo $total = $value[5]*$value[3]; ?></td>
							<td class="edit-bill">
								<!-- Button trigger modal -->
								<button type="button" data-toggle="modal" data-target="#exampleModal">
								  	<img class="remove" src="/public/images/trash-ap-3.png">
								</button>
								<!-- Modal -->
								

							</td>
						</tr>
						<?php
					}
				 ?>
				<tr class="list-pr-ap">
					<td colspan="4" class="text-left">
						<button class="btn prc-bill ">&laquo; Keep buying</button>
					</td>
					<td class="font-weight-bold">
						SubTotal: $2397
					</td>
					<td>
						<button class="btn prc-bill">Check Out &raquo;</button>

					</td>
				</tr>

				<!-- Modal -->
				<div class=" modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  	<div class="modal-dialog" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				        		<h5 class="modal-title text-transform">Confirm Delete</h5>
				      		</div>
				      		<div class="modal-body">
				        		<h4 class="modal-title text-transform">Do you want to delete this row?</h4>
				      		</div>
					      	<div class="modal-footer">
						        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Back</button>
						        <button type="button" class="yes-remove btn btn-danger btn-sm">Yes, please</button>
					      	</div>
				    	</div>
				  	</div>
				</div>

			</tbody>
		</table>
				<!-- Modal -->
				<div class=" modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  	<div class="modal-dialog" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				        		<h5 class="modal-title text-transform">Confirm Delete</h5>
				      		</div>
				      		<div class="modal-body">
				        		<h4 class="modal-title text-transform">Do you want to delete this row?</h4>
				      		</div>
					      	<div class="modal-footer">
						        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Back</button>
						        <button type="button" class="yes-remove btn btn-danger btn-sm">Yes, please</button>
					      	</div>
				    	</div>
				  	</div>
				</div>

			</tbody>
		</table>
	</div>
</div>
	
<script>
	$(document).ready(function() {
		var needToRemove;
		var confirmModal = $('#exampleModal');
		$('.remove').click(function() {
			needToRemove = $(this).closest('tr');
		});
		$('.yes-remove').click(function() {
			confirmModal.modal('hide');
			needToRemove.remove();
		});
	});
</script>

<?php require 'partials/footer.php'; ?>
