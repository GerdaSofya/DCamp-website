<?php
//$dbhost = 'localhost'; 
//$dbuser = 'root';
//$dbpass = '';
//$dbname = 'dcampdb';

 $dbhost = 'sql111.epizy.com'; 
 $dbuser = 'epiz_30390349';
 $dbpass = 'wGmcjtyLUnJx';
 $dbname = 'epiz_30390349_dbdcamp';

$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('koneksi gagal');
?>
