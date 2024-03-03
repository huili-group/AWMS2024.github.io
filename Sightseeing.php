<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Sightseeing</title>
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
									<h1 id="Sightseeing">Sightseeing</h1>
								</header>
								
								<h2>For Accompanies:</h2>
								<p>We will offer a 1-day sight visit around the city, including several sights: 
								<a href="http://www.ahm.cn/En/Home/Index">Anhui Museum</a>, Li Hongzhang's Former Residence, and Mingjiao Temple.
								</p>
								<h2>After the Conference: </h2>
								<p>We will help to orginize a 2-days group tour to the Yellow Mountain if there are enough people want to participate in. Additional fee will be charged for this tour. Deadline for sign up this group is on 02/20.</p>
								<h2>For Independent Travellers:</h2>
								<p>Around Hefei, Sanhe Town will be a good choice.</p>
								<p>To other cities such as Nanjing, Wuhan, Suzhou will also be very convenient by High-Speed Train within 3 hours.</p>








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