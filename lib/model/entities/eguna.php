<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of eguna
 *
 * @author ikasle
 */
namespace entities;
/** @Entity @Table(name="eguna") **/
class eguna {
    /** @Id @Column(type="integer") **/
    private $eguna;
    /**@OneToMany (tergetEntity="Bezeroa", mappedBy="eguna")*/
    private $bezeroak;
    public function __construct($x){
        $this->eguna=$x;
        $this->bezeroak=new \Doctrine\Common\Collections\ArrayCollection();
    }


    public function getEguna(){
        return $this->eguna;
    }
    
    public function setBezeroak($z){
        $this->bezeroak[]=$z;
    }
}

?>
