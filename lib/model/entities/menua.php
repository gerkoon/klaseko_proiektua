<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of menua
 *
 * @author ikasle
 */
class menua {
    private $elementuak=array("Ikusi","Alta","Prezioa sartu","Nor gelditzen da");
    
    public function getCount() {
        return count($this->elementuak);
    }
    
    public function getElementuak($x) {
        return $this->elementuak[$x];
    }
}

?>
