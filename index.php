<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dcamp</title>
    <link rel="stylesheet" href="css/beranda.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    
    <?php
    include("koneksi.php");?>
  <?php  
    $sql = "SELECT * from pengguna WHERE id='2'";
    $data = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($data);
  ?>
   
    
    <div class="imageContainer"> 

      <div class="kata1">
        Dataset Campus <br>
      Temukan data yang kamu inginkan disini

      </div>
      <div class="topnav">
        <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
          <input type="text" placeholder="Masukan kata kunci pencarian" name="search2">
          <button type="submit"><i class="fa fa-search"></i></button>
          
        </form>
        </div>
      
      </div>
    
      <div class="wrapper">
        
      <div class="wrapper-user">

      </div>
      <br>

      

      <?php
      $sql2 = "SELECT * from dataset inner join kategori ON dataset.kategori_id=kategori.id WHERE pengguna_id='2'";
      $data2 = mysqli_query($connect, $sql2);
      while($row2 = mysqli_fetch_assoc($data2)){
        echo"<div class='wrapper-dataset'>";
        echo"  <div class='wrapper-upper'>";
        echo"    <div class='wrapper-title'>";
        echo"      <p style='font-size: 18px;'><b>". $row2['judul'] . "&nbsp;&nbsp;</b><span
                   style='color:darkgrey;font-size:15px;'>". $row['nama'] ."</span></p>";
        echo"    </div>";
        echo"    <div class='wrapper-action'>";
        echo"       <a href='". $row2['link_download'] ."'><i style='vertical-align: -25%;' class='fas fa-download fa-2x'></i></a>";
        echo"       <a href='#' class='btn btn-btn btn-success' role='button'>edit</a>";
        echo"       <a href='#' class='btn btn-danger' role='button'>hapus</a>";
        echo"     </div>";
        echo"</div>";
        echo"<br><br>";
        echo"<p>". $row2['deskripsi'] . "</p>";
       echo"<p>";
       echo"   <span style='color:darkgrey;font-size:15px;'>". $row2['jumlah_data'] . "</span>&nbsp;&nbsp;";
       echo"   <span style='color:darkgrey;font-size:15px;'>". $row2['sumber'] . "</span>&nbsp;&nbsp;";
       echo"   <span style='color:darkgrey;font-size:15px;'>". $row2['waktu'] . "</span>&nbsp;&nbsp;";
       echo"   <span style='color:darkgrey;font-size:15px;'>". $row2['nama_kategori'] . "</span>";
       echo" </p>";
      echo"</div>";
      }
   ?>
     
    </div>

  </div>
      <br>
      <br>

             
    <footer class="footer">
      <div class="footer-place">
         Universitas Lambung Mangkurat <br>
         Jl. Brigjen H. Hasan Basri Kota Banjarmasin 70123 <br>
         Telp. 0511-3306671
      </div>
      <div class="footer-list">
        Copyright &copy; DCamp 2021
      </div>
    </footer>
  </body>
</html>