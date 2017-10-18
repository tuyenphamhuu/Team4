<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>

<div class="container-fluid">
	<!-- cart -->
	<div class="cart">

	<?php var_dump($_SESSION['cart']); ?>
		<h2 class="font-weight-bold text-center">My cart</h2>
		<table class="bg-cart bill-ap table text-transform table-hover table-responsive">
			<thead>
				<tr>
					<th style="width: 4%">	#</th>
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
							<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
								<img class="img-myc" src="../../public/images/7+-f.jpg">
							</div>
							<div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
								iPhone 8
							</div>
						</div>
					</td>
					<td>$699</td>
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
					<th>2</th>
					<td>
						<div class="row">
							<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
								<img class="img-myc" src="../../public/images/ipad-pro-10in.png">
							</div>
							<div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
								iPad Pro 12.9 inch
							</div>
						</div>
					</td>
					<td>$799</td>
					<td class="count-ap">
						<input class="text-center" type="number" value="2" min="1">
					</td>
					<td>$1598</td>
					<td class="edit-bill">
						<!-- Button trigger modal -->
						<button type="button" data-toggle="modal" data-target="#exampleModal">
						  	<img class="remove" src="/public/images/trash-ap-3.png">
						</button>
						<!-- Modal -->
						

					</td>
				</tr>
				<tr class="list-pr-ap">
					<th>3</th>
					<td>
						<div class="row">
							<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
								<img class="img-myc" src="../../public/images/6+.jpg">
							</div>
							<div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
								iPhone 7 plus
							</div>
						</div>
					</td>
					<td>$669</td>
					<td class="count-ap">
						<input class="text-center" type="number" value="1" min="1">
					</td>
					<td>$669</td>
					<td class="edit-bill">
						<!-- Button trigger modal -->
						<button type="button" data-toggle="modal" data-target="#exampleModal">
						  	<img class="remove" src="/public/images/trash-ap-3.png">
						</button>
						<!-- Modal -->
						

					</td>
				</tr>
				<tr class="list-pr-ap">
					<td colspan="4" class="text-left">
						<button class="btn prc-bill ">&laquo; Keep buying</button>
					</td>
					<td class="font-weight-bold">
						Total: $2397
					</td>
					<td>
						<button class="btn prc-bill">Pay &raquo;</button>
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