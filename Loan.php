<?php
class Loan{
    private $Id_loan;
    private $Ngay_M;
    private $So_l_muon;

    public function __construct($Id_loan,$Ngay_M,$So_l_muon)
    {
        $this->Id_loan=$Id_loan;
        $this->Ngay_M=$Ngay_M;
        $this->So_l_muon=$So_l_muon;
    }

    public function Display_Loan_info(){
        return "ID mượn ".$this->Id_loan."<br>"."Ngày mượn ".$this->Ngay_M."<br>"."Số lượng mượn ".$this->So_l_muon."<br>";
    }
}


?>