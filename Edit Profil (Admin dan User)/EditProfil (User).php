<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Edit Profil</title>
  <link rel="stylesheet" href="EditProfil.css">
  <link rel="stylesheet" href="../css/header-footer-fixed.css">
</head>

<body>
  <div class="header">
    <div class="header-logo">DCamp</div>
    <div class="header-list">
      <ul>
        <li><a href="">Logout</a> </li>
        <li><a href="">Profil</a> </li>
        <li><a href="">Dataset</a> </li>
        <li><a href="">Beranda</a> </li>
      </ul>
    </div>
  </div>

  <div class="container-edit-profil">

    <h1 class="text-edit-profil">Edit Profil Pengguna</h1>
    <form>
      <label for="fusername">Username</label><br>
      <input type="text" id="fusername" name="username"><br>
      <label for="fname">Nama</label><br>
      <input type="text" id="fname" name="name"><br>
      <label for="fpassword">Password</label><br>
      <input type="password" id="fpassword" name="password"><br>
      <label for="femail">Email</label><br>
      <input type="email" id="femail" name="email"><br>
      <label for="finstansi">Instansi</label><br>
      <input type="text" id="finstansi" name="instansi"><br>
      <div class="formbutton">
        <input type="submit" value="Simpan">
        <input type="button" value="Batal">
      </div>
    </form>

    <div>
    </div>
  </div>

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