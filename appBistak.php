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
    public function barrua(){
        echo "<article class='barrua'>";
    }
    
    public function ikusi1Hasi(){
        echo "<form id='ikusiForm'>
                <select id='bezIzen' name='bezIzen'>";
        
    }
    
    public function option($valorea,$agertu) {
            echo "<option name='$valorea' id='$valorea' value='".$valorea."'>$agertu</option>";

}
    
    public function select($id){
        echo "<select id='$id' name='$id'>";
    }
    
    public function selectBukatu(){
        echo "</select>";
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

    public function articleBigarrena(){
        echo "<article id='bigarrena' class='barrua'>";
        
    }
    
    public function articleBukatu(){
        echo "</article>";
        
    }
    
    public function formHasi($id, $akzioa){
        echo "<form id='$id' action='$akzioa'>";
    }
    
    public function formBukatu(){
        echo "</form>";
    }
    
    public function input($balorea,$izena) {
               echo "<label>".$izena."</label>
                    <input readonly value='".$balorea."'>";
                
    }
    public function inputHuts($izena) {
               echo "<label>".$izena."</label>
                    <input name='$izena'>";
                
    }
    public function inputHutsBal($izena,$bal) {
               echo "<label>".$izena."</label>
                    <input  name='$bal'>";
                
    }
    
    public function textareaHasi($izena) {
               echo "<label>".$izena."</label>
                    <textarea readonly >";
                
    }
    
    public function textareaHasiBal($izena,$bal) {
               echo "<label>".$izena."</label>
                    <textarea name='$bal' readonly >";
                
    }
    
    public function textareaHasiDesk($izena,$deskIzen) {
               echo "<label>".$izena."</label>
                    <textarea name='$deskIzen' requiered>";
                
    }
    
        
    public function textareaDatuak($datua){
        $era=$datua."\n ";
        echo $era;
    }
    
    public function textareaBukatu(){
        echo "</textarea>";
    }
    
    public function label($izena) {
        echo "<label>".$izena."</label>";
    }
    
    public function button($testua,$met,$form,$act,$izena){
        echo "<button value='$izena' name='$izena' type='submit' form='$form' formaction='$act' formmethod='$met'>".$testua."</button>";
    }

}


?>
