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
    
    /** @ManyToOne(targetEntity="eguna", inversedBy="zentruak")
     * @JoinColumn(name="eguna", referencedColumnName="eguna")
     */
    private $eguna;
    
    /** @Column(type="boolean")**/
    private $ordainduta;
    
    /**@OneToMany (targetEntity="zentrua", mappedBy="id_bezero")*/
    private $zentruak;
    public function __construct($iz,$eg){
        
        $this->izena=$iz;
        $this->eguna=$eg;
        $this->ordainduta=false;
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
    
    public function getEguna(){
        return $this->eguna;
    }
    
    public function setOrdainduta($p) {
        $this->ordainduta=$p;
    }
    
}

    

?>
