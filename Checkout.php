<?php 
include 'proses/koneksi.php';

 ?>

<!DOCTYPE html>
<html >
<head>

  <title></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/responsive.css">

  <link rel="stylesheet" type="text/css" href="css/desain.css">
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
    <?php
    include  'config.php';
      $em=$_SESSION["e"];
      $qq="select * from member where email= '$em'";
      $get=mysqli_query($conn,$qq);
      $row = mysqli_fetch_array($get,MYSQLI_ASSOC);
    ?>
    <?php

if (!isset($_SESSION["keranjang"])) 
{
    echo "<script>alert('keranjang kosong harap belanja dahulu');</script>";
    echo "<script>location='index.php';</script>";
}

if(!isset($_SESSION["e"])){
    echo "<script>alert('Silahkan login terlebih dahulu');</script>";
    echo "<script>location='Masuk.php';</script>";
    exit();
}

?>
    

        <div class="zigzag-bottom"></div>
        <div class="container-fluid" style="padding-left: 5px;">
            <div class="row">


                <div class="col-lg-6">
                    <div class="product-content-right">
                       <div class="panel panel-info" style="margin: 1em;" id="detail"> 
                             <div class="panel-heading">
                                       <h3 class="panel-title">Billing Details <a href="akun.php"> <i class="glyphicon glyphicon-edit" id="btn-detail-edit"></i
                                       >
                                     </a></h3>
                                   </div>

                                   <div class="panel-body" name="checkout">

                                    <form method="post" action="transaksi_detail_edit.php">
                                        <div id="billing_first_name_field" class="form-row form-row-first validate-required form-group">
                                            <label class="" for="billing_first_name">Nama Depan <abbr title="required" class="required">*</abbr>
                                            </label><br>
                                            <input type="text" placeholder="" id="nama_depan" name="nama_depan" class="input-text form-control" value="<?php echo $row['nama_depan']?>" disabled="">
                                        </div> 

                                        <div id="billing_last_name_field" class="form-row form-row-last validate-required">
                                            <label class="" for="billing_last_name">Nama Belakang <abbr title="required" class="required">*</abbr>
                                            </label><br>
                                            <input type="text" placeholder="" id="nama_belakang" name="billing_last_name" class="input-text form-control" value="<?php echo $row['nama_belakang']?>" disabled="">
                                        </div>
                                        <div class="clear"></div>

                                        <div id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                            <label class="" for="billing_address_1">Alamat <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" placeholder="Alamat Lengkap" id="alamat" name="billing_address_1" class="input-text form-control" value="<?php echo $row['alamat']?>" disabled="">
                                        </div>

                                        <div id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                                            <label class="" for="billing_city">Kota<abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text"  placeholder="Kota" id="kota" name="billing_city" class="input-text form-control" value="<?php echo $row['kabupaten']?>" disabled="">
                                        </div>

                                        <div id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                                            <label class="" for="billing_postcode">Kode Pos <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" placeholder="Masukkan Kodepos" id="kode_pos" name="billing_postcode" class="input-text form-control" value="<?php echo $row['kode_pos']?>" disabled="">
                                        </div>

                                        <div class="clear"></div>

                                        <div id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                            <label class="" for="billing_email">Alamat Email <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" placeholder="" id="email" name="billing_email" class="input-text form-control" value="<?php echo $row['email']?>" disabled="">
                                        </div>

                                        <div id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                            <label class="" for="billing_phone">No. HP <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text"  placeholder="" id="telp" name="billing_phone" class="input-text form-control" value="<?php echo $row['telp']?>" disabled="">
                                        </div>
                                        </form>
                                    </div>
                                </div>

                                
                            </div>
                        </div>

                    <div class="col-lg-6">
                      <div class="product-content-left">
                        <!--Ongkir -->
                               <div class="panel panel-success">
                                   <div class="panel-heading">
                                       <h3 class="panel-title">Cek Ongkos Kirim</h3>
                                   </div>
                                   <div class="panel-body">
                                       <div>
                                           <?php
 //Get Data Kabupaten
                                           $curl = curl_init();
                                           curl_setopt_array($curl, array(
                                               CURLOPT_URL => "http://api.rajaongkir.com/starter/city",
                                               CURLOPT_RETURNTRANSFER => true,
                                               CURLOPT_ENCODING => "",
                                               CURLOPT_MAXREDIRS => 10,
                                               CURLOPT_TIMEOUT => 30,
                                               CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                               CURLOPT_CUSTOMREQUEST => "GET",
                                               CURLOPT_HTTPHEADER => array(
                                                   "key:764682d6bd63a446854c5ad6542f0e20"
                                               ),
                                           ));

                                           $response = curl_exec($curl);
                                           $err = curl_error($curl);

                                           curl_close($curl);
                                           echo "
                                           <div class= \"form-group\">
                                           <label for=\"asal\">Kota/Kabupaten Asal </label>
                                           <select class=\"form-control\" name='asal' id='asal' disabled>";
                                           //echo "<option>Yogyakarta</option>";
                                           $data = json_decode($response, true);
                                           for ($i=0; $i < count($data['rajaongkir']['results']); $i++) {
                                               if($data['rajaongkir']['results'][$i]['city_name']=="Yogyakarta") {
                                                
                                               echo "<option value='".$data['rajaongkir']['results'][$i]['city_id']."' selected>".$data['rajaongkir']['results'][$i]['city_name']."</option>";   
                                               }
                                               else {
                                                   
                                                echo "<option value='".$data['rajaongkir']['results'][$i]['city_id']."'>".$data['rajaongkir']['results'][$i]['city_name']."</option>";
                                                   
                                               }
                                           }
                                           echo "</select>
                                           </div>";
 //Get Data Kabupaten
 //-----------------------------------------------------------------------------

 //Get Data Provinsi
                                           $curl = curl_init();

                                           curl_setopt_array($curl, array(
                                               CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
                                               CURLOPT_RETURNTRANSFER => true,
                                               CURLOPT_ENCODING => "",
                                               CURLOPT_MAXREDIRS => 10,
                                               CURLOPT_TIMEOUT => 30,
                                               CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                               CURLOPT_CUSTOMREQUEST => "GET",
                                               CURLOPT_HTTPHEADER => array(
                                                   "key:764682d6bd63a446854c5ad6542f0e20"
                                               ),
                                           ));

                                           $response = curl_exec($curl);
                                           $err = curl_error($curl);

                                           echo "
                                           <div class= \"form-group\">
                                           <label for=\"provinsi\">Provinsi Tujuan </label>
                                           <select class=\"form-control\" name='provinsi' id='provinsi'>";
                                           echo "<option>Pilih Provinsi Tujuan</option>";
                                           $data = json_decode($response, true);
                                           for ($i=0; $i < count($data['rajaongkir']['results']); $i++) {
                                               echo "<option value='".$data['rajaongkir']['results'][$i]['province_id']."'>".$data['rajaongkir']['results'][$i]['province']."</option>";
                                           }
                                           echo "</select>
                                           </div>";
 //Get Data Provinsi
                                           ?>

                                           <div class="form-group">
                                               <label for="kabupaten">Kota/Kabupaten Tujuan</label><br>
                                               <select class="form-control" id="kabupaten" name="kabupaten"></select>
                                           </div>
                                           <div class="form-group">
                                               <label for="kurir">Kurir</label><br>
                                               <select class="form-control" id="kurir" name="kurir">
                                                   <option value="jne">JNE</option>
                                                   <option value="tiki">TIKI</option>
                                                   <option value="pos">POS INDONESIA</option>
                                               </select>
                                           </div>
                                           <div class="form-group">
                                               <label for="berat">Berat (gram)</label><br>
                                               <?php?>
                                               <input class="form-control" id="berat" type="text" name="berat" value="500" />
                                           </div>
                                           <button class="btn btn-success" id="cek" type="submit" name="button">Cek Ongkir</button>
                                       </div>
                                   </div>
                               </div>
                               
                           
                          
                               <div class="panel panel-success">
                                   <div class="panel-heading">
                                       <h3 class="panel-title">Hasil</h3>
                                   </div>
                                   <div class="panel-body">
                                       <ol>
                                           <div id="ongkir"></div>
                                       </ol>
                               </div>
                           </div>
                          </div>
                        </div>
                      </div>

                       <h3 id="order_review_heading">Detail Order</h3>

                       <div id="order_review" style="position: relative;">


                        <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp; No</th>
                                            <th class="product-name">Produk</th>
                                            <th class="product-price">Harga</th>
                                            <th class="product-quantity">Jumlah</th>
                                            
                                        </tr>
                                    </thead>
                                    <?php $totalBelanja = 0; ?>
                                        <?php $nomor=1; ?>
                                    <?php

                                        if(isset($_SESSION["keranjang"])) 
                                            foreach ($_SESSION["keranjang"] as $id_produk => $jumlah):  ?>
                                    <?php  

                                    $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
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

                                            <td class="product-name">
                                                <a href=""><?php echo $pecah["nama_produk"]; ?></a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount">Rp. <?php echo number_format($pecah["harga"]); ?></span> 
                                            </td>

                                            <td class="product-quantity">
                                                <?php echo $jumlah; ?>
                                            </td>

                                        </tr>
                                        <?php $nomor++; ?>
                                        <?php endforeach ?>
                                        <tr class="order-total">
                                            <th>Total Order</th>
                                            <td><strong><span class="amount">Rp. <?php echo number_format($totalBelanja); ?></span></strong> </td>
                                        </tr>
                                        <tr>
                                            <td class="actions" colspan="7">
                                                <div class="form-row place-order">
                                                    <form id="bayar" action="checkout_proses.php" method="post">
                                                    <input type="hidden" name="id_user" value="<?php echo $row['id_member']?>">
                                                   <button  name="checkout" class="add_to_cart_button">Konfirmasi</button>
                                                   </form>
                                                 </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            
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
            window.location= 'konfirmasi.html'            
        });
</script>


</body>
</html>




<script type="text/javascript">

$(document).ready(function(){
    $('#provinsi').change(function(){
        
 //Mengambil value dari option select provinsi kemudian parameternya dikirim menggunakan ajax
 var prov = $('#provinsi').val();
 
 $.ajax({
    type : 'GET',
    url : 'proses/cek_kabupaten.php',
    data : 'prov_id=' + prov,
    success: function (data) {
        
 //jika data berhasil didapatkan, tampilkan ke dalam option select kabupaten
 $("#kabupaten").html(data);
}
});
});
    
    $("#cek").click(function(){
 //Mengambil value dari option select provinsi asal, kabupaten, kurir, berat kemudian parameternya dikirim menggunakan ajax
 var asal = $('#asal').val();
 var kab = $('#kabupaten').val();
 var kurir = $('#kurir').val();
 var berat = $('#berat').val();
 
 $.ajax({
    type : 'POST',
    url : 'proses/cek_ongkir.php',
    data : {'kab_id' : kab, 'kurir' : kurir, 'asal' : asal, 'berat' : berat},
    success: function (data) {
        
 //jika data berhasil didapatkan, tampilkan ke dalam element div ongkir
 $("#ongkir").html(data);
}
});
});
});
</script>
<pre>
            <?php print_r($_SESSION["keranjang"]); 
            foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) {
                echo $id_produk;
                echo $jumlah;
                
            }
            ?>
        </pre>