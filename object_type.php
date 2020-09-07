<?php
class hai{
 var $str;
public function tampung($temp){
return $this->str=$temp;
}

public function cetak(){
echo $this->str;
}

$pesan = new hai();
$pesan->tampung("Hello world");
$pesan->cetak();
 ?>
