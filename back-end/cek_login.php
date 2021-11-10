<?php
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include '../koneksi.php';
 
// menangkap data yang dikirim dari form login
$dbuser = $_POST['username'];
$dbpass = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from pengguna where username='$dbuser' and password='$dbpass'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="1"){
 
		// buat session login dan username
		$_SESSION['username'] = $dbuser;
		$_SESSION['level'] = "1";
		// alihkan ke halaman dashboard admin
		header("location:AdminProfil.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="2"){
		// buat session login dan username
		$_SESSION['username'] = $dbuser;
		$_SESSION['level'] = "2";
		// alihkan ke halaman dashboard pegawai
		header("location:UserProfil.php");
 
	
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php");
	}	
}else{
	header("location:login.php");
}
 
?>