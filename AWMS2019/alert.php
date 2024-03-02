<?php 
session_id($_GET['id']);
session_start();
$name = $_SESSION['name1']." ".$_SESSION['name2'];
$tablelist=	"Name"."\t".$name."\r\n".
			"Gender"."\t".$_SESSION['gender']."\r\n".
			"Title"."\t".$_SESSION['title']."\r\n".
			"Institute"."\t".$_SESSION['institute']."\r\n".
			"VisaHelp"."\t".$_SESSION['visahelp']."\r\n".
			"Presentation"."\t".$_SESSION['presentation']."\r\n".
			"TitleofPresentation"."\t".$_SESSION['prestitle']."\r\n".
			"Email"."\t".$_SESSION['email']."\r\n".
			"Phone"."\t".$_SESSION['phone']."\r\n".
			"Address"."\t".$_SESSION['address']."\r\n".
			"ArriDate"."\t".$_SESSION['arridate']."\r\n".
			"DeparDate"."\t".$_SESSION['depadate']."\r\n".
			"Hotel"."\t".$_SESSION['hotel']."\r\n".
			"ShareRoom"."\t".$_SESSION['shroom']."\r\n".
			"Roomate"."\t".$_SESSION['roomate']."\r\n"
			;
$ttime= date("m-d-h-i-sa");
$myfile = fopen("./files/Registrate/name/$name-$ttime.txt", "w");
fwrite($myfile, $tablelist);
fclose($myfile);
$timefile = fopen("./files/Registrate/time/$ttime-$name.txt", "w");
fwrite($timefile, $tablelist);
fclose($timefile);
session_destroy();
?>

<html>
	<head>
		<title>Registration</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/custom.css" />	
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />	
		<style type="text/css">
			p{
				display: block;
			}
			label{
				margin: 1em 0 0 0;
			}
			p.alert{
				margin: 0 0 0 0;
			}
			h2{
				color: rgb(245, 106, 106);
			}
			h3{
				color: rgb(127, 136, 143);
			}
			h3 u{
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
									<h1 id="Program">Registration</h1>
								</header>
								
								<h2>Thanks For Your Registration!</h2>
								<h3>You will receive a confirm e-mail within 3 working days from AWMS2019@ustc.edu.cn (except from Jan. 30<sup>th</sup> to Feb. 10<sup>th</sup> because of the Chinese New Year holiday),
								<br>please make sure our e-mail address is in your white list. 
								<br>If you haven't received the e-mail over a week, please contact us on AWMS2019@ustc.edu.cn .
								</h3>
								<h3><span id="show"></span></h3>
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
			<script type="text/javascript">
			var t=15;
			setInterval("refer()",1000);
			function refer(){ 
				if(t==0){
					location="http://atta.ustc.edu.cn/AWMS2019/Payment.php"; 
				}
				document.getElementById('show').innerHTML='This page will be redirected to <a href="http://atta.ustc.edu.cn/AWMS2019/Payment.php" style="color: rgb(245, 106, 106);text-decoration: underline">Payment Page</a> in <u>'+t+'</u> seconds, if it does not work, please click the link above.'; 
				t--; 
			}
			</script>
	</body>
</html>
