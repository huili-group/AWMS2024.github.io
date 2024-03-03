<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Program</title>
		<meta charset="gb2312" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/custom.css" />	
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />	
		<style type="text/css">
			/*设置表格奇偶数列背景色不同*/
			.table-responsive table tbody th:nth-child(even){
			    background-color: red;
			}
			.table-responsive table tbody th:nth-child(odd){
			    background-color: black;
			}
			a img{
				width: 100%;
				border='0';
			}
			a{
				outline:none;
				text-decoration:none;
			}
			iframe{
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
									<h1 id="Program">Program</h1>
								</header>
								<div class="row">
									<div class="col-6 col-12-small">
										<h2 id="Announcements">Announcements</h2>
										<div class="table-wrapper col-6">
											<table>
												<tbody>
													<tr>
														<td><!-- <a href="files/Announcements/3rd-AWMS-1stAnnouncement.pdf" target="_blank">1<sup>st</sup> Announcement</a> -->1<sup>st</sup> Announcement</td>
														<td>07/20/2018</td>
													</tr>
													<tr>
														<td><a href="files/Announcements/3rd-AWMS-2ndAnnouncement.pdf" target="_blank">2<sup>nd</sup> Announcement</td>
														<td>12/20/2018</td>
													</tr>
													<tr>
														<td><a href="files/Announcements/3rd-AWMS-3rdAnnouncement.pdf" target="_blank">3<sup>rd</sup>Announcement</a></td>
														<td>02/20/2019</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								
									<div class="col-12">
										<h2 id="Schedule">Schedule</h2>
										<div>
											<p>
												<?php 
												$Iframe = fopen("Program_AWMS2019-Final(1).htm", "r") or die("Unable to open file, Please press the button to download.");
												echo fread($Iframe, filesize("Program_AWMS2019-Final(1).htm"));
												fclose($Iframe);
												 ?>
												<a href="files/Announcements/Program_AWMS2019.pdf" class="button icon fa-download" target="_blank">download PDF version</a>
											</p>
											
										</div>
									</div>
									
									
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