<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of zentrua
 *
 * @author ikasle
 */
/** @entity*/
class zentrua {
    /** @Id @GeneratedValue(strategy="AUTO") @Column(type="integer") **/
    private $id;
    
    /** @Column(type="text" name="deskribapena" length="150")**/
    private $deskribapena;
    
    /** @Column(type="integer")**/
    private $prezioa;
    
    /** @ManyToOne(targetEntity="bezeroa", inversedBy="zentruak")
     * @JoinColumn(name="id_bezero", referencedColumnName="id")
     */
    private $id_bezero;
    
    /** @ManyToOne(targetEntity="eguna", inversedBy="zentruak")
     * @JoinColumn(name="eguna", referencedColumnName="eguna")
     */
    private $eguna;
    
    /** @Column(type="boolean")**/
    private $ordainduta;
}

?>
