<?php
class Person{
    private $nama, $usia ,$pekerjaan, $alamat;
    public function setNama($a){
        $this->nama = $a;
    }
    public function setUsia($a){
        $this->usia = $a;
    }
    public function setPekerjaan($a){
        $this->pekerjaan = $a;
    }public function setAlamat($a){
        $this->alamat = $a;
    }
    public function getNama(){
        return $this->nama;
    }
    public function getUsia(){
        return $this->usia;
    }
    public function getPekerjaan(){
        return $this->pekerjaan;
    }
    public function getAlamat(){
        return $this->alamat;
    }
}
$person = new Person;
$person->setNama("Fadlan");
echo "Nama Saya :" . $person->getNama();
?>