<?php
include "config.php";
?>
<!DOCTYPE html>
<html >
<head>


  <title></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/css/font-awesome.min.css">
  <link rel="stylesheet" href="asset/css/owl.carousel.css">
  <link rel="stylesheet" href="asset/style.css">
  <link rel="stylesheet" href="asset/css/responsive.css">

  <link rel="stylesheet" type="text/css" href="asset/css/desain.css">
  <script src="asset/js/jquery.min.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    
</head>
<body ng-app="">
<!-- Menu utama Header -->
<?php  
    include "header.php";
?>
    

        <div class="container-fluid">
            <div class="row">

            <div class="col-lg-6" style="background-color: yellow;">
                    <h3 id="order_review_heading">Order</h3>

                                <div id="order_review" style="position: relative;">
                                    <table class="shop_table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Produk</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                   Merek <strong class="product-quantity">× 1</strong> </td>
                                                <td class="product-total">
                                                    <span class="amount">IDR 15.000</span> </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>

                                            <tr class="cart-subtotal">
                                                <th>Keranjang Keseluruhan</th>
                                                <td><span class="amount">IDR 15.000</span>
                                                </td>
                                            </tr>

                                            <tr class="cart-subtotal">
                                                <th>Kurir</th>
                                                <td><span class="amount">FREE</span>
                                                </td>
                                            </tr>

                                            <tr class="order-total">
                                                <th>Total Order</th>
                                                <td><strong><span class="amount">IDR 15.000</span></strong> </td>
                                            </tr>

                                        </tfoot>
                                    </table>


                                    

                                        <div class="form-row place-order">

                                                <a href="konfirmasi.php" class="add_to_cart_button">Konfirmasi</a>
                                            


                                        </div>
                                </div>
                              
                        </div>                     
            <div class="col-lg-6"  style="background-color: red;">
                <div class="form">
   
              <input type="text" placeholder="email" required="" id="username"  name="email" />
              <input type="password" placeholder="password" style="color:black" required="" id="password" name="password" />
              <input type="submit" value="Login"/>

            </div>
            </div>
            </div>
        </div>

<?php include "footer.php" ?>
   
   

    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.easing.1.3.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        $('#place_order').off('click').on('click', function () {
            // body...
            window.location= 'konfirmasi.php'            
        });
    </script>


</body>
</html>
<?php 
require 'proses/koneksi.php';

//if (empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"])) 
//{
    //echo "<script>alert('keranjang kosong harap belanja dahulu');</script>";
    //echo "<script>location='index.php';</script>";
    
//}

// Save new orders
$sql = 'INSERT INTO transaksi (jumlah,tanggal, status_pembayaran) VALUES ("New Order","'.date('Y-m-d').'",0,"")';
mysqli_query($conn, $sql);
$ordersid = mysqli_insert_id($conn); 
// Clear all product in cart
unset($_SESSION['keranjang']);
 ?>
