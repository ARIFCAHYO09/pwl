<?php

include "config.php";
session_start();
//if (isset($_POST['keranjang'])) {
echo 
    "<pre>".
    print_r($_POST).
    "</pre>";
    $user=$_POST["id_user"];
    $pilih=$_POST["pilihan"];
    $logistik=$_POST["logistik"];
    $jenis=$_POST["layanan$pilih"];
    $harga=$_POST["harga$pilih"];
    function toInt($str)
    {
        return preg_replace("/([^0-9\\.])/i", "", $str);
    }
    $int = toInt($harga); 
    echo $int;
    echo $jenis.$harga;
     $transaksi="INSERT INTO `transaksi`(`id_transaksi`, `id_member`, `tanggal`, `status_pembayaran`,`logistik`, `jenis_logistik`, `biaya_logistik`) VALUES (NULL,'$user', CURDATE(),0,'$logistik','$jenis','$int')";
     $idtrk="select id_transaksi from transaksi order by id_transaksi desc limit 1";
     $result=mysqli_query($conn,$idtrk);
     $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
     $idtk=$row["id_transaksi"];
     $idtkk=$idtk+1;
     
            
    
    if(mysqli_query($conn,$transaksi)) {
        foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) {
                echo $id_produk."  ";
                echo $jumlah."<br>";
            }
        foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) {
                echo $id_produk;
                echo $jumlah;
                $produk="INSERT INTO `produk_transaksi`(`id_transaksi`, `id_produk`, `jumlah_produk`) VALUES ('$idtkk','$id_produk','$jumlah')";
                mysqli_query($conn,$produk);
            }
        echo "data disimpan";
        $_SESSION["byr"]=$idtkk;
        unset($_SESSION["keranjang"]);
        ?>
        <script type="text/javascript">
            alert("data berhasil disimpan");
            window.location="bayar.php";
        </script>
        <?php
    }
    else {
        echo "data gagal disimpan";
        ?>
        <script type="text/javascript">
            alert("data gagal disimpan");
            window.location="index.php";
        </script>
        <?php
    }
    

// if(mysqli_query($conn, $query)) {

//   echo "<script>alert('Pesanan Sedang di Proses');</script>";
//     echo "<script>location='index.php';</script>";
//  }else{
//  	echo "<script>alert('G');</script>";
//     echo "<script>location='Checkout.php';</script>";
//  }

 //}


 ?>

<pre>
		</pre>