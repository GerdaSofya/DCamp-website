
<!doctype html>
<html lang="en-US">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

	<title>Login</title>
	
	<link rel="stylesheet" href="login.css">
	
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>
	
	<div class="header">
		<div class="header-logo">DCamp</div>
		<div class="header-list">
		  <ul>
			
			<li><a href="">Dataset</a> </li>
			<li><a href="">Pengguna</a> </li>
			<li><a href="">Beranda</a> </li>
		  </ul>
		</div>
	  </div>
	<div id="login">

		<h2><span class="fontawesome-lock"></span>Login</h2>

		<form action="cek_login.php" method="POST">

			<fieldset>

				<p><label for="username">Username</label></p>
				<p><input type="username" id="username" name="username" value="username" onBlur="if(this.value=='')this.value='username'" onFocus="if(this.value=='username')this.value=''"></p> 

				<p><label for="password">Password</label></p>
				<p><input type="password" id="password" name="password" value="password" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''"></p>

				<p><input type="submit" value="Login"></p>
				<p>Belum punya akun? <a href="#" class="daftar">Daftar Sekarang!</a></p>
			</fieldset>

		</form>
		<br>
		<br>
		<br>
		
		<br>
	</div> <!-- end login -->
	<div class="footer">
		<div class="footer-place">
		   Universitas Lambung Mangkurat <br>
		   Jl. Brigjen H. Hasan Basri Kota Banjarmasin 70123 <br>
		   Telp. 0511-3306671
		</div>
		<div class="footer-list">
		  Copyright &copy; DCamp 2021
		</div>
	  </div>
</body>	
</html>

