<?php
  include 'koneksi.php'; 

    if (isset($_POST['signup'])){

      $getMaxId = mysqli_query($connect, "SELECT MAX(RIGHT(id_user, 5)) AS id FROM register");
      $d = mysqli_fetch_object($getMaxId);
      $generateId = 'P'.date('Y').sprintf("%05s", $d->id + 1);
      
      //proses insert
		  $insert = mysqli_query($connect, "INSERT INTO register VALUES (
              '".$generateId."',
              '".date('Y-m-d')."',
              '".$_POST['name']."',
              '".$_POST['email']."',
              '".$_POST['pass']."'
              )");
        
              if($insert){
                echo "<script>
                      alert('Register Berhasil !');
                      document.location.href = 'Register.php';
                      </script>";
              }else{
                echo  'Register Gagal !'
                      .mysqli_error($connect);
              }
    }
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" href="Register.css">
  <link rel="stylesheet" href="../css/header-footer-fixed.css">
</head>

<body>
  <div class="header">
    <div class="header-logo">DCamp</div>
    <div class="header-list">
      <ul>
        <li><a href="">Logout</a> </li>
        <li><a href="">Dataset</a> </li>
        <li><a href="">Pengguna</a> </li>
        <li><a href="">Beranda</a> </li>
      </ul>
    </div>
  </div>

  <!-- Sign up form -->
  <form action="" method="post">
  <section class="signup">
    <div class="container">
      <div class="signup-content">
        <div class="signup-form">
          <h2 class="form-title">Sign up</h2>
          <form method="POST" class="register-form" id="register-form">
            <div class="form-group">
              <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
              <input type="text" name="name" id="name" placeholder="Your Name" />
            </div>
            <div class="form-group">
              <label for="email"><i class="zmdi zmdi-email"></i></label>
              <input type="email" name="email" id="email" placeholder="Your Email" />
            </div>
            <div class="form-group">
              <label for="pass"><i class="zmdi zmdi-lock"></i></label>
              <input type="password" name="pass" id="pass" placeholder="Password" />
            </div>
            <div class="form-group form-button">
              <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
            </div>
          </form>
        </div>
        <div class="signup-image">
          <figure><img src="images/signup-image.jpg" alt="sign up image"></figure>
          <a href="#" class="signup-image-link">I am already member</a>
        </div>
      </div>
    </div>
  </section>
</form>

  <!--Footer-->

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
