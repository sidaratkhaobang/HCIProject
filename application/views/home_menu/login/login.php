<!--Coded with love by Mutiullah Samim-->
<body>

	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="http://localhost/HCIProject/public/img/login/logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" id="username" name="username" class="form-control input_user" value="" placeholder="ชื่อผู้ใช้">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" id="password" name="password" class="form-control input_pass" value="" placeholder="รหัสผ่าน">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
					</form>
				</div>
				<div class="d-flex justify-content-center mt-3 login_container">
					<button  onclick="checklogin()" class="btn back_btn">ล็อกอิน</button>
				</div>
				<div class="d-flex justify-content-center mt-2 back_container">
					<button onclick="window.location.href = 'http://localhost/HCIProject/home';" type="button" class="btn login_btn">กลับหน้าหลัก</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script>
function checklogin() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if(username == "group3" && password == "1234"){
		alert("ล็อกอินสำเร็จ  "+username)
        window.location.href = 'http://localhost/HCIProject/homenotlogin';

    }
    else{
        alert("ล็อกอินไม่สำเร็จ")
    }
 
}
</script>