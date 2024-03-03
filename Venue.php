<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Venue</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/custom.css" />	
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />	
		<script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.8&key=33dfa43ee9648e84336fa2791b7dd98d"></script><!-- 高德地图组件 -->
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no"> <!-- 移动端用 -->
	
		<style type="text/css">
			#container {width:100%; height: 500px;  }  
	        .info {
	            border: solid 1px silver;
	        }
	        div.info-top {
	            position: relative;
	            background: none repeat scroll 0 0 #F9F9F9;
	            border-bottom: 1px solid #CCC;
	            border-radius: 5px 5px 0 0;
	        }
	        div.info-top div {
	            display: inline-block;
	            color: #333333;
	            font-size: 14px;
	            font-weight: bold;
	            line-height: 31px;
	            padding: 0 10px;
	        }
	        div.info-top img {
	            position: absolute;
	            top: 10px;
	            right: 10px;
	            transition-duration: 0.25s;
	        }
	        div.info-top img:hover {
	            box-shadow: 0px 0px 5px #000;
	        }
	        div.info-middle {
	            font-size: 12px;
	            padding: 6px;
	            line-height: 20px;
	        }
	        div.info-bottom {
	            height: 0px;
	            width: 100%;
	            clear: both;
	            text-align: center;
	        }
	        div.info-bottom img {
	            position: relative;
	            z-index: 104;
	        }
	        span {
	            margin-left: 5px;
	            font-size: 11px;
	        }
	        .info-middle img {
	            float: left;
	            margin-right: 6px;
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
									<h1 id="Introduction">Venue</h1>
								</header>
								<div>
									<p>Our conference will be held in the <strong>Coference Room</strong>, 5<sup>th</sup> floor, Activity Center, East Campus of USTC.</p>
									<p>Please check the map below or <a href="https://uri.amap.com/marker?position=117.270657,31.836441&lang=en&name=Activity Center&callnative=1" target="_blank">Click Here to check online</a></p>
								</div>
								<div class="row">
									<div class="col-2 col-12-small"></div>
									<div class="col-8 col-12-small">
										<div class="button-group" style="margin-bottom:5px">
										    <input id="en" type="button" class="button small" value="English" />
										    <input id="zh_en" type="button" class="button small" value="English & 中文" />
										    <input id="zh_cn" type="button" class="button small" value="中文" />
										</div>
										<div id="container"><!-- 高德地图组件 --></div>
										
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
			
			<script>
			    var map = new AMap.Map('container', {
			        resizeEnable: true,
			        zoom:15,
			        center: [117.270657,31.836441],
			        lang:"en"
			    });
	
			    ['en', 'zh_en', 'zh_cn'].forEach(function(btn) {
			      var button = document.getElementById(btn);
			      AMap.event.addDomListener(button,'click',clickListener)
			    });

			    function clickListener() {
			        map.setLang(this.id);
			    }

    addMarker();
    //添加marker标记
    function addMarker() {
        map.clearMap();
        var marker = new AMap.Marker({
            map: map,
            position: [117.270657,31.836441]
        });
        //鼠标点击marker弹出自定义的信息窗体
        AMap.event.addListener(marker, 'click', function() {
            infoWindow.open(map, marker.getPosition());
        });
    }

    //实例化信息窗体
    var title = 'Coference Room, Activity Center',
        content = [];
    content.push("<img src='images/CA.jpg' style='width:100px; height:100px'>Activity Center located at the middle of East Campus, next to the dining room.<br>Coference Room is on the 5th floor of Activity Center. ");
    var infoWindow = new AMap.InfoWindow({
        isCustom: true,  //使用自定义窗体
        content: createInfoWindow(title, content.join("<br/>")),
        offset: new AMap.Pixel(16, -45)
    });

    //构建自定义信息窗体
    function createInfoWindow(title, content) {
        var info = document.createElement("div");
        info.className = "info";

        //可以通过下面的方式修改自定义窗体的宽高
        info.style.width = "300px";
        // 定义顶部标题
        var top = document.createElement("div");
        var titleD = document.createElement("div");
        var closeX = document.createElement("img");
        top.className = "info-top";
        titleD.innerHTML = title;
        closeX.src = "https://webapi.amap.com/images/close2.gif";
        closeX.onclick = closeInfoWindow;

        top.appendChild(titleD);
        top.appendChild(closeX);
        info.appendChild(top);

        // 定义中部内容
        var middle = document.createElement("div");
        middle.className = "info-middle";
        middle.style.backgroundColor = 'white';
        middle.innerHTML = content;
        info.appendChild(middle);

        // 定义底部内容
        var bottom = document.createElement("div");
        bottom.className = "info-bottom";
        bottom.style.position = 'relative';
        bottom.style.top = '0px';
        bottom.style.margin = '0 auto';
        var sharp = document.createElement("img");
        sharp.src = "https://webapi.amap.com/images/sharp.png";
        bottom.appendChild(sharp);
        info.appendChild(bottom);
        return info;
    }

    //关闭信息窗体
    function closeInfoWindow() {
        map.clearInfoWindow();
    }	
    //添加控件及比例尺
    AMap.plugin(['AMap.ToolBar','AMap.Scale','AMap.OverView'],function(){
            map.addControl(new AMap.ToolBar());
            map.addControl(new AMap.Scale());
   	})		    
			</script>
	</body>
</html>