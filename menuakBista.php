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

    public function bistaratuMenua($m,$i) {
        echo "<li class='m$i'><a href='index2.php?lot=".$i."'>";
        echo $m;
        echo "</a></li>";
    }
    
    public function menuaBukatu() {
        echo "</ul></div>";
    }
}

?>
