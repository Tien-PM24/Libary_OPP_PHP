<?php
    class Library{
        private $Ma_thu_v;
        private $Dia_chi;

        public function Library($Ma_thu_v,$Dia_chi){
            $this->Ma_thu_v->$Ma_thu_v;
            $this->Dia_chi->$Dia_chi;
        }

        public function Display_Library(){
            return "Mã thư viện: ".$this->Ma_thu_v."<br>"."Có địa chị ở: ".$this->Dia_chi."<br>";
        }
    }

?>