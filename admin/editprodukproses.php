<?php
if(isset($_SESSION["ea"])) {
    if(isset($_POST["submit"])) {
        $nama=$_POST["nama"];
        $kategori=$_POST["kategori"];
        $stok=$_POST["stok"];
        $deskripsi=$_POST["deskripsi"];
        $harga=$_POST["harga"];
        $id="select id_produk from produk order by id_produk desc limit 1";
        $query=mysqli_query($koneksi,$id);
        
        $row=mysqli_fetch_array($query,MYSQLI_ASSOC);
        $id4=$_POST["id"];
        $id1=$id4."gambar1.jpg";
        $id2=$id4."gambar2.jpg";
        $id3=$id4."gambar3.jpg";
        $query2="update  produk set id_kategori='$kategori',nama_produk='$nama',jumlah_stok='$stok',harga='$harga',deskripsi='$deskripsi',direktori_gambar='$id1',direktori_gambar2='$id2',direktori_gambar3 ='$id3' where id_produk='$id4'";
        if(mysqli_query($koneksi,$query2)) {
            
            move_uploaded_file($_FILES["file-upload"]["tmp_name"], "../asset/img/produk/"."$id1");
            move_uploaded_file($_FILES["file-upload2"]["tmp_name"], "../asset/img/produk/"."$id2");
            move_uploaded_file($_FILES["file-upload3"]["tmp_name"], "../asset/img/produk/"."$id3");
            ?>
            <script>
                alert("data berhasil disimpan");
                window.location="index.php?halaman=produk";
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("data gagal disimpan");
                window.location="index.php?halaman=produk";
            </script>
            <?php
        }
    }
    else {
        ?>
        <script type="text/javascript">
            window.location="index.php";
        </script>
        
    <?php
    }
}
else {
    ?>
    <script>
        alert("silahkan login dahulu");
        window.location="index.php";
    </script>
<?php
}
?>