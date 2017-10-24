<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>

<div class="container-fluid">
	<!-- cart -->
	<div class="cart">
		<h2 class="font-weight-bold text-center">My cart</h2>
		<table class="bg-cart bill-ap table text-transform table-hover table-responsive">
			<thead>
				<tr>
					<th style="width: 4%">STT</th>
					<th style="width: 35%">Products Name</th>
					<th style="width: 10%">Color</th>
					<th style="width: 15%">Price</th>
					<th style="width: 15%">Quantity</th>
					<th style="width: 15%">Total Money</th>
					<th style="width: 6%">Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$sub = null;
					if(isset($arC)){
						$stt=0;
					foreach ($arC as $key => $value) {
						$var=array_keys($value);
						$k =array_shift($var);
						?>
						<tr class="list-pr-ap">
							<th><?php echo $stt+1; ?></th>
							<td>
								<div class="row">
									<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
										<img class="img-myc" src="../../public/images/<?php echo $arC[$stt][$k]['image'] ?>">
									</div>
									<div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
										<?php echo $arC[$stt][$k]['name'] ?>
									</div>
								</div>
							</td>
							<td>
							<div class="detail-image">
								<img class="image-color" src="public/images/<?php echo $arC[$stt][$k]['color']?>.png">
							</div>
							</td>
							<th>$<?php echo $arC[$stt][$k]['price'] ?></th>
							<td class="count-ap">
								<input class="text-center" type="number" value="<?php echo $arC[$stt][$k]['sl'] ?>" min="1">
							</td>
							<td>$<?php  echo $total = $arC[$stt][$k]['sl']*$arC[$stt][$k]['price']; $sub += $total  ?></td>
							<td class="edit-bill">
								<!-- Button trigger modal -->
								<button type="button" data-toggle="modal" data-target="#exampleModal">
								  	<img class="remove" src="/public/images/trash-ap-3.png">
								</button>
								<!-- Modal -->
								

							</td>
						</tr>
						<?php
						$stt++;
					}
				}
				 ?>
				<tr class="list-pr-ap">
					<td colspan="4" class="text-left">
						<a href="" class="btn prc-bill" >&laquo; Keep buying</a>
					</td>
					<td class="font-weight-bold">
						SubTotal: $
						<?php echo $sub; ?>
					</td>
					<td>
						<a href="watch?sub=<?php echo $sub ?>" class="btn prc-bill" >Checkout &raquo;</a>
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
