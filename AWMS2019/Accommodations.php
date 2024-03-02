<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Accommodations</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/custom.css" />	
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />	
		<script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.8&key=33dfa43ee9648e84336fa2791b7dd98d"></script><!-- 高德地图组件 -->
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no"> <!-- 移动端用 -->
		<style type="text/css">
			#container {width:100%; height: 500px;  } 
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
									<h1 id="Accommodations">Accommodations</h1>
								</header>
								<p>We recommend several  hotels around the East Campus of USTC, which are mostly in walking distance to the conference lecture hall. Some of them would give special discounts for our attendees.</p>
								
								<hr class="major" />
								<dl>
									<dt>USTC Reception Center Experts Building</dt>
									<dd>
										<div class="row gtr-50 gtr-uniform">
											<div class="col-6 col-12-small">
												<p>
													Experts Building is located inside the East Campus, USTC. About 10 minutes' walk to the conference lecture hall.
												</p>
												<p>
													Location: East Campus of USTC.<br>
													Phone Number: +86-551-63602881
												</p>
												<p style="color: rgb(245, 106, 106)">Single rooms are fully booked, only double rooms available now.</p>
												<p>
													Tips: 
													Rooms are limited, please register earlier. 
												</p>
											</div>
											<div class="col-6 col-12-small">
												<span class="image fit"><img src="images/expert building.jpg" alt="" /></span>
											</div>
										</div>
									
									</dd>
									
									<hr class="major" />
									<dt>Gaosu New Century International Hotel Anhui</dt>
									<dd>
										<div class="row gtr-50 gtr-uniform">
											<div class="col-6 col-12-small">
												<p>
													The Gaosu New Century International Hotel is a 5-star hotel located in downtown Hefei, about 10-minutes' drive to our university. 
													<br>
													Luxuriously decorated, the contemporary and elegant rooms have luxury bedding, 37-inch flat-screen TVs and aromatherapy toiletries. A cozy seating area and iron facilities are provided as well.
													<br>
													Guests can enjoy a game of billiards or table tennis. Staff at 24-front desk can assist with ticketing arrangement and luggage storage services. Facilities at the business center are welcome to use.
													<br>
													There will be a shuttle busline to the conference venue every morning and night.

												</p>
												<p>
													Location: 88 South Hezuohua Road (Hezuohua Nan Lu), Shushan District Shushan District Hefei <br>
												</p>
												
												
												Double bed room: about &#36;70-80/day.<br>
												
											</div>
											<div class="col-6 col-12-small">
												<span class="image fit"><img src="images/gaosu.jpg" alt="" /></span>
											</div>
										</div>
									</dd>
									<hr class="major" />
									<dt>Easy Living International Hotel</dt>
									<dd>
										<div class="row gtr-50 gtr-uniform">
											<div class="col-6 col-12-small">
												<p>
												This hotel is a 3~4-star hotel located 500 m south to the Gaosu New Century International Hotel, about 15-minutes' drive to our university.
												<br>
												There will be a shuttle busline to the conference venue every morning and night.							 
												</p>
												<p>
													Location: No.19 Hezuohua South Road, Shushan District.<br>
												</p>
												
												
												We can offer a special discount for about &#36;40/day.<br>

												
											</div>
											<div class="col-6 col-12-small">
												<span class="image fit"><img src="images/Easy Living .jpg" alt="" /></span>
											</div>
										</div>
									</dd>
								
								
									<hr class="major" />
									<dt>Jinjiang Inn (Hefei Jinzhai Road)</dt>
									<dd>
										<div class="row gtr-50 gtr-uniform">
											<div class="col-6 col-12-small">
												<p>
													This hotel is a chain economic hotel, situated opposite to the Main Gate of East Campus, USTC with proximity to many recreation places and dining outlets. About 15 minutes' walk to the conference lecture hall.
												</p>
												<p>
													Location: 133 Jinzhai Road (Jinzhai Lu) Shushan District Hefei.<br>
												</p>
												
												
												Double bed room: about &#36;25/day.<br>
												<br>
												<a href="https://www.trip.com/hotels/hefei-hotel-detail-474635/jinjiang-inn-hefei-jinzhai-road/?checkin=2019-03-06&checkout=2019-03-10&hotelname=&display=Jinjiang%20Inn&adult=1&children=0&ages=&city=278&label=wUYkMOJgREuDfdj2-JHl4w&salestype=0&page=1&position=8&minprice=17&mproom=145645918&mincurr=USD&HighPrice=-1&LowPrice=-1&pnotax=6_658200000;111_3043478&from_page=list&module=list&pctoken=a2398274081840e0a312257680bb2895&link=title#ctm_ref=lst_n_1_8" class="button primary" target="_blank">Press to Book</a>
											</div>
											<div class="col-6 col-12-small">
												<span class="image fit"><img src="images/jinjiang inn.jpg" alt="" /></span>
											</div>
										</div>
									</dd>
								</dl>	
								<hr class="major" />
								<div class="button-group" style="margin-bottom:5px">
								    <input id="en" type="button" class="button small" value="English" />
								    <input id="zh_en" type="button" class="button small" value="English & 中文" />
								    <input id="zh_cn" type="button" class="button small" value="中文" />
								</div>
								<div id="container"><!-- 高德地图组件 --></div>
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
	var map = new AMap.Map('container', {
	    resizeEnable: true,
	    zoom:14,
	    center: [117.265236,31.835487],
	    lang:"en"
	});

	var mLihua = new AMap.Marker({
    position: new AMap.LngLat(117.270657,31.836441), 
    title: 'Venue: Activity Center'
	});

	mLihua.setLabel({//label默认蓝框白底左上角显示，样式className为：amap-marker-label
        offset: new AMap.Pixel(20, 30),//修改label相对于maker的位置
        content: "Venue: Activity Center"
    });

	var mJNC = new AMap.Marker({
    position: new AMap.LngLat(117.251123,31.823519), 
    title: 'Easy Living International Hotel'
	});

	mJNC.setLabel({//label默认蓝框白底左上角显示，样式className为：amap-marker-label
        offset: new AMap.Pixel(20, 0),//修改label相对于maker的位置
        content: "Easy Living International Hotel"
    });

	var mJJI = new AMap.Marker({
    position: new AMap.LngLat(117.267313,31.839964), 
    title: 'Jinjiang Inn (Hefei Jinzhai Road)'
	});

	mJJI.setLabel({//label默认蓝框白底左上角显示，样式className为：amap-marker-label
        offset: new AMap.Pixel(-180, 30),//修改label相对于maker的位置
        content: "Jinjiang Inn (Hefei Jinzhai Road)"
    });

	var mZJL = new AMap.Marker({
    position: new AMap.LngLat(117.269517,31.840524), 
    title: 'USTC Reception Center Experts Building'
	});

	mZJL.setLabel({//label默认蓝框白底左上角显示，样式className为：amap-marker-label
        offset: new AMap.Pixel(20, 30),//修改label相对于maker的位置
        content: "USTC Reception Center Experts Building"
    });

	var mGSKY = new AMap.Marker({
    position: new AMap.LngLat(117.253091,31.829537), 
    title: 'Gaosu New Century International Hotel Anhui'
	});

	mGSKY.setLabel({//label默认蓝框白底左上角显示，样式className为：amap-marker-label
        offset: new AMap.Pixel(20, 30),//修改label相对于maker的位置
        content: "Gaosu New Century International Hotel Anhui"
    });

	var markerList = [mJNC, mJJI, mZJL, mGSKY, mLihua];

	map.add(markerList);
// 将创建的点标记添加到已有的地图实例：

	['en', 'zh_en', 'zh_cn'].forEach(function(btn) {
      var button = document.getElementById(btn);
      AMap.event.addDomListener(button,'click',clickListener)
    });

    function clickListener() {
        map.setLang(this.id);
    }
    //添加控件及比例尺
    AMap.plugin(['AMap.ToolBar','AMap.Scale','AMap.OverView'],function(){
            map.addControl(new AMap.ToolBar());
            map.addControl(new AMap.Scale());
  	})
			</script>
	</body>
</html>