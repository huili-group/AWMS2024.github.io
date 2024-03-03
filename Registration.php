<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Registration</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/custom.css" />	
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />	
		<style type="text/css">
			input[type="text"],	input[type="password"],	input[type="email"],nput[type="tel"],
			input[type="search"],input[type="url"]{
				display: inline;
			}
			h3	{
				color: rgb(127, 136, 143);
			}
			h3 a{
				color: rgb(245, 106, 106);
				text-decoration: underline;
			}
			p{
				display: block;
			}
			label{
				margin: 1em 0 0 0;
			}
			p.alert{
				margin: 0 0 0 0;
			}
			p.alert span{
				color: rgb(245, 106, 106);
			}
			p.alert sup{
				color: red;
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
									<h1 id="Registration">Registration</h1>
									<h3 class="alert">Our Registration System has been closed science 03/07/2019. See you next time in Ulsan.</h3>
								</header>
								

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