
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
	<?php 
	require 'koneksi.php';
	if(isset($_POST['submitButtonRegis'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = "INSERT INTO user VALUES('','$username','$password')";
		mysqli_query($koneksi, $query);
	}
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo '<script>alert("Username atau Password salah!")</script>';
		}else if($_GET['pesan'] == "logout"){
			echo '<script>alert("Berhasil Logout!")</script>';
		}else if($_GET['pesan'] == "belum_login"){
			echo '<script>alert("Login untuk meng akses halaman Admin!")</script>';
		}
	}
	?>
	<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>
			<form id="login" class="input-group" method="post" action="cek_login.php">
				<input type="text" class="input-field" name="username" placeholder="Username" required>
				<input type="password" id="input-password" class="input-field" name="password" placeholder="Enter Password" required>
				<input type="checkbox" class="chec-box"><span>Show Password</span>
				<button type="submit" class="submit-btn">Log In</button>
				<script type="text/javascript">
        $(document).ready(function(){
            $('.chec-box').click(function(){
                if($(this).is(':checked')){
                    $('#input-password').attr('type','text');
                } else {
                    $('#input-password').attr('type','password');
                }
                
            });
        });

        </script>
			</form>
		</div>
	</div>
	<script>
		


	</script>

</body>
</html> 