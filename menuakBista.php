<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of menuakBista
 *
 * @author ikasle
 */
class bistak {
    public function menuaHasi() {
        echo "<div id='menu'><ul>";
    } 

    public function bistaratuMenua($m) {
        echo "<li><a href='#'>";
        echo $m;
        echo "</a></li>";
    }
    
    public function menuaBukatu() {
        echo "</ul></div>";
    }
}

?>
