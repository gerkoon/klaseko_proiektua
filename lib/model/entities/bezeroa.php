<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace entities;
/**
 * Description of bezeroa
 *
 * @author ikasle
 */

/** @Entity  @Table(name="bezeroa")**/
class bezeroa {
   /** @Id @GeneratedValue @Column(type="integer") **/
   private $id;
   /** @Column(type="string") **/
    private $izena;
    
    /**@OneToMany (tergetEntity="zentrua", mappedBy="id_bezero")*/
    private $zentruak;
    public function __construct($id,$iz){
        $this->id=$id;
        $this->izena=$iz;
        
        $this->zentruak=new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function setZentrua($z){
        $this->zentruak[]=$z;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getIzena(){
        return $this->izena;
    }
}

    

?>
