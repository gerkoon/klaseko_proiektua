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
        echo "<select>";
        
    }
    
    public function listaOption($x) {
            echo "<option value='".$x."'>$x";

}
                            
    public function ikusi1Bukatu() {

        echo "</select>
                    <input type='button' class='botoia' id='ikusiBotoia' value='ikusi'>"
            ;
}

    public function ikusi2Hasi(){
        echo "<article id='bigarrena' class='barrua'>";
        
    }
    
    public function ikusi2Bukatu(){
        echo "</article>";
        
    }
    
    public function input($balorea,$izena) {
               echo "<label>".$izena."</label>
                    <input readonly value='".$balorea."'>";
                
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
