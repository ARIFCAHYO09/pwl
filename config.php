<?php
$servername = "koneksi";
$username = "nama user";
$password = "password user";
$db="nama_db";

// Create connection
$conn =  mysqli_connect($servername, $username, $password,$db);

//nitip indra
// function query($query){
//     global $conn;
//     $result = mysqli_query($conn, $query);
//     $rows = [];
//     while( $row = mysqli_fetch_assoc($result)){
//         $rows[] = $row;
//     }
//     return $rows;
// }

?>