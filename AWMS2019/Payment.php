<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Payment</title>
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
									<h1 id="Payment">Payment</h1>
								</header>
								<h2>The payment of this conference is shown below:</h2>
								<div class="row">

									<div class="col-8 col-12-small">
										<table>
											<tbody>
												<tr>
													<th class="head"></th>
													<th class="head"></th>
													<th class="early">Early payment <span>(Before 01/27/2019)</span></th>
													<th class="late">Late payment</th>
												</tr>
												<tr>
													<th rowspan="2" class="head">Participant</th>
													<th class="head">Faculty</th>
													<td class="early">CNY &yen;1000 / USD &#36;160</td>
													<td class="late">CNY &yen;1200 / USD &#36;200</td>
												</tr>
												<tr>
													<th class="head">Student</th>
													<td class="early">CNY &yen;800 / USD &#36;120</td>
													<td class="late">CNY &yen;1000 / USD &#36;160</td>
												</tr>
												<tr>
													<th colspan="2" class="head">Accompany</th>
													<td colspan="2">CNY &yen;500 / USD &#36;70</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<p>For Participants:The payment includes conference banquet, coffee break, lunch and dinner.
								<br>
								For Accompanies:The payment includes conference banquet and sight visit around the city.</p>
								
								<h2>Payment information:</h2>
								<h3>PAY by US DOLLAR</h3>
								<ul>
									<li>BENEFICIARY: UNIVERSITY OF SCIENCE AND TECHNOLOGY OF CHINA</li>
									<li>ACCOUNT No.: 187203468859(US DOLLAR)</li>
									<li>BANK NAME: BANK OF CHINA HEFEI NANCHENG BRANCH</li>
									<li>SWIFT CODE: BKCHCNBJ780</li>
								</ul>
								<h3>PAY by RMB (国内账户)</h3>
								<ul>
									<li>银行户名：中国科学技术大学</li>
									<li>银行账号：184203468850</li>
									<li>开户银行：中行合肥南城支行</li>
									<li>联行号： 1043 6100 3246</li>
								</ul>
								<h3><span>NOTE:</span> Please email us your information (name and accompanying person if there is) through <span>AWMS2019@ustc.edu.cn</span> after you complete the payment.</h3>
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