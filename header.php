<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/jpeg" href="img/logo.jpeg">
    <title>MA Athoriyyah</title>
	<link href="tamplates/css/bootstrap.min.css" rel="stylesheet">
	<link href="tamplates/css/font-awesome.min.css" rel="stylesheet">
	<link href="tamplates/css/datepicker3.css" rel="stylesheet">
	<link href="tamplates/css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Charts</title>
	<link href="tamplates/css/bootstrap.min.css" rel="stylesheet">
	<link href="tamplates/css/font-awesome.min.css" rel="stylesheet">
	<link href="tamplates/css/datepicker3.css" rel="stylesheet">
	<link href="tamplates/css/styles.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="dashboard.php"><span>Pendataan</span> Alumni</a>
				
						
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="img/logo.jpeg" class="img-responsive" alt="">
			</div>
			
			<div class="profile-usertitle">
				
			<?php 
			
			if($_SESSION["a2_level"] == 'super_user'){
			?>
				<div class="profile-usertitle-name" id="username">Hallo 
				<?php echo $_SESSION["a2_username"]; ?>
				</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<?php } ?>
			<?php 
			if($_SESSION["a2_level"] == 'user'){
			?>
				<div class="profile-usertitle-name" id="username">Hallo 
				<?php echo $_SESSION["a2_username"]; ?> </div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<?php } ?>
			<div class="clear"></div>
		</div>
		
		<ul class="nav menu">
			<li class=""><a href="dashboard.php"><em class="fa fa-dashboard  color-blue">&nbsp;</em> Dashboard</a></li>
			<!--<?php 
						// Menu ditampilkan hanya jika user login
			if (sudah_login()) {
				echo '<li><a href="anggota.php"><em class="fa fa-address-book-o">&nbsp;</em> Data Anggota</a></li>';
			}
			if (isset($_SESSION["a2_hak_akses"]) && $_SESSION["a2_hak_akses"]!=""){
				$array_menu = tampil_menu("biasa", $_SESSION["a2_hak_akses"]);
				$menu_utama = "";
				foreach ($array_menu as $data_menu) {
					$menu_utama .= "<li><a href='$data_menu[halaman_modul]'>$data_menu[nama_modul]</a></li>";
				}
				echo $menu_utama;
			}
			?>-->
			<li><a href="anggota.php"><em class="fa fa-address-book-o color-blue">&nbsp;</em>
			
			<!--<?php echo $_SESSION["a2_level"]; ?>-->
			Data Anggota</a></li>
			
			
			<?php 
			
			if($_SESSION["a2_level"] == 'super_user'){
			?>
			<li><a href="tambah_anggota.php"><em class="fa fa-clone color-blue">&nbsp;</em>Tambah Anggota</a></li>
			<li><a href="laporan.php"><em class="fa fa-bar-chart color-blue">&nbsp;</em>Laporan</a></li>
			<!--<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>-->
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon  color-blue">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Super User
					</a></li>
					<li><a class="" href="pengaturan_sistem.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Pengaturan Sistem
					</a></li>
					<li><a class="" href="pengguna.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Pengguna
					</a></li>
				</ul>
			</li>
			<?php } ?>

			<li><a href="profil.php"><em class="fa fa-user-circle color-blue">&nbsp;</em>Profil</a></li>
			
			
			<!--<li><a href="logout.php" onclick="return confirm('Keluar dari sistem ?')"><i class="fui-exit"></i> Logout</a></li>-->
			<li><a href="logout.php" onclick="return confirm('Keluar dari sistem <?php echo $setting_sistem["nama_sistem"] ?>?')"><em class="fa fa-power-off color-red">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
</div>	<!--/.main-->
	
	<script src="tamplates/js/jquery-1.11.1.min.js"></script>
	<script src="tamplates/js/bootstrap.min.js"></script>
	<script src="tamplates/js/chart.min.js"></script>
	<script src="tamplates/js/chart-data.js"></script>
	<script src="tamplates/js/easypiechart.js"></script>
	<script src="tamplates/js/easypiechart-data.js"></script>
	<script src="tamplates/js/bootstrap-datepicker.js"></script>
	<script src="tamplates/js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>
