<body class= "bg">

<!-- header -->
	
<header class="header">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="header_content d-flex flex-row align-items-center justify-content-start">
					<div class="logo2">
						<a href="#"><img src="http://localhost/HCIProject/public/images/logo.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<section class="ftco-section contact-section ftco-no-pb cg">
		<div class="container">
        	<!-- header -->
				<div class="card" >
					<div class="card-body">
						<h1>ลงทะเบียน</h1>
						<form id="insert">
							<div class="form-group">
								<label >ชื่อผู้ใช้</label> <i class="fas fa-user"></i>
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


