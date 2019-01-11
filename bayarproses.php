<?php
include "config.php";
session_start();
if(isset($_POST["idtrk"])) {
$id=$_POST["idtrk"];
$bukti=$id."bukti.jpg";
$insert="update transaksi set bukti_pembayaran = '$bukti' where id_transaksi='$id'";
if(mysqli_query($conn,$insert)) {
    move_uploaded_file($_FILES["file-upload"]["tmp_name"], "asset/img/bukti_pembayaran/"."$bukti");
    ?>
    <script type="text/javascript">
        alert("data disimpan");
        window.location="index.php"
    </script>
    <?php
    }else {
    ?>
    <script type="text/javascript">
        alert("data gagal disimpan");
        window.location="bayar.php";
    </script>
    <?php    
    }
}else {
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
?>