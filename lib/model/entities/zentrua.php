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
    /** @Id @GeneratedValue @Column(type="integer") **/
    private $id;
    
    /** @Column(type="text")**/
    private $deskribapena;
    private $prezioa;
    private $id_bezero;
    private $eguna;
    private $ordainduta;
}

?>
