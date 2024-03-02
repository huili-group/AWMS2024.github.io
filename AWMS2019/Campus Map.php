<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Campus Map</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/custom.css" />	
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />	
		<style type="text/css">
			table tr th, td{
				border: 1px solid;
				border-color: black;
				border-collapse: collapse;
				vertical-align: middle;
				text-align: center;
				color: black;
			}
			table tr th.head{
				width: 10%;
			}
			ul {
				list-style-type: none;
			}
			h3 span{
				color: rgb(245, 106, 106);
			}
			th span{
				color: rgb(245, 106, 106);
			}
			img{
				width: 100%;
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
									<h1 id="Campus Map">Campus Map</h1>
								</header>
								
								<img src="images/campus map.jpg">

								<a href="files/Campus Map.pdf" class="button icon fa-download" target="_blank">download PDF version</a>

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