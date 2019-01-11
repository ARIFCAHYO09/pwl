<?php
$servername = "koneksi";
$username = "nama user";
$password = "password user";
$db="nama_db";

$koneksi = mysqli_connect($servername,$username,$password,$db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>