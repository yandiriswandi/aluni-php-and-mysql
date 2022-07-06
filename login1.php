<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Login</title>
	<link href="tamplates/css/bootstrap.min.css" rel="stylesheet">
	<link href="tamplates/css/datepicker3.css" rel="stylesheet">
	<link href="tamplates/css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
		<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				
				<div class="login-form">
					<form action="proses.php" method="post">
						<div class="form-group">
							<input type="text" class="form-control login-field" placeholder="Username" id="login-name" name="username" value="<?php echo $form_username; ?>" required="" autofocus="">
							<label class="login-field-icon fui-user" for="login-name"></label>
						</div>

						<div class="form-group">
							<input type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass"  name="password" required>
							<label class="login-field-icon fui-lock" for="login-pass"></label>
						</div>
						<input type="hidden" name="aksi" id="aksi" value="login_sistem">
						<button class="btn btn-primary btn-lg btn-block" type="submit">Masuk</button>
						<!-- <a class="login-link" href="#">Lost your password?</a> -->
					</form>
					
					<?php // Tampilkan informasi jika ada!
		    		if (isset($_SESSION["form_error"])) {
		    			echo "<div class='alert alert-danger'>".$_SESSION["form_error"]."</div>";
		    			unset($_SESSION["form_error"]);
		    		}
		    		?>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="tamplates/js/jquery-1.11.1.min.js"></script>
	<script src="tamplates/js/bootstrap.min.js"></script>
</body>
</html>
