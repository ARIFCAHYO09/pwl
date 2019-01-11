<?php
$id=$_POST["id_produk"];
$query="select * from produk where id_produk='$id'";
$produk=mysqli_query($koneksi,$query);
$row = mysqli_fetch_array($produk,MYSQLI_ASSOC);
?>
<h2>Edit Produk</h2>
<?php
$querys="select * from kategori";
$results=mysqli_query($koneksi,$querys);
?>
<
<form method="post" enctype="multipart/form-data" action="index.php?halaman=editprodukproses">
	<div class="form-group">
		<label>Kategori</label>
		<select class="form-group" name="kategori">
		    <?php 
				while($rows = mysqli_fetch_array($results,MYSQLI_ASSOC)) { 
			?>
			<option value="<?php echo $row['id_kategori'] ?>">
			    <?php echo $rows["nama_kategori"] ?>
			</option>
			
			<?php } ?>
		</select>
	</div>	
	<div class="form-group">
		<label>Nama Produk</label>
		
		<input type="hidden" class="form-control" name="id" value="<?php echo $id?>">
		<input type="text" class="form-control" name="nama" value="<?php echo $row['nama_produk']?>">
	</div>
	<div class="form-group">
		<label>Jumlah Stok</label>
		<input type="number" class="form-control" name="stok" value="<?php echo $row['jumlah_stok']?>">
	</div>
	<div class="form-group">
		<label>Harga</label>
		<input type="number" class="form-control" name="harga" value="<?php echo $row['harga']?>">
		
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10">
		    <?php echo $row['deskripsi']?>
		</textarea>
		
	</div>

<div class="row">
   	<div class="col-md-3" style="margin-left: 10%">
   		<div class="thumbnail">
   			<center>
       			<div class="form-group">
					<label>Gambar 1</label>
					<input type="file" id="imgInp" name="file-upload" onchange="readURL(this);" />
					<br>
					<img id="blah" src="../asset/img/produk/<?php echo $row['direktori_gambar']?>" width="200px" height="200px"
					onerror=this.src="../asset/img/produk/default.png"
					/>
					</div>
			</center>
   		</div>
   	</div>

    <div class="col-md-3">
   		<div class="thumbnail">
   			<center>
       			<div class="form-group">
					<label>Gambar 2</label>
					<input type="file" id="imgInp2" name="file-upload2" onchange="readURL2(this);" />
					<br>
					<img id="blah2" src="../asset/img/produk/<?php echo $row['direktori_gambar2']?>" width="200px" height="200px"
					onerror=this.src="../asset/img/produk/default.png"
					>
				</div>
			</center>
   		</div>
   	</div>

   	<div class="col-md-3">
   		<div class="thumbnail">
   			<center>
       			<div class="form-group">
					<label>Gambar 3</label>
					<input type="file" id="imgInp3" name="file-upload3" onchange="readURL3(this);" />
					<br>
					<img  id="blah3" src="../asset/img/produk/<?php echo $row['direktori_gambar3']?>" width="200px" height="200px"
					onerror=this.src="../asset/img/produk/default.png"
					 />
				</div>
			</center>
   		</div>
   	</div>
</div>
	<center>
		<button type="submit" name="submit" value="submit" class="btn btn-primary" >Simpan</button>
	</center>
</form>