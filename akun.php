<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
                                
                                
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                                
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script type="text/javascript" src="assets/js/angular.min.js"></script>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="tes.js"></script>
    <script type="text/javascript">


         $(document).ready(function()
        {
        $("#profil-edit").hide();
        $("#alamat-edit").hide();
        $("#no_telp_edit").hide();

        $("#btn-profil-edit").on("click",function() {
          $("#profil").hide();
          $("#profil-edit").show();
        })

        $("#btn-alamat-edit").on("click", function() {
          $("#alamat").hide();
          $("#alamat-edit").show();
        })

        $("#btn-telp-edit").on("click", function() {
          $("#no_telp").hide();
          $("#no_telp_edit").show();
        })

        var navItems = $('.admin-menu li > a');
        var navListItems = $('.admin-menu li');
        var allWells = $('.admin-content');
        var allWellsExceptFirst = $('.admin-content:not(:first)');
        allWellsExceptFirst.hide();
        navItems.click(function(e)
        {
            e.preventDefault();
            navListItems.removeClass('active');
            $(this).closest('li').addClass('active');
            allWells.hide();
            var target = $(this).attr('data-target-id');
            $('#' + target).show();
        });
        });

    </script>
      
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    </head>
<body ng-app="">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div ng-app="">
<?php include "header.php" ?>
<?php
    include "config.php";
    header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
    header('Cache-Control: no-store, no-cache, must-revalidate');
    header('Cache-Control: post-check=0, pre-check=0', FALSE);
    header('Pragma: no-cache');
    $email=$_SESSION["e"];
    $qq="select * from member where email='$email'";
    $get=mysqli_query($conn,$qq);
    $row = mysqli_fetch_array($get,MYSQLI_ASSOC);
    if(!isset($_SESSION["e"])) {
    ?>
    <script type="text/javascript">
    alert("anda belum login");
    window.location="index.php"
    </script>
    <?php
}
?>
</div>
</div>
<div class="container">
  
        <div class="row">

            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked admin-menu">
                    <li class="active"><a href="" data-target-id="profile"><i class="glyphicon glyphicon-user"></i>&nbsp;Profil</a></li>
                    
                    <li><a href="" data-target-id="order"><i class="glyphicon glyphicon-list"></i>&nbsp;Riwayat Pemesanan</a></li>
                    <li><a href="" data-target-id="change-password"><i class="glyphicon glyphicon-lock"></i>&nbsp;Ganti Password</a></li>
                    <li><a href="" data-target-id="settings"><i class="glyphicon glyphicon-cog"></i>&nbsp;Pengaturan</a></li>
                    <li><a href="" data-target-id="logout"><i class="glyphicon glyphicon-log-out"></i>&nbsp;Keluar</a></li>
                </ul>
            </div>

            <div class="col-md-9  admin-content" id="profile">
                <div class="panel panel-info" style="margin: 1em;" id="profil">           
                    <div class="panel-heading">
                        
                    </div>
                    <div class="panel-body">
                        <center>
                        <img id="blah3" class="img-fluid d-block rounded-circle mx-auto py-2" src="asset/memberpicture/<?php if(isset($_SESSION['u'])) { echo $_SESSION['e'];} ?>profil.jpg?nocache=<?php echo mt_rand();?>" onerror=this.src="asset/memberpicture/defaultprofil.png" width="150" height="150">
                        <form action="gambarprofil.php" method="post" enctype="multipart/form-data">
                        Select image to upload:
                        <input id="imgInp3" type="file" name="fileToUpload" onchange="readURL3(this);">
                        <input type="submit" value="Upload Image" name="submit">
                        </form>
                        </center>
                    </div>
                </div>
                    
                <div class="panel panel-info" style="margin: 1em;" id="profil">           
                <div class="panel-heading">
                        <h3 class="panel-title">Identitas <i class="glyphicon glyphicon-edit" id="btn-profil-edit"></i></h3>
                    </div>
                    <div class="panel-body">
                      
                      <pre>
                        Nama          : <?php echo $row['nama_depan'].' '.$row['nama_belakang']?>
                        
                        Jenis Kelamin : <?php echo $row["jenis_kelamin"] ?>
                        
                        Tanggal-lahir : <?php echo $row['tgl_lahir'] ?>
                        
                      </pre>
                    </div>
                </div>

                <div class="panel panel-info" style="margin: 1em;" id="profil-edit"> 
                 <div class="panel-heading">
                        <h3 class="panel-title">Identitas <i class="glyphicon glyphicon-edit"></i></h3>
                    </div>
                    <div class="panel-body">
                      
                        <form  action="namaproses.php" method="post">
                            <div style="margin-left:150px">
                       <p> Nama Depan          <input type="text" name="depan" required="" value="<?php echo $row['nama_depan']?>">
                        <br>
                        Nama Belakang           <input type="text" name="belakang" required="" value="<?php echo $row['nama_belakang']?>">
                        <br>
                        Gender        
                        
                        <?php if($row["jenis_kelamin"] == "Pria") {?>
                    <input type="radio" name="jk" value="Pria" checked required> Pria
                    <input type="radio" name="jk" value="Wanita" required > Wanita
                        <?php }else {?>
                    <input type="radio" name="jk" value="Pria"  required> Pria
                    <input type="radio" name="jk" value="Wanita" checked required > Wanita
                        
                        <?php }?>
                        <br>
                        Tanggal-lahir  : <input type="date" name="tl" required="" value="<?php echo $row['tgl_lahir'] ?>">                   
                        </div>
                        <br>
                        <button class="btn btn-primary" style="margin-left: 35%">Save</button>
                    
                        </form>
                    </div>
                </div>

                 <div class="panel panel-info" style="margin: 1em;" id="alamat">
                    <div class="panel-heading">
                        <h3 class="panel-title">Alamat <i class="glyphicon glyphicon-edit" id="btn-alamat-edit"></i></h3>
                    </div>
                    <div class="panel-body">
                      <pre>
                        Provinsi  : <?php echo $row['provinsi']?>
                        
                        Kabupaten : <?php echo $row['kabupaten']?>
                        
                        Kecamatan : <?php echo $row['kecamatan']?>
                        
                        Desa      : <?php echo $row['desa']?>
                        
                        Alamat    : <?php echo $row['alamat']?>
                        
                        Kode Pos  : <?php echo $row['kode_pos']?>
                        </pre>
                        
                    </div>
                </div>              

                <div class="panel panel-info" style="margin: 1em;" id="alamat-edit">
                    <div class="panel-heading">
                        <h3 class="panel-title">Alamat <i class="glyphicon glyphicon-edit" id="btn-alamat-edit"></i></h3>
                    </div>
                    <div class="panel-body">
                      
                        <form  action="updatealamat.php" method="post">
                        
                        <?php
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
                                           <label for=\"asal\">Kota/Kabupaten Asal </label>
                                           <select class=\"form-control\" name='provinsi' id='provinsi'>";
                                           //echo "<option>Pilih Provinsi Tujuan</option>";
                                           $data = json_decode($response, true);
                                           for ($i=0; $i < count($data['rajaongkir']['results']); $i++) {
                                               echo "<option value='".$data['rajaongkir']['results'][$i]['province']."'>".$data['rajaongkir']['results'][$i]['province']."</option>";
                                           }
                                           echo "</select>
                                           </div>";
                        ?>
                         <?php
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
                                           <select class=\"form-control\" name='kabupaten' id='kabupaten'>";
                                           //echo "<option>Yogyakarta</option>";
                                           $data = json_decode($response, true);
                                           for ($i=0; $i < count($data['rajaongkir']['results']); $i++) {
                                               
                                                   
                                                echo "<option value='".$data['rajaongkir']['results'][$i]['city_name']."'>".$data['rajaongkir']['results'][$i]['city_name']."</option>";
                                                   
                                               
                                           }
                                           echo "</select>
                                           </div>";
                        ?>
                        <label for=\"asal\">Kecamatan </label>
                         <input class="form-control" type="text" name="kecamatan" required="" value="<?php echo $row['kecamatan']?>">
                        <label for=\"asal\">Desa </label>
                         <input class="form-control"  type="text" name="desa" required="" value="<?php echo $row['desa']?>">
                        <label for=\"asal\">Alamat     </label>
                         <input class="form-control" type="text" name="alamat" required="" value="<?php echo $row['alamat']?>">
                        <label for=\"asal\">Kode Pos   </label>
                         <input class="form-control" type="text" name="kode_pos" required="" value="<?php echo $row['kode_pos']?>">
                        <br>
                        <button class="btn btn-primary" style="margin-left: 45%">Save</button>
                         
                        </form>
                        <!-- arif.0009@students.amikom.ac.id -->
                    </div>
                </div>              



                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Email</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo $row["email"]."<br>";
                        if( $row["status_email"] == 0) { echo "<a href='verifemail.php'>belum terverifikasi</a>";}
        else { echo "terverifikasi";}
                        ?>
                    </div>
                </div>


                <div class="panel panel-info" style="margin: 1em;" id="no_telp">
                    <div class="panel-heading">
                        <h3 class="panel-title">No Telepon <i class="glyphicon glyphicon-edit" id="btn-telp-edit"></i></h3>
                    </div>
                    <div class="panel-body">
                        <?php echo $row["telp"]."<br>";
                        if( $row["status_telp"] == 0) { echo "<a href='veriftelp.php'>belum terverifikasi</a>";}
        else { echo "terverifikasi";}
                        ?>
                        
                    </div>
                </div>

                   <div class="panel panel-info" style="margin: 1em;" id="no_telp_edit">
                    <div class="panel-heading">
                        <h3 class="panel-title">No Telepon <i class="glyphicon glyphicon-edit" id="btn-telp-edit"></i></h3>
                    </div>
                    <div class="panel-body">
                        <form action="veriftelp.php" method="post">
                        <input type="text" name="telp"   value="<?php echo $row['telp']?>"> 
                    </div>
                    <?php if($row["status_telp"]==0) {?>
                    <button type="submit" class="btn btn-primary" name="submit" value="verifikasi" style="margin-bottom: 20px;margin-left: 15px;" >Verifikasi</button>
                    <?php }else{ ?>
                    <button type="submit" class="btn btn-primary" name="submit" value="verifikasi" style="margin-bottom: 20px;margin-left: 15px;" disabled >Verifikasi</button>
                    
                    <?php } ?>
                    <button type="submit" class="btn btn-danger" style="margin-bottom: 20px;" name="submit" value="ganti">Ganti</button>
                    </form>
                    
                </div>

                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Perubahan Password terakhir</h3>

                    </div>
                    <div class="panel-body">
                        Tidak Pernah
                    </div>
                </div>

            </div>
            <div class="col-md-9  admin-content" id="order" style="display: none; margin-bottom:20%;">
                <div class="panel panel-info" style="margin: 1em;">
                   <div class="container" >
  <div class="row">
    <div class="table-responsive" >
      <table class="table table-bordered" style="width: 70%" >
        <thead >
          <tr >
            <th ">#</th>
            
            
            <th>Informasi Pesanan</th>
            <th>Harga</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $id=$row["id_member"];
          
          $querytransaksi="select * from transaksi where id_member='$id'";
          $resulttransaksi=mysqli_query($conn,$querytransaksi);
          $total=0;
          $no=0;
          while($rowtransaksi=mysqli_fetch_array($resulttransaksi,MYSQLI_ASSOC)) {
          ?>
          <tr>
            <td><?php $no=$no+1; echo $no; ?></td>
            <td>
            <form method="post" action="rincian.php">
            <input type="hidden" name="trkid" value="<?php $trkid=$rowtransaksi['id_transaksi']; echo $trkid ?>">
            <input type="submit" name="submit" value="TRKID<?php echo $trkid?>" />
            </form>
           
            <?php echo $rowtransaksi["tanggal"]?>
            </td>
            <?php
            $idtrk=$rowtransaksi["id_transaksi"];
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
            ?>
            <td><?php echo "harga : Rp. ". number_format($total)."<br>"."ongkir : Rp. ".number_format($rowtransaksi["biaya_logistik"])."<br>".
            "total :  Rp. ".number_format( $total+$rowtransaksi["biaya_logistik"]); $total=0;?></td>
            <td>
            <?php
            if($rowtransaksi["status_pembayaran"]==1) {
                if($rowtransaksi["resi"] == NULL) { 
                echo "pesanan diproses";
                } else {
                    echo "pesanan telah dikirim";
                    echo "<br>"."No Resi : ".$rowtransaksi["resi"];
                }
            } else {
                if($rowtransaksi["bukti_pembayaran"]==NULL) {
                    echo "menunggu pembayaran";  
                    ?>
                    <form action="bayar.php" method="post">
                    <input type="hidden" name="trkid" value="<?php echo $trkid?>">
                    <input type="submit" name="submit" value="Bayar">
                    </form
                    <?php
                } else {
                    echo "memverifikasi pembayaran";
                }
            }
            ?>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
                </div>

            </div>





   <div class="col-md-9  admin-content" id="settings" style="display: none; margin-bottom:30%;">
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Notification</h3>
                    </div>
                    <div class="panel-body">
                        <div class="label label-success">allowed</div>
                    </div>
                </div>

            </div>

            <div class="col-md-9  admin-content" id="change-password" style="display: none;">
                <form action="gantipasswordproses.php" method="post">

                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><label for="new_password" class="control-label panel-title">Password Lama</label></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="oldpass" id="new_password" required="">
                                </div>
                            </div>

                        </div>
                    </div>
           
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><label for="new_password" class="control-label panel-title"> Password Baru</label></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="newpass" id="pw1" required=""
                                     pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                                    >
                                    <br>
          -Password berisi minimal 8 karakter
          <br>
          -Password kombinasi dari karakter A-Z, a-z, 0-9
           dan simbol 
          
                                </div>
                            </div>

                        </div>
                    </div>

             
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><label for="confirm_password" class="control-label panel-title">Konfirmasi Password</label></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="confpass" id="pw2" required="">
                                     <br>
          -Konfirmasi password harus sama dengan password
                                </div>
                            </div>
                        </div>

                    </div>
                     <button class="btn btn-primary" style="width: 200px;" onSubmit="alert('Submitted.');return false;">Submit</button>
                  



                    <!-- <div class="panel panel-info border" style="margin: 1em;">
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="pull-left">
                                    <input type="submit" class="form-control btn btn-primary" name="submit" id="submit">
                                </div>
                            </div>
                        </div>
                    </div> -->

                </form>
            </div>

            <script type="text/javascript">
            window.onload = function () {
                document.getElementById("pw1").onchange = validatePassword;
                document.getElementById("pw2").onchange = validatePassword;
            }
            function validatePassword(){
                var pass2=document.getElementById("pw2").value;
                var pass1=document.getElementById("pw1").value;
                if(pass1!=pass2)
                    document.getElementById("pw2").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
                else
                    document.getElementById("pw2").setCustomValidity('');
            }
        </script> 
            <div class="col-md-9  admin-content" id="settings" style="display: none;"></div>

            <div class="col-md-9  admin-content" id="logout" style="display: none; margin-bottom:30%;">
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Confirm Logout</h3>
                    </div>
                    <div class="panel-body">
                        Do you really want to logout ?&nbsp;&nbsp;
                        <a href="#" class="label label-danger" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <span>&nbsp;&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;</span>
                        </a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" class="label label-success">&nbsp;<span>&nbsp;&nbsp;No&nbsp;&nbsp;&nbsp;</span></a>
                    </div>
                    <form id="logout-form" action="index.html" method="POST" style="display: none;">
                    </form>



                </div>
            </div>
        </div>
</div>
                  
<div ng-include="'footer.html'">
    
</div>
                            
                        </body>


                        </html>