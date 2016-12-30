<?php
    
    if (file_exists("../XML/celebs.xml")) {
        $celebs = simplexml_load_file('../XML/celebs.xml');
        
        require('../fpdf.php');
    
        class REPORT extends FPDF
        {
            function Header(){
                $this->SetFont('Times','B',18);
                $this->Cell(50,50,'Celebs',50,50);
            }
        }
        
        $file = new REPORT();
        $file->AddPage();
        $file->SetFont('Times','',12);
        $file->MultiCell(0,10,"\n");
        foreach($celebs->celeb as $i){
            $file->MultiCell(0, 5, "ID: ".$i->id." Name:".$i->name."\nInfo: ".$i->description."\nImg name: ".$i->file."\n");
            $file->MultiCell(0, 1, "\n");
        }
        
        $file->Output();
}
    
?>