<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<title>Fak Pay</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Bluesky template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="http://localhost/HCIProject/public/styles/home/bootstrap4/bootstrap.min.css">
<link href="http://localhost/HCIProject/public/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="http://localhost/HCIProject/public/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="http://localhost/HCIProject/public/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="http://localhost/HCIProject/public/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="http://localhost/HCIProject/public/styles/home/main_styles.css">
<link rel="stylesheet" type="text/css" href="http://localhost/HCIProject/public/styles/home/responsive.css">
</head>
<body>

<div class="super_container">

	<!-- header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo">
							<a href="#"><img src="http://localhost/HCIProject/public/images/logo.png" alt=""></a>
						</div>
							<div class="col-11">
								<nav class="main_nav">
									<ul>
										<li class="active"><a href="http://localhost/HCIProject/Home">หน้าแรก</a></li>
										<li><a href="about.html">บริการ</a></li>
										<li><a href="properties.html">โปรโมชั่น</a></li>
										<li><a href="news.html">ข่าวสาร</a></li>
										<li><a href="contact.html">เกี่ยวกับเรา</a></li>
										<button class="btn btn-default"><a href="http://localhost/HCIProject/register">ลงทะเบียน</button>
										<button class="btn btn-default"><a href="http://localhost/HCIProject/login">ล็อกอิน</button>
									</ul>	
								</nav>
    						</div>
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo">
				<a href="#">
					<div class="logo_container d-flex flex-row align-items-start justify-content-start">
						<div class="logo_image"><div><img src="http://localhost/HCIProject/public/images/logo.png" alt=""></div></div>
					</div>
				</a>
			</div>
			<ul>
				<!-- <li class="menu_item"><a href="index.html">โปร์ไฟล์</a></li> -->
				<li class="menu_item"><a href="about.html">บริการ</a></li>
				<li class="menu_item"><a href="properties.html">โปรโมชั่น</a></li>
				<li class="menu_item"><a href="news.html">ข่าวสาร</a></li>
				<li class="menu_item"><a href="contact.html">เกี่ยวกับเรา</a></li>
			
			</ul>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(http://localhost/HCIProject/public/images/logohead1.png)"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="slide_content">
										<div class="home_subtitle">สะดวก</div>
										<div class="home_title">Fak Pay</div>
										<!-- <div class="home_details">
											<ul class="home_details_list d-flex flex-row align-items-center justify-content-start">
												<li>
													<span> 650 Ftsq</span>
												</li>
												<li>
													<span> 3 Bedrooms</span>
												</li>
												<li>
													<div class="home_details_image"><img src="http://localhost/HCIProject/public/img/city_1.jpg" alt=""></div>
													<span> 2 Bathrooms</span>
												</li>
											</ul>
										</div> -->
										<div class="home_price">ง่ายๆ</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Home Search
	<div class="home_search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_search_container">
						<div class="home_search_content">
							<form action="#" class="search_form d-flex flex-row align-items-start justfy-content-start">
								<div class="search_form_content d-flex flex-row align-items-start justfy-content-start flex-wrap">
									<div>
										<select class="search_form_select">
											<option disabled selected>For rent</option>
											<option>Yes</option>
											<option>No</option>
										</select>
									</div>
									<div>
										<select class="search_form_select">
											<option disabled selected>All types</option>
											<option>Type 1</option>
											<option>Type 2</option>
											<option>Type 3</option>
											<option>Type 4</option>
										</select>
									</div>
									<div>
										<select class="search_form_select">
											<option disabled selected>City</option>
											<option>New York</option>
											<option>Paris</option>
											<option>Amsterdam</option>
											<option>Rome</option>
										</select>
									</div>
									<div>
										<select class="search_form_select">
											<option disabled selected>Bedrooms</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
									</div>
									<div>
										<select class="search_form_select">
											<option disabled selected>Bathrooms</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
									</div>
								</div>
								<button class="search_form_button ml-auto">search</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 -->


	<!-- Cities -->

	<div class="cities" align="center">
		<div class="container" >
			<div class="row">
				<div class="col">
					<div class="section_title">ช่องทางการใช้เงินของคุณ</div>
					<div class="section_subtitle">ไลฟ์สไตล์ของคุณเลือกเองได้</div>
				</div>
			</div>
		</div>
		
		<div class="cities_container d-flex flex-row flex-wrap align-items-start justify-content-between">

			<!-- City -->
			<div class="city">
				<img src="http://localhost/HCIProject/public/img/home/mobile.png"  >
				<div class="city_overlay">
					<a href="http://localhost/HCIProject//Mobilemoney" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">เติมเงินมือถือ</div>
						<div class="city_subtitle">เติมได้ทุกเครือข่ายไม่จำกัด</div>
					</a>	
				</div>
			</div>

			<!-- City -->
			<div class="city">
				<img src="http://localhost/HCIProject/public/img/home/game.png" >
				<div class="city_overlay">
					<a href="http://localhost/HCIProject/Fillthegame" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">เติมเกม</div>
						<div class="city_subtitle">ไม่จำกัดชีวิตตามไลฟ์สไตล์</div>
					</a>	
				</div>
			</div>

			<!-- City -->
			<div class="city">
				<img src="http://localhost/HCIProject/public/img/home/ticket.png" >
				<div class="city_overlay">
					<a href="http://localhost/HCIProject/Movieticket" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">ตั๋วภาพยนตร์</div>
						<div class="city_subtitle">พบกับความบรรเทิงที่รออยู่</div>
					</a>	
				</div>
			</div>

			<!-- City -->
			<div class="city">
				<img src="http://localhost/HCIProject/public/img/home/kfc.png" >
				<div class="city_overlay">
					<a href="http://localhost/HCIProject/Kfc" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">K F C</div>
						<div class="city_subtitle">หิวก็สั่งเลย สะดวกทุกที่</div>
					</a>	
				</div>
			</div>

			<!-- City -->
			<div class="city">
				<img src="http://localhost/HCIProject/public/img/home/card.png" >
				<div class="city_overlay">
					<a href="http://localhost/HCIProject/Cashcard" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">บัตรเงินสด</div>
						<div class="city_subtitle">นึกถึงวันว่าน</div>
					</a>	
				</div>
			</div>

			<!-- City -->
			<div class="city">
				<img src="http://localhost/HCIProject/public/img/home/barcode.png" >
				<div class="city_overlay">
					<a href="http://localhost/HCIProject/Barcode" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">คิวอาร์โค้ด</div>
						<div class="city_subtitle">สะดวกจ่ายพร้อมเปย์ให้เลย</div>
					</a>	
				</div>
			</div>

			<!-- City -->
			<div class="city">
				<img src="http://localhost/HCIProject/public/img/home/shop.png" >
				<div class="city_overlay">
					<a href="http://localhost/HCIProject/Onlineshopping" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">ช้อปออนไลน์</div>
						<div class="city_subtitle">ช้อปง่ายๆตามไลฟ์สไตล์</div>
					</a>	
				</div>
			</div>

			<!-- City -->
			<div class="city">
				<img src="http://localhost/HCIProject/public/img/home/man.png" >
				<div class="city_overlay">
					<a href="http://localhost/HCIProject/Profile" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">โปร์ไฟล์</div>
						<div class="city_subtitle">ตั้งค่าโปรไฟล์</div>
					</a>	
				</div>
			</div>
		</div>
	</div>

	<!-- Testimonials -->

	
	<!-- Newsletter -->


	<!-- Footer -->

        <footer class="footer">
            <div class="footer_main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="footer_logo"><a href="#"><img src="images/logo_large.png" alt=""></a></div>
                        </div>
                        <div class="col-lg-9 d-flex flex-column align-items-start justify-content-end">
                            <div class="footer_title">มาสนุกกับพวกเรา FakPay</div>
                        </div>
                    </div>
                   
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="http://localhost/HCIProject/public/js/home/jquery-3.2.1.min.js"></script>
<script src="http://localhost/HCIProject/public/styles/home/bootstrap4/popper.js"></script>
<script src="http://localhost/HCIProject/public/styles/home/bootstrap4/bootstrap.min.js"></script>
<script src="http://localhost/HCIProject/public/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="http://localhost/HCIProject/public/plugins/easing/easing.js"></script>
<script src="http://localhost/HCIProject/public/plugins/parallax-js-master/parallax.min.js"></script>
<script src="http://localhost/HCIProject/public/js/home/custom.js"></script>
</body>
</html>