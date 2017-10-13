<?php require 'app/views/partials/head.php'; ?>

<div class="container">
	HELLO 
	<?php   
		echo $_SESSION['username']->UserName;
	?>
</div>
<?php require 'app/views/partials/footer.php'; ?>

