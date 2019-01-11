<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="asset/css/bayar.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="tes.js"></script>
</head>
<body>
<?php include "header.php";?>
<?php include "config.php";
if(isset($_SESSION["e"])) {
    if(isset($_POST["submit"])) {
        if($_POST["submit"]== "Bayar") {
            $_SESSION["byr"]=$_POST["trkid"];
           // echo $_POST["trkid"];
        }
    }
    if(isset($_SESSION["byr"])) {
        $idtrk=$_SESSION["byr"];
        $ongkir="select biaya_logistik from transaksi where id_transaksi='$idtrk'";
        $hasilongkir=mysqli_query($conn,$ongkir);
        $biayaongkir=mysqli_fetch_array($hasilongkir,MYSQLI_ASSOC);
        
        //echo $idtrk;
        $total=0;
        $queryproduktrk="select * from produk_transaksi where id_transaksi='$idtrk'";
        $resultproduktrk=mysqli_query($conn,$queryproduktrk);
        while($rowproduktrk=mysqli_fetch_array($resultproduktrk,MYSQLI_ASSOC)) {
                $idproduk=$rowproduktrk["id_produk"];
                $jum=$rowproduktrk["jumlah_produk"];
                $produk="select harga*'$jum' as jum_harga from produk where id_produk='$idproduk'";
                $resultproduk=mysqli_query($conn,$produk);
                $rowproduk=mysqli_fetch_array($resultproduk,MYSQLI_ASSOC);
                $total=$total+$rowproduk["jum_harga"];
            }
           // echo $total;
            //echo "<br>";
            //echo $biayaongkir["biaya_logistik"];
            $bayar=$total+$biayaongkir["biaya_logistik"];
    
?>
<div class="container">  
  <form id="contact" action="bayarproses.php" method="post" enctype="multipart/form-data">
    <center>
    <h3>Pembayaran</h3>
    Silahkan transfer ke no rekening dibawah ini
    <br>
Senilai &nbsp: Rp. <?php echo number_format($bayar)?>
    <br>
    <br>
    BRI &nbsp : 1234567891011
    <br>
    BCA &nbsp: 1110987654321
    <br>
    BNI &nbsp : 2828938492011
    <br>
    <br>
    Upload Bukti transfer anda pada form dibawah ini
    <fieldset>
        <input type="hidden" name="idtrk" value="<?php echo $idtrk?>">
      <input input="ImgInp" placeholder="Your name" type="file" tabindex="1" name="file-upload" required autofocus onchange="readURL(this);">
     
    </fieldset>
    <br>
    <img id="blah" src="asset/img/bukti_pembayaran/download.jpg" width="300px" height="300px">
    <br>
    <br>
    </center>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
<?php 
        } else {
            ?>
                <script type="text/javascript">
                    window.location="index.php"
                </script>
            <?php
        }
    } else {
    ?>
    <script type="text/javascript">
        alert("anda belum login");
        window.location="index.php"
    </script>
    <?php
}
include "footer.php"?>
</body>
</html>