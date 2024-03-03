<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Documents Download</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/custom.css" />	
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />	
		<style type="text/css">
			
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
									<h1 id="Documents Download">Documents Download</h1>
								</header>
								<div class="table-wrapper">
									<table>
										<tbody>
											<tr>
												<td rowspan="3" align="center" style="vertical-align: middle;">Announcements</td>
												<td>1<sup>st</sup> Announcement</td>
												<td><!-- <a href="files/Announcements/3rd-AWMS-1stAnnouncement.pdf" class="button icon fa-download" target="_blank">Download</a> --><a class="button icon fa-download" target="_blank">Download</a></td>
											</tr>
											<tr>
												<td>2<sup>nd</sup> Announcement</td>
												<td><a href="files/Announcements/3rd-AWMS-2ndAnnouncement.pdf" class="button icon fa-download" target="_blank">Download</a></td>
											</tr>
											<tr>
												<td>3<sup>rd</sup> Announcement</td>
												<td><a href="files/Announcements/3rd-AWMS-3rdAnnouncement.pdf" class="button icon fa-download" target="_blank">Download</a></td>
											</tr>
											<tr>
												<td rowspan="2" align="center" style="vertical-align: middle;">Program</td>
												<td>1 Page Verrsion + Campus Map</td>
												<td><a href="files/Campus Map.pdf" class="button icon fa-download" target="_blank">Download</a></td>
											</tr>
											<tr>
												<td>1 Page Version + Full Version + Campus Map</td>
												<td><a href="files/Announcements/Program_AWMS2019.pdf" class="button icon fa-download" target="_blank">Download</a></td>
											</tr>
											<tr>
												<td align="center">Campus Map</td>
												<td>East Campus and West Campus with marked places.</td>
												<td><a href="images/campus map.jpg" class="button icon fa-download" target="_blank">Download</a></td>
											</tr>
										</tbody>
									</table>
								</div>
								
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