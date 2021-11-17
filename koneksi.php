<?php
//$dbhost = 'localhost'; 
//$dbuser = 'root';
//$dbpass = '';
//$dbname = 'dcampdb';

 $dbhost = 'sql105.epizy.com'; 
 $dbuser = 'epiz_30331140';
 $dbpass = 'undabungas';
 $dbname = 'epiz_30331140_dcampdb';

$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('koneksi gagal');
?>
