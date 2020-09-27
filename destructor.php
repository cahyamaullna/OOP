<?php 
 class komputer
{
        public $prosesor;
        public $memory;

        public function getCetak(){
            echo "$this->prosesor | $this->memory";
        } 

        public function __construct($prosesor,$memory="12 gb")
        {
            $this->prosesor = $prosesor;
            $this->memory = $memory;
        }
 }

$komputerSaya = new komputer("Core i7","8 GB");
$komputerSaya->getCetak();
?>
        