<!--
Diseinua eta garapena: Gerkoon diseinuak
NetBeansekin garatua
Errepositorioa: git://github.com/gerkoon/klaseko_proiektua.git

-->
<!DOCTYPE html>
<html>
    <head>
        <title>DomuTeka aplikazioa</title>
        <link rel="stylesheet" href="css/estiloa.css" type="text/css">
        <link rel="stylesheet" href="css/reset.css" type="text/css">
        <script src="js/jquery.js" language="javascript" type="text/javascript"></script>
        <script src="js/erakutsi.js" language="javascript" type="text/javascript"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        
        <div id="header">
            <h1>DomuTeka</h1>
            <?php
                session_start();
                
                include_once 'lib/model/entities/menua.php';
                include_once 'lib/orm/EntityManagerFactory.php';
                include_once 'menuakBista.php';
                include_once 'appBistak.php';
                error_reporting(0);
                $izena=$_SESSION["izena"];
                $pass=$_SESSION["pass"];
                $ddbb=$_SESSION["ddbb"];
                $_SESSION["id"];
                $_SESSION["bezIzena"];
                $_SESSION["zenbat"];
                $sartu = entityManagerFactory::createEntityManager($ddbb,$izena,$pass);
                
                $m=new menua();
                $mb=new bistak();
                
                $mb->menuaHasi();
                for ($i = 0; $i < $m->getCount(); $i++) {
                    $mb->bistaratuMenua($m->getElementuak($i),$i);
                }
                $mb->menuaBukatu();
            ?>
        </div>
        
        <div id="content">
            
        <aside id="osoa2">
                
            <?php
            
            $app=new appBistak();
            
            
            if (isset($_GET['lot'])){
            $_SESSION['zein']=$_GET['lot'];
            }
            
                switch ($_SESSION['zein']) {
                  
                    ##########################  ikusi  ############################
                case 0: $app->barrua();
                        $app->ikusi1Hasi();
                        $x= $sartu->getRepository('entities\bezeroa')->findAll();#bezeroa
                        for ($k=0;$k<count($x);$k++){
                            $bIzen=$x[$k];
                            $app->option($bIzen ->getId(),$bIzen ->getIzena());
                        }
                        
                        $app->ikusi1Bukatu();
                        $app->formBukatu();
                        #Bezeroaren eguna
                        
                        if (isset($_POST['bezIzen'])){
                        $aukIzen=$_POST['bezIzen'];
                        $_SESSION["id"]=$aukIzen;
                        $y=$sartu->getRepository('entities\bezeroa')->findOneBy(array('id' => $aukIzen));
                        $_SESSION["bezIzena"]=$y->getIzena();
                        $app->articleBigarrena();
                        $app->input($y->getId(), "Zenbakia");
                        $app->input($y->getIzena(), "Izena");
                        $app->input($y->getEguna()->getEguna(), "Eguna");
                        $app->textareaHasi("Enkargatua");
                        /* for bat juen bide hamen*/
                        $prezio=0;
                        $zen=$sartu->getRepository('entities\zentrua')->findBy(array('id_bezero'=>$aukIzen));
                        for($j=0;$j<count($zen);$j++){
                            $zDesk = $zen[$j];
                            $app->textareaDatuak($zDesk->getDesk());
                        }
                        /* honarte */
                        $app->textareaBukatu();
                        
                        for($p=0;$p<count($zen);$p++){
                            $pr=$zen[$p];
                            $prezio=$prezio+$pr->getPrez();
                        }
                        
                        $app->input($prezio, "Prezioa");
                        $app->articleBukatu();

                        }
                      break;
                      
                      ##########################  alta sartu  ############################
                case 1: $app->barrua();
                        $app->formHasi("altaForm","#");
                        $app->inputHuts("Izena");
                        
                        #Eguna##########
                        
                        $app->label("Eguna");
                        $app->select("egAlta");
                        $x= $sartu->getRepository('entities\eguna')->findAll();#bezeroa
                        
                        for ($k=0;$k<count($x);$k++){
                            $bEgun=$x[$k];
                            $app->option($bEgun ->getEguna(),$bEgun ->getEguna());
                        }
                        $app->selectBukatu();
                        
                        #zenbat zentru?
                        
                        $app->label("Zenbat zentru?");
                        $app->select("zenAlta");
                                                
                        for ($k=1;$k<10;$k++){
                            
                            $app->option($k,$k);
                        }
                        $app->selectBukatu();
                                             
                        $app->formBukatu();
                        
                        $app->button("Alta hasi","POST","altaForm","#","altaHasi");
                        
                        
                        #zentruak sartu!!!!!!!!!!!!!!!!!!!!!!!!!!
                        if($_POST['Izena']!=""){
                            $_SESSION["bezIzena"]=$_POST['Izena'];
                            $_SESSION["zenbat"]=$_POST['zenAlta'];
                            $e=$sartu->getRepository('entities\eguna')->findOneBy(array('eguna' => $_POST['egAlta']));
                            
                            $bez=new entities\bezeroa($_POST['Izena'],$e);
                            $sartu->persist($bez);
                            $sartu->flush();
                            
                            $app->articleBukatu();
                            
                            $app->articleBigarrena();
                            
                            $app->formHasi("formZentruAlta", "POST");
                                                       
                            for($z=0;$z<$_POST['zenAlta'];$z++){
                                $zz= $z+1;
                                $app->textareaHasiDesk("$zz. zentrua","d$z");
                                $app->textareaBukatu();
                                
                                
                            }
                            
                            $app->button("Sartu alta","POST","formZentruAlta","#","ZentruSartu");
                            $app->formBukatu();
                            $app->articleBukatu();
                        }
                        
                        /*########### BOTOIARI SAKATZEAN ###########*/
                            if(isset($_POST['ZentruSartu'])){
                                $norentzat=$sartu->getRepository('entities\bezeroa')->findOneBy(array('izena' => $_SESSION["bezIzena"]));
                                for($j=0;$j<$_SESSION["zenbat"];$j++){
                                    $desk="d".$j;
                                    
                                    $zen=new entities\zentrua($_POST[$desk],$norentzat);
                                    $sartu->persist($zen);
                                    $sartu->flush();
                                }
                            }
                        
                      break;
                      
                      ##########################  prezioa sartu  ############################
                case 2: $app->barrua();
                        if ($_SESSION["bezIzena"]!=""){
                    
                    
                            $app->input($_SESSION["bezIzena"], "Izena");
                        
                            $app->formHasi("formPrezioa", "POST");
                            $y=$sartu->getRepository('entities\bezeroa')->findOneBy(array('izena' => $_SESSION["bezIzena"]));
                            $id=$y->getId();
                            $x=$sartu->getRepository('entities\zentrua')->findBy(array('id_bezero' => "$id()"));
                            
                            for($z=0;$z<  count($x);$z++){
                                $zz= $z+1;
                                $zDesk = $x[$z];
                                $app->textareaHasi("$zz. zentrua");
                                $app->textareaDatuak($zDesk->getDesk());
                                $app->textareaBukatu();
                                $bal="d".$z;
                                $app->inputHutsBal("Prezioa",$bal);
                                
                            }
                            $app->button("Sartu Prezioak","POST","formPrezioa","#","sartuBotoia");
                            $app->formBukatu();
                            }
                            
                            /* ##############  BOTOIARI SAKATZEAN ############### */
                            
                            
                        else
                            /* errore panel bat falta da hemen echorik ez egoteko programa printzipalean!!!!  */
                            echo "ez duzu bezerorik aukeratu";
                        /*<hr> bat??
                        * for -a hemen bukatzen da!!!!!!!!!!!!!!!*/
                        if(isset($_POST['sartuBotoia'])){
                                /*for bat beste baten barruen ein biher da
                                 * erabiltzailiek dakozen zentruek jakitzeko
                                 */
                                for($j=0;$j<count($x);$j++){
                                    $zentrua=$x[$j];
                                    $zenPrez="d".$j;
                                    
                                    $zentrua->setPrezioa($_POST[$zenPrez]);
                                    
                                    $sartu->persist($zentrua);
                                    $sartu->flush();
                                    header('Location: index2.php?lot=0');
                                }
                            }
                        
                        /*botoie!!!!!!!!*/
                      break;
                case 3: $app->barrua();
                        $app->ikusi1Hasi();
                        $x= $sartu->getRepository('entities\bezeroa')->findBy(array('ordainduta'=>"false"));#bezeroa
                        for ($k=0;$k<count($x);$k++){
                            $bIzen=$x[$k];
                            $app->option($bIzen ->getId(),$bIzen ->getIzena());
                        }
                        
                        $app->ikusi1Bukatu();
                        $app->formBukatu();
                        #Bezeroaren eguna
                        
                        if (isset($_POST['bezIzen'])){
                        $aukIzen=$_POST['bezIzen'];
                        $_SESSION["id"]=$aukIzen;
                        $y=$sartu->getRepository('entities\bezeroa')->findOneBy(array('id' => $aukIzen));
                        $_SESSION["bezIzena"]=$y->getIzena();
                        $app->articleBigarrena();
                        $app->input($y->getId(), "Zenbakia");
                        $app->input($y->getIzena(), "Izena");
                        $app->input($y->getEguna()->getEguna(), "Eguna");
                        $app->textareaHasi("Enkargatua");
                        /* for bat juen bide hamen*/
                        $prezio=0;
                        $zen=$sartu->getRepository('entities\zentrua')->findBy(array('id_bezero'=>$aukIzen));
                        for($j=0;$j<count($zen);$j++){
                            $zDesk = $zen[$j];
                            $app->textareaDatuak($zDesk->getDesk());
                        }
                        /* honarte */
                        $app->textareaBukatu();
                        
                        for($p=0;$p<count($zen);$p++){
                            $pr=$zen[$p];
                            $prezio=$prezio+$pr->getPrez();
                        }
                        
                        $app->input($prezio, "Prezioa");
                        
                        $app->formHasi("formOrdaindu", "POST");
                        
                        $app->radio("ord","TRUE","ordainduta?","");
                        
                        $app->button("Bai","POST","formOrdaindu","#","ordBotoia");
                        
                        $app->formBukatu();
                        
                        if(isset($_POST['ord'])){
                            $y->setOrdainduta(TRUE);
                            $sartu->persist($y);
                            $sartu->flush();
                            header('Location: index2.php?lot=3'); 
                        }
                        
                        $app->articleBukatu();
                        }
                        
                      break;
                case 4:
                    break;
                default: echo "home/Nodisponible.jpg";
        break;
}
            ?>
                
        </aside>    
            
        
        <footer>
            <div id="f">
            <div id="f_garapena">
                <h2 id="garapena">
                garapena:
                </h2>
                
                <a href="http://www.be.net/gerkoon">
                    <h3 id="gerkoon">
                    gerkoon diseinuak
                    </h3>
                </a>
                
            </div>
            
            <div id="f_partehartze">
                <h2 id="partehartze">
                Parte hartzea:
                </h2>
                
                <a href="http://www.fpzornotza.hezkuntza.net/web/guest">
                    <h3 id="zornotza">
                    FP Zornotza
                    </h3>
                </a>
                
                <a href="http://lorak.bermeon-berton.com/">
                    <h3 id="lorak">
                    Lorak loradenda
                    </h3>
                </a>
                
            </div>
            </div>
        </footer>
        </div>
    </body>
</html>

    </body>
</html>
