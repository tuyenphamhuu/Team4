<?php ob_start() ?>
<?php if (!isset($_SESSION['user'])) {
	return redirect('loginadmin');
} ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>APPLE STORE TEAM 4</title>
	<link rel="stylesheet" type="text/css" href="/public/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="/public/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="https://glyphicons.com/">
	<link rel="stylesheet" href="/public/images/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/public/css/h-custom.css">
	<script src="/public/ckeditor/ckeditor.js"></script>
	<script src="/public/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/public/js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8"></script>	
	<script src="/public/js/custom.js" type="text/javascript" charset="utf-8" async defer></script>
<!-- 	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="/public/css/h-custom.css">
	<!-- 	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/public/js/jquery.dataTables.min.js" charset="utf-8" async defer></script>
</head>
<body>
<!-- <img id="img-admin" class="mx-auto d-block wh" src="/public/images/logo-apple.png"> -->
	<h2 class="text-center">APPLE MANAGER PAGE</h2>
	<div class="text-right">
		<div class="dropdown">
		  	<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    Hello <strong><?php echo $_SESSION['user']->UserName; ?></strong>
		  	</button>
		  	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			    <a class="dropdown-item" href="/logout">Logout</a>
			    
		  	</div>
		</div>
	</div>
<?php ob_end_flush() ?>
