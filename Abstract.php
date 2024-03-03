<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Abstract Submit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/custom.css" />	
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />	
		<style type="text/css">
			b{color: rgb(245, 106, 106);}
			h2 a:link{
				text-decoration:underline;
				color: rgb(245, 106, 106);
			}
		</style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

						<!-- Header -->
								<?php 
									$Header = fopen("Header.html", "r") or die("Unable to open file!");
									echo fread($Header, filesize("Header.html"));
									fclose($Header);
								 ?>

						<!-- Content -->
							<section>
								<header class="main">
									<h1 id="Payment">Abstract Submit</h1>
								</header>
								<h2>Please send an abstract of your presentation/poster as <a href="files/Announcements/3rd-AWMS-Abstract Sample.docx" download="AWMS2019_Abstract_Sample.docx">sample</a> showed to our E-mail address (shown on the left sidebar) <b>before 02/06/2019</b>.</h2>
								<br>
								<br>
								<h1 id="Print">Free Poster Print Service</h1>
								<h2>We offer a Free Poster Print Service for all our attenders, please send us your poster <b>before 02/28/2019</b>, we will give you your poster number in 3 days.</h2>
							</section>

						</div>
					</div>

				<!-- Sidebar -->
					<?php 
					$Sidebar = fopen("Sidebar.html", "r") or die("Unable to open file!");
					echo fread($Sidebar, filesize("Sidebar.html"));
					fclose($Sidebar);
					 ?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			
	</body>
</html>