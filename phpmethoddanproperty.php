<?php

class manusia{

    var $nama;
    var $umur;
    var $sekolah;
   
    function tampilkan_nama(){
        return "Nama saya Cahya Maulana <br/>";
    }
    
    function umur(){
        return "Umur saya 17 tahun <br/>";
    }
    
    function nama_sekolah(){
      return "Saya sekolah di SMK Wikrama BOGOR <br/>";
    }
}

$manusia = new manusia();


echo $manusia->tampilkan_nama();


echo $manusia->umur();

echo $manusia->nama_sekolah();
?>