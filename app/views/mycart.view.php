<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>
<div class="container-fluid">
	<!-- cart -->
	<div class="cart">

	<!-- <?php var_dump($_SESSION['cart']); ?> -->
		<h2 class="font-weight-bold text-center">My cart</h2>
		<table class="bg-cart bill-ap table table-inverse text-transform table-hover table-responsive">
			<thead>
				<tr>
					<!-- <th style="width: 4%">	#</th> -->
					<th style="width: 8%">Images</th>
					<th style="width: 27%">Name Products</th>
					<th style="width: 10%">Storage</th>
					<th style="width: 15%">Price</th>
					<th style="width: 15%">Quantity</th>
					<th style="width: 15%">Total Money</th>
					<th style="width: 6%">Delete</th>
				</tr>
			</thead>
			<tbody>
				<tr class="list-pr-ap align-middle">
					<td>
						<img class="img-myc" src="../../public/images/7+-f.jpg">
					</td>
					<td>iPhone 8</td>
					<td>
						<select>
							<option>none</option>
							<option>4GB</option>
							<option>8GB</option>
							<option>16GB</option>
							<option>32GB</option>
							<option>64GB</option>
							<option>128GB</option>
							<option>256GB</option>
						</select>
					</td>
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
					<td>
						<select>
							<option>none</option>
							<option>4GB</option>
							<option>8GB</option>
							<option>16GB</option>
							<option>32GB</option>
							<option>64GB</option>
							<option>128GB</option>
							<option>256GB</option>
						</select>
					</td>
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
					<td>
						<select>
							<option>none</option>
							<option>4GB</option>
							<option>8GB</option>
							<option>16GB</option>
							<option>32GB</option>
							<option>64GB</option>
							<option>128GB</option>
							<option>256GB</option>
						</select>
					</td>
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
				<tr class="list-pr-ap">
					<td colspan="5" class="text-left">
						<button class="btn prc-bill ">&laquo; Keep buying</button>
					</td>
					<td class="font-weight-bold">
						Total: $2397
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