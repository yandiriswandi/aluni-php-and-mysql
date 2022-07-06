
<?php 
include 'global_fungsi.php';

if (sudah_login()) {
	header("Location: ./dashboard.php");
	die();
}
else {
	// Tambahkan header
	//include 'globl_header.php';

	// Jika ada session dari hasil error, berikan informasi errornya
	$form_username = "";
	if (isset($_SESSION["form_username"])) {
		$form_username = $_SESSION["form_username"];
		unset($_SESSION["form_username"]); 
	}
	?>
	<html>
	<head>
	<link rel="icon" type="image/jpeg" href="img/logo.jpeg">
    <title>MA Athoriyyah</title>
		<br>
		<br>
		<br>
		<title><?php echo $setting_sistem["nama_sistem"]; ?></title>
		<script type="text/javascript" src="./assets/js/vendor/jquery.min.js"></script>
		<script type="text/javascript" src="./assets/js/flat-ui.min.js"></script>
		<link rel="stylesheet" href="./assets/css/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="./assets/css/flat-ui.min.css">
		<body background = "img/login.jpeg" style="background-size:100% 100%;">
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
				<!-- End login form -->
			</div>
			<!-- End column section -->
		</div>
		<!-- End row -->
	</div>

<?php 
}
?>