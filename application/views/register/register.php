<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="http://localhost/HCIProject/public/styles/home/bootstrap4/bootstrap.min.css">
	<link href="http://localhost/HCIProject/public/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="http://localhost/HCIProject/public/styles/home/main_styles.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/HCIProject/public/styles/home/responsive.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/HCIProject/public/css/register/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/HCIProject/public/css/register/register.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


   

    <title>Register</title>
</head>
<body class="bg">
	<!-- header -->
	
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
								<li class="active"><a href="http://localhost/HCIProject/home">หน้าแรก</a></li>
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
				<!-- <li class="menu_item"><a href="index.html">โปร์ไฟล์</a></li> -->
				<li class="menu_item"><a href="about.html">เกี่ยวกับเรา</a></li>
				<li class="menu_item"><a href="properties.html">Properties</a></li>
				<li class="menu_item"><a href="news.html">News</a></li>
				<li class="menu_item"><a href="contact.html">Contact</a></li>
				<li class="menu_item"><a href="contact.html">Contact</a></li>
			</ul>
		</div>
    </div>

    <br><br><br><br><br>

<div class="card" >
		<div class="card-body">
            <h1>ลงทะเบียน</h1>
     
			<form>
				<div class="form-group">
                    <label>อีเมล</label> <i class="fas fa-envelope"></i>
                    <input  type="email" class="form-control"   placeholder="อีเมล">
				</div>
				<div class="form-group">
					<label>รหัสผ่าน</label> <i class="fas fa-lock"></i>
					<input type="password" class="form-control"  placeholder="รหัสผ่าน">
				</div>
                <div class="form-group">
					<label>ยืนยันรหัสผ่าน</label> <i class="fas fa-lock"></i>
					<input type="password" class="form-control"  placeholder="ยืนยันรหัสผ่าน">
				</div>
                <div class="form-group">
					<label>เบอร์โทรศัพท์</label> <i class="fas fa-phone-square"></i>
					<input type="text" class="form-control"  placeholder="เบอร์โทรศัพท์">
				</div>
			
				
				<button type="submit" class="btn btn-primary" style="float:left">ลงทะเบียน</button>

				<button type="submit" class="btn btn-danger" style="float:right">ยกเลิก</button>
				</a>
            </form>
        </div>
	
</div>
    
</body>
</html>