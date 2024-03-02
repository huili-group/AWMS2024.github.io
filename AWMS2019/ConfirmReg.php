<?php session_start(); 
$_SESSION['name1'] = $_POST['name1'];
$_SESSION['name2'] = $_POST['name2'];
$_SESSION['gender'] = $_POST['gender'];
$_SESSION['institute'] = $_POST['institute'];
$_SESSION['title'] = $_POST['title'];
$_SESSION['visahelp'] = $_POST['visahelp'];
$_SESSION['presentation'] = $_POST['presentation'];
$_SESSION['prestitle'] = $_POST['prestitle'];
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['address']= str_replace("\n","\n\t",$_POST['address']);
$_SESSION['addressShow'] = str_replace("\n","<br />",$_POST['address']);
$_SESSION['arridate'] = $_POST['arridate'];
$_SESSION['depadate'] = $_POST['depadate'];
$_SESSION['hotel'] = $_POST['hotel'];
$_SESSION['shroom'] = $_POST['shroom'];
$_SESSION['roomate'] = $_POST['roomate'];

$id = session_id();

$name = $_POST['name1']." ".$_POST['name2'];
$gender = $_POST['gender'];
$institute = $_POST['institute'];
$title = $_POST['title'];
$visahelp = $_POST['visahelp'];
$presentation = $_POST['presentation'];
$prestitle = $_POST['prestitle'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address=str_replace("\n","\t",$_POST['address']);
$addressShow = str_replace("\n","<br />",$_POST['address']);
$arridate = $_POST['arridate'];
$depadate = $_POST['depadate'];
$hotel = $_POST['hotel'];
$shroom = $_POST['shroom'];
$roomate = $_POST['roomate'];

$nameErr = $genderErr = $instituteErr = $titleErr = $phoneErr = $emailErr = $addressErr = $arridateErr = $depadateErr = $hotelErr = $roomateErr = $TableErr = null;
if (empty($_POST['name1'])&&empty($_POST['name2'])) {
	$nameErr = "Name is required!";
}
if (empty($gender)) {
	$genderErr = "Gender is required!";
}
if (empty($institute)) {
	$instituteErr = "Institute is required!";
}
if (empty($title)) {
	$titleErr = "Title is required!";
}
if ($presentation=="Poster"||$presentation=="Oral") {
	if (empty($prestitle)) {
		$prestitle = "Will be sent in the future.";
	}
} elseif ($presentation=="No") {
	$prestitle = "No Presentation.";
}

if (empty($phone)) {
	$phoneErr = "Phone number is required!";
}
if (empty($email)) {
	$emailErr = "E-mail address is required!";
}
if (empty($address)) {
	$addressErr = "Mailing address is required!";
}
if (empty($arridate)) {
	$arridateErr = "Arrival date is required!";
}
if (empty($depadate)) {
	$depadateErr = "Departure date is required!";
}
if (empty($hotel)) {
	$hotelErr = "You need to choose a hotel.";
}
if ($shroom=="Yes") {
	if (empty($roomate)) {
		$roomateErr = "You are willing to share your room, please write your roomate's name down.";
	}
}elseif ($shroom=="No"){
	$roomate = "No Roomate.";
}
if (!empty($nameErr)||!empty($genderErr)||!empty($instituteErr)||!empty($titleErr)||!empty($phoneErr)||!empty($emailErr)||!empty($addressErr)||!empty($arridateErr)||!empty($depadateErr)||!empty($hotelErr)||!empty($roomateErr)) {
	$TableErr = "Some Information Are Still Required, Please Go Back And Complete Them!";
}
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
			span.Error{
				color: red;
			}
			p.alert{
				margin: 0 0 0 0;
			}
			p.alert>sup{
				color: red;
			}
			table th, td{
				border: 1px solid;
				border-collapse: collapse;
				vertical-align: middle;
			}
			tbody>tr>th{
				width: 20%;
			}
			tbody>tr>td{
				width: 30%;
			}
			input#back{
				border-color: rgba(64, 147, 147, 1);
				color: rgba(64, 147, 147, 1) !important;
				box-shadow:inset 0 0 0 2px rgba(64, 147, 147, 1); 
			}
			input[type="button"]:hover{
				background-color: rgba(64, 147, 147, 0.15);
			}
			input[type="button"]:active{
				background-color: rgba(64, 147, 147, 0.15);
			}
		</style>
		<script type="text/javascript">
			function goBack(){
				window.history.go(-1)
			}
		</script>
		
			
	</head>
	<?php 
	/*
		$name = $_POST['name1']." ".$_POST['name2'];
		$gender = $_POST['gender'];
		$institute = $_POST['institute'];
		$title = $_POST['title'];
		$visahelp = $_POST['visahelp'];
		$presentation = $_POST['presentation'];
		$prestitle = $_POST['prestitle'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$address=str_replace("\n","\t",$_POST['address']);
		$addressShow = str_replace("\n","<br />",$_POST['address']);
		$arridate = $_POST['arridate'];
		$depadate = $_POST['depadate'];
		$hotel = $_POST['hotel'];
		$shroom = $_POST['shroom'];
		$roomate = $_POST['roomate'];
	
		$tablelist=	"Name"."\t".$name."\r\n".
								"Gender"."\t".$gender."\r\n".
								"Title"."\t".$title."\r\n".
								"Institute"."\t".$institute."\r\n".
								"VisaHelp"."\t".$visahelp."\r\n".
								"Presentation"."\t".$presentation."\r\n".
								"TitleofPresentation"."\t".$prestitle."\r\n".
								"Email"."\t".$email."\r\n".
								"Phone"."\t".$phone."\r\n".
								"Address"."\t".$address."\r\n".
								"ArriDate"."\t".$arridate."\r\n".
								"DeparDate"."\t".$depadate."\r\n".
								"Hotel"."\t".$hotel."\r\n".
								"ShareRoom"."\t".$shroom."\r\n".
								"Roomate"."\t".$roomate."\r\n"
								;
	*/
	?>
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
									<h1 id="Regist">Registration</h1>
									<?php 
									echo '<h3><span class="Error">'.$TableErr.'</span></h3>';
									 ?>
								</header>
								 	<?php 
								 		$pathname=$_SERVER['PHP_SELF'];	//保存当前页面名称 
								 		if ($_SERVER['REQUEST_METHOD']=='POST'){
								 			$ref=$_SERVER['HTTP_REFERER'];//获取表单提交前的URL
								 			$refhost=parse_url ($ref,PHP_URL_HOST);
								 			$url="http://{$_SERVER['SERVER_NAME']}$pathname";//获取当前的URL 
								 			if (strcmp($_SERVER['SERVER_NAME'], $refhost)==0){
								 				$table=<<<EOT
								<table>
								<tbody>
									<tr>
										<th>Name</th>
										<td>$name<span class="Error">$nameErr</span></td>
										<th>Gender</th>
										<td>$gender<span class="Error">$genderErr</span></td>
									</tr>
									<tr>
										<th>Title</th>
										<td>$title<span class="Error">$titleErr</span></td>
										<th>Institute</th>
										<td>$institute<span class="Error">$instituteErr</span></td>
									</tr>
									<tr>
										<th>Need help for visa?<a href="#alert1"><sup>*</sup></a></th>
										<td>$visahelp</td>
										<th>Presentation</th>
										<td>$presentation</td>
									</tr>
									<tr>
										<th>Title of Presentation<a href="#alert2"><sup>**</sup></a></th>
										<td colspan="3">$prestitle</td>
									</tr>
									<tr>
										<th rowspan="3">Contact</th>
										<th>E-mail</th>
										<td colspan="2">$email<span class="Error">$emailErr</span></td>
									</tr>
									<tr>
										<th>Phone Number</th>
										<td colspan="2">$phone<span class="Error">$phoneErr</span></td>
									</tr>

									<tr>
										<th>Mailing Address</th>
										<td colspan="2">$addressShow<span class="Error">$addressErr</span></td>
									</tr>
									<tr>
										<th>Date of Arrival</th>
										<td>$arridate<span class="Error">$arridateErr</span></td>
										<th>Date of Departure</th>
										<td>$depadate<span class="Error">$depadateErr</span></td>
									</tr>
									<tr>
										<th>Preferred Hotel<a href="#alert3"><sup>***</sup></a></th>
										<td colspan="3">$hotel<span class="Error">$hotelErr</span></td>
									</tr>
									<tr>
										<th>Share room with a colleague？</th>
										<td>$shroom</td>
										<th>Preferred Roomate</th>
										<td>$roomate<span class="Error">$roomateErr</span></td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="4">
											<p class="alert" id="alert1"><sup>*&nbsp;&nbsp;</sup>:If you need help for visa, please send us(<a href="mailto:AWMS2019@ustc.edu.cn">AWMS2019@ustc.edu.cn</a>) a copy of your passport.</p>
											<p class="alert" id="alert2"><sup>**</sup>:You can also send the topic of your presentation to us(<a href="mailto:AWMS2019@ustc.edu.cn">AWMS2019@ustc.edu.cn</a>) later.</p>
											<p class="alert" id="alert3"><sup>***</sup>:We will order these hotels for you in advance, if there are any changes, please e-mail to us <span>before 02/20/2019</span>.</p>
										</td>
									</tr>
								</tfoot>
								</table>
								<input type="button" value="Go Back and Change" onclick="goBack()" id="back" />
								
EOT;
												echo $table;
												$button= '<input type="button" value="Confirmed, Submit Now" id="crop" onclick="location.href=\'alert.php?id='.$id.'\'"/>';
												echo $button;
								 			}
								 			else{ 
        										echo " <br />We Don't Allowed Data From Other Website"; 
    										} 
								 		}
								 		else{ 
        									echo " <br />Please Submit Your Form First."; 
    									} 
								   	?>
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
			var TableErr = "<?php echo $TableErr; ?>";
			if (TableErr!="") {
				document.getElementById("crop").setAttribute("disabled", true);
			}else{
				document.getElementById("crop").removeAttribute("disabled");
			}
		</script>
	</body>
</html>