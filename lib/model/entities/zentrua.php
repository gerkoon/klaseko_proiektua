<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace entities;
/**
 * Description of zentrua
 *
 * @author ikasle
 */
/** @Entity  @Table(name="zentrua") */
class zentrua {
    /** @Id @GeneratedValue(strategy="AUTO") @Column(type="integer") **/
    private $id;
    
    /** @Column(type="string", name="deskribapena", length=150)**/
    private $deskribapena;
    
    /** @Column(type="integer")**/
    private $prezioa;
    
    /** @ManyToOne(targetEntity="bezeroa", inversedBy="zentruak")
     * @JoinColumn(name="id_bezero", referencedColumnName="id")
     */
    private $id_bezero;
    
    
    
    /** @Column(type="boolean")**/
    private $ordainduta;

    
    public function __construct($desk,$id_b){
        $this->deskribapena=$desk;
        $this->id_bezero=$id_b;
        $this->ordainduta=false;
        $this->prezioa=0;
        
    }
    
    public function setPrezioa($p) {
        $this->prezioa=$p;
    }
    
    public function getDesk() {
        return $this->deskribapena;
    }
}

    

?>
