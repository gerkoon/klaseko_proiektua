<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of appBistak
 *
 * @author Admin
 */
class appBistak {
    public function ikusi1Hasi(){
        echo "<article class='barrua'>
                <form id='ikusiForm'>
                <select id='bezIzen' name='bezIzen'>";
        
    }
    
    public function ikusiLista($z,$x) {
            echo "<option name='$z' id='$z' value='".$z."'>$x";

}
                            
    public function ikusi1Bukatu() {
        $i=4;
        echo "</select>
                    <a href='index2.php?lot=".$i."'>
                    <button type='submit' class='botoia' id='ikusiBotoia' value='ikusi'>
                    ikusi
                    </button></a>
            </article>";
}

    public function ikusi2Hasi(){
        echo "<article id='bigarrena' class='barrua'>";
        
    }
    
    public function ikusi2Bukatu(){
        echo "</article>";
        
    }
    
    public function formBukatu(){
        echo "</form>";
    }
    
    public function input($balorea,$izena) {
               echo "<label>".$izena."</label>
                    <input readonly value='".$balorea."'>";
                
    }
    
    public function inputHutsik($izena) {
               echo "<label>".$izena."</label>
                    <input name='$izena'>";
                
    }
    
    public function textareaHasi($izena) {
               echo "<label>".$izena."</label>
                    <textarea readonly >";
                
    }
    
    public function textareaDatuak($datua){
        $era=$datua."\n ";
        echo $era;
    }
    
    public function textareaBukatu(){
        echo "</textarea>";
    }

}


?>
