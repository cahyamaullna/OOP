<?php
class  produk{
    public $nama_produk,
            $harga,
            $foto;
            ///method
            public function cetak(){
                return "$this->nama_produk <br> $this->harga <br> $this->foto ";
            }
            ///construct
            public function __construct($nama_produk,$harga,$foto){
                $this->nama_produk = $nama_produk;
                $this->harga = $harga;
                $this->foto = $foto;
            }

}
///child class
class pembelian extends produk {
    public $nama_pelanggan,
            $telepon,
            $jumlah,
            $alamat,
            $subtotal,
            $pdibeli;
            public function cetak(){
                return"$this->nama_pelanggan <br> $this->telepon <br> $this->jumlah <br> $this->alamat <br> $this->subtotal <br> $this->pdibeli";
            }
            public function __construct($nama_pelanggan,$telepon,$jumlah,$alamat,$subtotal,$pdibeli){
                $this->nama_pelanggan = $nama_pelanggan;
                $this ->telepon = $telepon;
                $this->jumlah = $jumlah;
                $this->alamat = $alamat;
                $this->subtotal = $subtotal;
                $this->pdibeli =$pdibeli;
            }

}

$produk1 = new produk("T-Shirt The Sigit",75000,"picture.jpg");
$produk2 = new produk("Hoddie POG",150000,"picture.jpg");
$produk3 = new produk("Chino",74000,"picture.jpg");

$pembeli1 = new pembelian("Muhammad Cahya Maulana","083873159228",1,"Jl. Veteran 3",75000*1,"Produk1");
$pembeli2 = new pembelian("Muhammad Rafli","087765654545",4,"Jl. Veteran 3",100000*4,"Produk2");
$pembeli3 = new pembelian("Kinkin Marissa Cahyati","098978887888",3,"Jl. Veteran 3",74000*3,"Produk3");


echo "====================================<br>";
echo "         Admin Penjualan Olshop <br>";
echo "====================================<br> <hr>";
echo "RPL XI-3 Kelompok 3 <hr>";
    

    
echo "====================================<br>";
echo "               PRODUK <br>";
echo "====================================<br> <hr>";


echo "Nama Barang 1 : " . $produk1->cetak();
echo "<br>";
echo "-------------------------------------<br>";
echo "Nama barang 2 : " . $produk2->cetak();
echo "<br>";
echo "-------------------------------------<br>";
echo "Nama Barang 3 : " . $produk3->cetak();
echo "<br>";   
echo "-------------------------------------<br>";
echo "<br>";

echo "====================================<br>";
echo "              PEMBELIAN <br>";
echo "====================================<br> <hr>";

echo "Pelanggan1 : " . $pembeli1->cetak();
echo "<br>";
echo "-------------------------------------<br>";
echo "Pelanggan2 : " . $pembeli2->cetak();
echo "<br>";
echo "-------------------------------------<br>";
echo "Pelanggan3 : " . $pembeli3->cetak();
echo "<br>";
echo "-------------------------------------<br>";



?>
