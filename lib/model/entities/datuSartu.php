<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of datuSartu
 *
 * @author ikasle
 * 
 */

/** @entity 
* @Table(name="taulaproba_PPPPP") 
 * 
 */
class datuSartu {
    /** @Column(type="integer") 
     * @id
     * @GeneratedValue(strategy="AUTO")
     */
    private $id; // mapea el campo id en la base de datos de tipo int
    
    /** @Column(length=50) */
    private $izena; // tipo por defecto string
    
    public function __construct($i,$iz){
        $this->id=$i;
        $this->izena=$iz;
                
    }
}

?>
