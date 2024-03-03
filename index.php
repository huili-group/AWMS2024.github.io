<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>3rd AWMS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/custom.css" />
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<style type="text/css">
			td span{
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

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>The 8<sup>th</sup> Asian Workshop on <br />
											Molecular Spectroscopy</h1>
										</header>
										September  11<sup>th</sup>-12<sup>th</sup> @ College of Chemistry, Jilin University 
										
									</div>
								</section>
									<div class="col-12">
										<span class="image fit">
											<a href="images/AWMS-2019.jpg" target="_blank"><img src="images/AWMS-2019.jpg" alt="AWMS-2019.jpg" /></a>
										</span>
										<ul class="actions">
											<li><a href="Introduction.php" class="button big">Learn More</a></li>
										</ul>
									</div>
							<!-- Section -->
								
								<section>
									<header class="major">
										<h2>About the Workshop</h2>
									</header>
									<div class="table-wrapper">
										<table>
											<tbody>
												<tr>
													<th>Date</th>
													<th>March 7<sup>th</sup>-9<sup>th</sup></th>
												</tr>
												<tr>
													<td>Venue</td>
													<td>Coference Room, 5th floor, Activity Center, East Campus of USTC<br />
														No.96 JinZhai Rd, Baohe District, Hefei, Anhui, P.R.China.
													</td>
												</tr>
												<tr>
													<td><!-- <a href="files/Announcements/3rd-AWMS-1stAnnouncement.pdf" target="_blank">1<sup>st</sup> Announcement</a> -->1<sup>st</sup> Announcement</td>
													<td>07/20/2018</td>
												</tr>
												<tr>
													<td><a href="files/Announcements/3rd-AWMS-2ndAnnouncement.pdf" target="_blank">2<sup>nd</sup> Announcement</td></a>
													<td>12/20/2018</td>
												</tr>
												<tr>
													<td>Early Payment</td>
													<td>Before 01/27/2019</td>
												</tr>
												<tr>
													<td>Abstract Submit</td>
													<td>Before 02/06/2019, See more at Registration &rarr;<a href="Abstract.php">Abstract Submit</a>.</td>
												</tr>
												<tr>
													<td><a href="files/Announcements/3rd-AWMS-3rdAnnouncement.pdf" target="_blank">3<sup>rd</sup>Announcement</a></td>
													<td>02/20/2019</td>
												</tr>
												<tr>
													<td>Poster Submit</td>
													<td>Before 02/28/2019, if you need our <a href="Abstract.php#Print">Free Poster Print Service</a>.</td>
												</tr>
												<!-- <tr>
													<td>Registration Deadline</td>
													<td></td>
												</tr>
												<tr>
													<td>Abstract Submission Deadline</td>
													<td></td>
												</tr> -->
												<!-- <tr>
													<td>Item4</td>
													<td>Vitae integer tempus condimentum.</td>
												</tr>
												<tr>
													<td>Item5</td>
													<td>Ante turpis integer aliquet porttitor.</td>
												</tr> -->
											</tbody>
										</table>
									</div>
								</section>
								<section>
									<header class="major">
										<h2>Registration Information</h2>
									</header>
									<div class="table-wrapper">
										<table>
											<tbody>
												<tr>
													<th>Date</th>
													<th>Place</th>
													<th>Payment</th>
												</tr>
												<tr>
													<td>March 6<sup>th</sup>, afternoon</td>
													<td>USTC Reception Center Experts Building 专家楼</td>
													<td>Credit Card / Cash</td>
												</tr>
												<tr>
													<td>March 7<sup>th</sup>, morning</td>
													<td>5<sup>th</sup> floor, Activity Center (Venue) 活动中心5楼</td>
													<td>Credit Card / Cash</td>
												</tr>
												<tr>
													<td>March 7<sup>th</sup>, afternoon and later</td>
													<td>5<sup>th</sup> floor, Activity Center (Venue) 活动中心5楼</td>
													<td>Cash Only</td>
												</tr>
											</tbody>
										</table>
									</div>
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