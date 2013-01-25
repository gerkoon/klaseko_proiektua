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

/** @Entity **/
class eguna {
    /** @Id @Column(type="integer") **/
    private $eguna;
    /**@OneToMany (tergetEntity="zentrua", mappedBy="eguna")*/
    private $zentruak;
    public function __construct($x){
        $this->eguna=$x;
        $this->zentruak=new \Doctrine\Common\Collections\ArrayCollection();
    }


    public function getEguna(){
        return $this->eguna;
    }
    
    public function setZentrua($z){
        $this->zentruak[]=$z;
    }
}

?>
