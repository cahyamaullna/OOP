<h2>Tambah Produk</h2>

<form method="post" enctype="mulipart/form-data">
	<div class="form-grup">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-grup">
		<label>Harga</label>
		<input type="number" class="form-control" name="harga">
	</div>
	<div class="form-grup">
		<label>Berat (gr)</label>
		<input type="number" class="form-control" name="berat">
	</div>
	<div class="form-grup">
		<label>Deskrpsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"></textarea>
	</div>
	<div class="form-grup">
		<label>Foto Produk</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save'])) 
{
	$nama=$_FILES['foto']['name'];
	$lokasi=$_FILES['foto']['tmp_name'];
	move_uploaded_file("../TA/foto_produk/".$nama);
	
	$koneksi->query("INSERT INTO produk
	(nama_produk,harga_produk,berat,foto_produk,deskripsi_produk)
	VALUES('$_POST[nama]','$_POST[harga]','$_POST[berat]','$nama','$_POST[deskripsi]')");

	echo"<div class='alert alert-info'>Data Tersimpan</div>";
	echo"<script>location='index.php?halaman=produk'</script>";
}
 ?>

