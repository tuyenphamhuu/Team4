<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>

<h1>

	<?php 

		foreach ($user as $user) {
			?>
			<li><?php echo $user->UserName; ?></li>
			<?php
		}
	 ?>	

</h1>

<?php require 'partials/footer.php'; ?>