<h2>Data Produk</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Berat</th>
            <th>Foto</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
    <?php $nomor=1;?>
    <?php $ambil= $koneksi->query("SELECT*FROM produk"); ?>
    <?php while($pecah=$ambil->fetch_assoc()){?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama_produk'];?></td>
            <td><?php echo $pecah['harga_produk'];?></td>
            <td><?php echo $pecah['berat'];?></td>
            <td>
            <img src="../TA/foto_produk/<?php echo $pecah['foto_produk'];?>"width="100">
            </td>
            <td>
            <a href " " class =" btn-danger btn ">Hapus</a>
            <a href ""  class = " btn btn-warning ">Ubah</a>
            </td>
        </tr>
        <?php $nomor++; ?>
    <?php } ?>
    </tbody>
</table>
<a href="index.php?halaman=tambahproduk" class="btn btn-primary">Tambah Produk</a>