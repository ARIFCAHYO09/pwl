<h2 class="table-title">Halaman Produk</h2>

<a href="index.php?halaman=tambahproduk" class="btn btn-primary">Tambah Produk</a>



<div class="content-box-large">
	<div class="panel-heading">
		<div class="panel-title">Data Produk</div>

		<div class="panel-options">
			<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
			<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Id produk</th>
					<th>Nama Produk</th>
					<th>Jumlah Stok</th>
					<th>Harga</th>
					<th>Kategori</th>
					<th>Aksi</th>	
				</tr>
			</thead>
			<tbody>
				<?php
					$query="select * from produk";
					$produk=mysqli_query($koneksi,$query);
					
					while($row = mysqli_fetch_array($produk,MYSQLI_ASSOC)) {
				?>
				<tr>
					<td><?php echo $row["id_produk"]?></td>
					<td><?php echo $row["nama_produk"]?></td>
					<td><?php echo $row["jumlah_stok"]?></td>
					<td><?php echo $row["harga"]?></td>
					<?php
					$id=$row['id_kategori'];
					$query2="select nama_kategori from kategori where id_kategori='$id' ";
					$kategori=mysqli_query($koneksi,$query2);
					$rows = mysqli_fetch_array($kategori,MYSQLI_ASSOC);
					?>
					<td><?php echo $rows["nama_kategori"]?></td>
					<td>
						<form action="index.php?halaman=editproduk" method="post">
							<input type="hidden" name="id_produk" value="<?php echo $row['id_produk']?>">
							<button type="submit" name="submit" value="edit" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Edit</button>
                    		<button type="submit" name="submit" value="hapus" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</button>
                		</form>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
