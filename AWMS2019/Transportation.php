<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Transportation</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/custom.css" />	
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />	
		<script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.8&key=33dfa43ee9648e84336fa2791b7dd98d"></script>
		<script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.8&key=33dfa43ee9648e84336fa2791b7dd98d&plugin=AMap.Driving"></script><!-- 高德地图组件 -->
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no"> <!-- 移动端用 -->
		<style type="text/css">
			#container-airport, #container-nanrailway, #container-railway{
				width:100%; height: 500px; 
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
									<h1 id="Transportation">Transportation Information</h1>
								</header>
								
								<h2>
									Hefei Xinqiao International Airport &rarr; East Campus, USTC. (About 40 km)
								</h2>
								<ul>
									<li>Shuttle bus available on 03/06, 12:00 ~ 18:00.</li>
									<li>By taxi, CNY&yen;100.</li>
									<li>
									<ol>
										<li>By bus, Airport Shuttle Bus Line 1 &rarr; Shi-Li-Miao Station, CNY&yen;25,</li>
										<li>By taxi, Shi-Li-Miao Station &rarr; East Campus, USTC, CNY&yen;20.</li>
									</ol>
								</ul>
								<div class="row">
									<div class="col-2 col-12-small"></div>
									<div class="col-8 col-12-small">
										<div class="button-group" style="margin-bottom:5px">
										    <input id="en" type="button" class="button small" value="English" />
										    <input id="zh_en" type="button" class="button small" value="English & 中文" />
										    <input id="zh_cn" type="button" class="button small" value="中文" />
										</div>
										<div id="container-airport"><!-- 高德地图组件 --></div>
									</div>
									<div class="col-2 col-12-small"></div>
								</div>
								<hr class="major" />
								<h2>
									Hefeinan Railway Station &rarr; East Campus, USTC. (About 7 km)
								</h2>
								<ul>
									<li>By taxi, CNY&yen;20.</li>
									<li>By bus, Bus Line 108 &rarr; Ke-Da-Dong-Qu(科大东区) Station, CNY&yen;2</li>
<!-- 									<li>Alternatively, if there are too many people waiting for taxis, taking Subway Line 1 for 2 or 3 stations, then transfer to taxi should be quicker. </li>
 -->							</ul>
								<div class="row">
									<div class="col-2 col-12-small"></div>
									<div class="col-8 col-12-small">
										<!-- <div class="button-group" style="margin-bottom:5px">
										    <input id="en" type="button" class="button small" value="English" />
										    <input id="zh_en" type="button" class="button small" value="English & 中文" />
										    <input id="zh_cn" type="button" class="button small" value="中文" />
										</div> -->
										<div id="container-nanrailway"><!-- 高德地图组件 --></div>
									</div>
									<div class="col-2 col-12-small"></div>
								</div>
								<hr class="major" />
								<h2>Hefei Railway Station &rarr; East Campus, USTC. (About 9 km)</h2>
								<ul>
									<li>By taxi, CNY&yen;25.</li>
									<li>By bus, Bus Line 1 or 226 &rarr; Ke-Da-Dong-Qu(科大东区) Station, CNY&yen;2</li>
								</ul>
								<div class="row">
									<div class="col-2 col-12-small"></div>
									<div class="col-8 col-12-small">
										<!-- <div class="button-group" style="margin-bottom:5px">
										    <input id="en" type="button" class="button small" value="English" />
										    <input id="zh_en" type="button" class="button small" value="English & 中文" />
										    <input id="zh_cn" type="button" class="button small" value="中文" />
										</div> -->
										<div id="container-railway"><!-- 高德地图组件 --></div>
									</div>
									<div class="col-2 col-12-small"></div>
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
			
			<script type="text/javascript">
			    var mapAP = new AMap.Map('container-airport', {
			        resizeEnable: true,
			        zoom:11,
			        center: [117.128334,31.885029],
			        lang:"en"
			    });
			    // ['en', 'zh_en', 'zh_cn'].forEach(function(btn) {
			    //   var button = document.getElementById(btn);
			    //   AMap.event.addDomListener(button,'click',clickListener)
			    // });

			    // function clickListener() {
			    //     mapAP.setLang(this.id);
			    // }
			     
		      	var drivingAP = new AMap.Driving({
			        map: mapAP,
			        policy: AMap.DrivingPolicy.LEAST_DISTANCE
			    })
				// 根据起终点经纬度规划驾车导航路线
    			drivingAP.search(new AMap.LngLat(116.977944,31.985066), new AMap.LngLat(117.269587,31.836842));
   				
   				var mapNRW = new AMap.Map('container-nanrailway', {
			        resizeEnable: true,
			        zoom:12,
			        center: [117.281613,31.81939],
			        lang:"en"
			    });
				var drivingNRW = new AMap.Driving({
			        map: mapNRW,
			        policy: AMap.DrivingPolicy.LEAST_DISTANCE
			    })
				// 根据起终点经纬度规划驾车导航路线
    			drivingNRW.search(new AMap.LngLat(117.290313,31.798975), new AMap.LngLat(117.269587,31.836842));
			    // ['en', 'zh_en', 'zh_cn'].forEach(function(btn) {
			    //   var button = document.getElementById(btn);
			    //   AMap.event.addDomListener(button,'click',clickListener)
			    // });

			    // function clickListener() {
			    //     mapNRW.setLang(this.id);
			    // }

			    var mapRW = new AMap.Map('container-railway', {
			        resizeEnable: true,
			        zoom:12,
			        center: [117.291142,31.858896],
			        lang:"en"
			    });
				
			    var drivingRW = new AMap.Driving({
			        map: mapRW,
			        policy: AMap.DrivingPolicy.LEAST_DISTANCE
			    })
				// 根据起终点经纬度规划驾车导航路线
    			drivingRW.search(new AMap.LngLat(117.316933,31.88513), new AMap.LngLat(117.269587,31.836842));

			    ['en', 'zh_en', 'zh_cn'].forEach(function(btn) {
			      var button = document.getElementById(btn);
			      AMap.event.addDomListener(button,'click',clickListener)
			    });

			    function clickListener() {
			        mapAP.setLang(this.id);
			        mapNRW.setLang(this.id);
			        mapRW.setLang(this.id);
			    }

			    //添加控件及比例尺
			    AMap.plugin(['AMap.ToolBar','AMap.Scale','AMap.OverView'],function(){
		            	mapAP.addControl(new AMap.ToolBar());
			            mapAP.addControl(new AMap.Scale());
			            mapNRW.addControl(new AMap.ToolBar());
			            mapNRW.addControl(new AMap.Scale());
			            mapRW.addControl(new AMap.ToolBar());
			            mapRW.addControl(new AMap.Scale());
			   	})
			</script>
	</body>
</html>


