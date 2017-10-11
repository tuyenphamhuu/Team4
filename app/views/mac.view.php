<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>

<h1>

	<?php 
		foreach($user as $key => $value){
			echo "<h1>".$value->PhoneNumber."</h1>";
		}
	 ?>	

</h1>

<?php require 'partials/footer.php'; ?>