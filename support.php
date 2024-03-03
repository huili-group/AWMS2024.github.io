<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Support</title>
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
									<h1 id="Support">Support</h1>
								</header>
								<ul>
									<li><a href="files/support/AbsBook_AWMS2019(2).docx">AWMS2019-Book</a></li>
									<li><a href="files/support/Name-tag Template.docx">Name-tag Template</a></li>
									<li><a href="files/support/Staff.xlsx">工作人员名单</a></li>
									<br>
									<li>
										会场播放
										<ul>
											<li><a href="files/support/PPT/AWMS2019(1).pptx">Program PPT</a></li>
											<li><a href="files/support/PPT/Timing-3min.pptx">Timing-3min.pptx</a></li>
											<li><a href="files/support/PPT/Timing-5min.pptx">Timing-5min.pptx</a></li>
											<li><a href="files/support/PPT/Timing-15min.pptx">Timing-15min.pptx</a></li>
											<li><a href="files/support/PPT/Timing-25min.pptx">Timing-25min.pptx</a></li>
											<li><a href="files/support/PPT/AWMS Awards.pptx">AWMS Awards.pptx</a></li>
										</ul>
									</li>
									<li><a href="files/support/Signature Form.rar">Signature Form.rar</a>
										<ul>
											<li><a href="files/support/Signature Form/foreign.xlsx">foreign.xlsx</a></li>
											<li><a href="files/support/Signature Form/签到表1_国内.docx">签到表1_国内.docx</a></li>
											<li><a href="files/support/Signature Form/签到表1_国内_附表.docx">签到表1_国内_附表.docx</a></li>
											<li><a href="files/support/Signature Form/签到表2_国外.docx">签到表2_国外.docx</a></li>
											<li><a href="files/support/Signature Form/签到表2_国外_附表.docx">签到表2_国外_附表.docx</a></li>
											<li><a href="files/support/Signature Form/"></a></li>
										</ul>
									</li>
									<li><a href="files/support/Hotel List.xlsx">Hotel List.xlsx</a></li>
									<li><a href="files/support/"></a></li>
									<li><a href="files/support/"></a></li>
									<li><a href="files/support/"></a></li>
									<li><a href="files/support/"></a></li>
									<li><a href="files/support/"></a></li>
									<li><a href="files/support/"></a></li>
									<li><a href="files/support/"></a></li>
									<li><a href="files/support/"></a></li>
									<li><a href="files/support/"></a></li>
								</ul>
								








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