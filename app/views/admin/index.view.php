<?php require 'app/views/partials/head.php'; ?>

<div class="container">
	HELLO <?php   
		echo $_SESSION['user']->UserName;
	?>
</div>
<?php require 'app/views/partials/footer.php'; ?>

