<?php
// buat class induk: komputer
class komputer {
  
   public $merk;
   public $processor;
   public $memory;
  
   public function beli_komputer() {
     return "Beli komputer baru";
   }
}
  
class laptop extends komputer {
  
   public function lihat_spec() {
     return "merk: $this->merk, processor: $this->processor, 
     memory: $this->memory";
   }
}
  
$laptop_baru = new laptop();
  
$laptop_baru->merk = "acer";
$laptop_baru->processor ="intel core i5";
$laptop_baru->memory = "2 GB";
  
echo $laptop_baru->beli_komputer();
echo "<br />";
echo $laptop_baru->lihat_spec();
?>
