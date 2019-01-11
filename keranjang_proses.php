<?php

include "config.php";
session_start();
if (!isset($_SESSION["keranjang"])) {
	echo "<script>alert('Maaf keranjang anda kosong');window.location='keranjang.php'</script>";
}else{

	echo "<script>window.location='checkout.php'</script>";
}

?>