<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<title>Bluesky</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Bluesky template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="http://localhost/HCIProject/public/styles/home/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="http://localhost/HCIProject/public/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="http://localhost/HCIProject/public/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="http://localhost/HCIProject/public/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="http://localhost/HCIProject/public/styles/home/main_styles.css">
<link rel="stylesheet" type="text/css" href="http://localhost/HCIProject/public/styles/home/responsive.css">
</head>
<body>

<div class="super_container">


	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo">
							<!-- <a href="#"><img src="http://localhost/HCIProject/public/images/logo.png" alt=""></a> -->
                        </div>
						<nav class="main_nav">
							<ul>
								<li class="active"><a href="http://localhost/HCIProject/index.php/home">หน้าแรก</a></li>
								<li><a href="about.html">เกี่ยวกับเรา</a></li>
								<li><a href="properties.html">Properties</a></li>
								<li><a href="news.html">News</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</nav>
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
				<li class="menu_item"><a href="index.html">sohk</a></li>
				<li class="menu_item"><a href="about.html">About us</a></li>
				<li class="menu_item"><a href="#">Speakers</a></li>
				<li class="menu_item"><a href="#">Tickets</a></li>
				<li class="menu_item"><a href="news.html">News</a></li>
				<li class="menu_item"><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		<div class="menu_phone"><span>call us: </span>652 345 3222 11</div>
	</div>
	
	<!-- Home -->

	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(http://localhost/HCIProject/public/images/home_slider_1.jpg)"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="slide_content">
										<div class="home_subtitle">ความสะดวก</div>
										<div class="home_title">FakPay</div>
										<!-- <div class="home_details">
											<ul class="home_details_list d-flex flex-row align-items-center justify-content-start">
												<li>
													<div class="home_details_image"><img src="http://localhost/HCIProject/public/images/icon_1.png" alt=""></div>
													<span> 650 Ftsq</span>
												</li>
												<li>
													<div class="home_details_image"><img src="http://localhost/HCIProject/public/images/icon_2.png" alt=""></div>
													<span> 3 Bedrooms</span>
												</li>
												<li>
													<div class="home_details_image"><img src="http://localhost/HCIProject/public/images/icon_3.png" alt=""></div>
													<span> 2 Bathrooms</span>
												</li>
											</ul>
										</div>
										<div class="home_price">$ 1. 245 999</div> -->
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

	<div class="cities">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">Find properties in these cities</div>
					<div class="section_subtitle">Search your dream home</div>
				</div>
			</div>
		</div>
		
		<div class="cities_container d-flex flex-row flex-wrap align-items-start justify-content-between">

			<!-- City -->
			<div class="city">
				<img src="http://localhost/HCIProject/public/images/city_1.jpg" alt="https://unsplash.com/@dnevozhai">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>

			<!-- City -->
			<div class="city">
				<img src="http://localhost/HCIProject/public/images/city_2.jpg" alt="https://unsplash.com/@lachlanjdempsey">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>

			<!-- City -->
			<div class="city">
				<img src="http://localhost/HCIProject/public/images/city_3.jpg" alt="https://unsplash.com/@hellolightbulb">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>

			<!-- City -->
			<div class="city">
				<img src="http://localhost/HCIProject/public/images/city_4.jpg" alt="https://unsplash.com/@justinbissonbeck">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>

			<!-- City -->
			<div class="city">
				<img src="http://localhost/HCIProject/public/images/city_5.jpg" alt="https://unsplash.com/@claudiotrigueros">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>

			<!-- City -->
			<div class="city">
				<img src="http://localhost/HCIProject/public/images/city_6.jpg" alt="https://unsplash.com/@andersjilden">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>

			<!-- City -->
			<div class="city">
				<img src="http://localhost/HCIProject/public/images/city_7.jpg" alt="https://unsplash.com/@sawyerbengtson">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>

			<!-- City -->
			<div class="city">
				<img src="http://localhost/HCIProject/public/images/city_8.jpg" alt="https://unsplash.com/@mathewwaters">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
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
                            <div class="footer_title">Latest Properties</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 footer_col">
                            <div class="footer_about">
                                <div class="footer_about_text">Donec in tempus leo. Aenean ultricies mauris sed quam lacinia lobortis. Cras ut vestibulum enim, in gravida nulla. Curab itur ornare nisl at sagittis cursus.</div>
                            </div>
                        </div>
                        <div class="col-lg-3 footer_col">
                            <div class="footer_latest d-flex flex-row align-items-start justify-content-start">
                                <div><div class="footer_latest_image"><img src="images/footer_latest_1.jpg" alt=""></div></div>
                                <div class="footer_latest_content">
                                    <div class="footer_latest_location">Miami</div>
                                    <div class="footer_latest_name"><a href="#">Sea view property</a></div>
                                    <div class="footer_latest_price">$ 1. 234 981</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 footer_col">
                            <div class="footer_latest d-flex flex-row align-items-start justify-content-start">
                                <div><div class="footer_latest_image"><img src="images/footer_latest_2.jpg" alt=""></div></div>
                                <div class="footer_latest_content">
                                    <div class="footer_latest_location">Miami</div>
                                    <div class="footer_latest_name"><a href="#">Town House</a></div>
                                    <div class="footer_latest_price">$ 1. 234 981</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 footer_col">
                            <div class="footer_latest d-flex flex-row align-items-start justify-content-start">
                                <div><div class="footer_latest_image"><img src="images/footer_latest_3.jpg" alt=""></div></div>
                                <div class="footer_latest_content">
                                    <div class="footer_latest_location">Miami</div>
                                    <div class="footer_latest_name"><a href="#">Modern House</a></div>
                                    <div class="footer_latest_price">$ 1. 234 981</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer_bar_content d-flex flex-row align-items-center justify-content-start">
                                <div class="cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </div>
                                <div class="footer_nav">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="#">About us</a></li>
									<li><a href="properties.html">Properties</a></li>
									<li><a href="news.html">News</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
							<div class="footer_phone ml-auto"><span>call us: </span>652 345 3222 11</div>
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