<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include "header.php"?>
<div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                
          
                            <h2>Produk yang di beli</h2>
                            <!-- <form method="post" action="#"> -->
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp; No</th>
                                            <th class="product-thumbnail">&nbsp;Gambar</th>
                                            <th class="product-name">Produk</th>
                                            <th class="product-price">Harga</th>
                                            <th class="product-quantity">Jumlah</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <?php $totalBelanja = 0; ?>
                                        <?php $nomor=1; ?>
                                    <?php
                                        //if(isset($_SESSION["keranjang"]))
                                        $idtrk=$_POST["trkid"];
                                        $query="select * from produk_transaksi where id_transaksi='$idtrk'";
                                        $produktrk=mysqli_query($conn,$query);
                                        while($rowtrk=mysqli_fetch_array($produktrk,MYSQLI_ASSOC)) {
                                              ?>
                                    <?php  
                                    $id_produk=$rowtrk["id_produk"];
                                    $jumlah=$rowtrk["jumlah_produk"];
                                    $ambil = $conn->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
                                    $pecah = $ambil->fetch_assoc();

                                    $subtotal = $pecah["harga"]*$jumlah;
                                    $harga = $pecah["harga"];
                                    $totalBelanja +=$subtotal;
                                    ?>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="#"><?php echo $nomor; ?></a> 
                                            </td>

                                            <td class="product-thumbnail">
                                                <img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="asset/img/produk/<?php echo $pecah["direktori_gambar"]; ?>">
                                            </td>

                                            <td class="product-name">
                                                <a href=""><?php echo $pecah["nama_produk"]; ?></a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount">Rp. <?php echo number_format($pecah["harga"]); ?></span> 
                                            </td>

                                            <td class="product-quantity">
                                                <?php echo $jumlah; ?>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount">Rp. <?php echo number_format($subtotal); ?></span> 
                                            </td>
                                        </tr>
                                        <?php $nomor++; ?>
                                        <?php } ?>
                                        <tr>
                                            <td class="actions" colspan="7">
                                                
                                                 
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            <!-- </form> -->

                            <div class="cart-collaterals">


                 

                            <div class="cart_totals ">
                                <h2>Total Belanja</h2>

                                <table cellspacing="0">
                                    <tbody>
                                            <tr class="order-total">
                                            <th>Total Barang</th>
                                            <td><strong><span class="amount">Rp. <?php echo number_format($totalBelanja); ?></span></strong> </td>
                                            
                                        </tr>
                                        <tr class="order-total">
                                        <th>Biaya Ongkir</th>
                                        <?php 
                                        $qqq="select * from transaksi where id_transaksi='$idtrk'";
                                        $a=mysqli_query($conn,$qqq);
                                        $rr=mysqli_fetch_array($a,MYSQLI_ASSOC);
                                        ?>
                                        <td><strong><span class="amount">Rp. <?php echo number_format($rr["biaya_logistik"]); ?></span></strong> </td>
                                        </tr>
                                        <tr class="order-total">
                                        <th>Kurir</th>
                                        
                                        <td><strong><span class="amount"> <?php echo $rr["logistik"]." ".$rr["jenis_logistik"]; ?></span></strong> </td>
                                        </tr>
                                        <tr class="order-total">
                                        <th>Biaya Total</th>
                                        
                                        <td><strong><span class="amount">Rp. <?php echo number_format($rr["biaya_logistik"]+$totalBelanja); ?></span></strong> </td>
                                        </tr>
                                    </tbody>
                                    </tbody>
                                </table>
                            </div>




                            </div>
                        </div>                        
                                      
            
        </div>
    </div>

<?php include "footer.php"?>
</body>
</html>