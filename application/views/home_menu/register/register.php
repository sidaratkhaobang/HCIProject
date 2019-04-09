<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="http://localhost/HCIProject/public/css/register/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/HCIProject/public/css/register/register.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>


    <title>ชำระเงิน</title>
</head>
<body class= "bg">
<section class="ftco-section contact-section ftco-no-pb" >
		<div class="container">
        	<!-- header -->
			<div class="mig">
				<img src="http://localhost/HCIProject/public/images/logore.png" >
			</div>
				<div class="card" >
					<div class="card-body">
						<h1>ลงทะเบียน</h1>
						<form id="insert">
							<div class="form-group">
								<label >ชื่อผู้ใช้</label> <i class="fas fa-envelope"></i>
								<input  type="text" class="form-control"   placeholder="ชื่อผู้ใช้" id="name" name="name">
							</div>
							<div class="form-group">
								<label>อีเมล</label> <i class="fas fa-envelope"></i>
								<input  type="email" class="form-control"   placeholder="อีเมล" id="email" name="email">
							</div>
							<div class="form-group">
								<label>รหัสผ่าน</label> <i class="fas fa-lock"></i>
								<input type="password" class="form-control"  placeholder="รหัสผ่าน" id="password" name="password">
							</div>
							<div class="form-group">
								<label>ยืนยันรหัสผ่าน</label> <i class="fas fa-lock"></i>
								<input type="password" class="form-control"  placeholder="ยืนยันรหัสผ่าน" id="repassword" name="repassword">
							</div>
							<div class="form-group">
								<label>เบอร์โทรศัพท์</label> <i class="fas fa-phone-square"></i>
								<input type="text" class="form-control"  placeholder="เบอร์โทรศัพท์" id="Telephone" name="Telephone">
							</div>
								<button type="insert"  class="btn btn-primary"  style="float:left">ลงทะเบียน</button>
								<a href="http://localhost/HCIProject/home"  class="btn btn-danger" role="button" style="float:right">ยกเลิก</a>
						</form>
					</div>
				</div>
		</div>
	</section>
</body>
</html>


