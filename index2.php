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
                
                $izena=$_SESSION["izena"];
                $pass=$_SESSION["pass"];
                $ddbb=$_SESSION["ddbb"];
                $_SESSION["id"];
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
            #error_reporting(0);
                switch ($_SESSION['zein']) {
                  
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
                        
                        $aukIzen=$_GET['bezIzen'];
                        $_SESSION["id"]=$aukIzen;
                        $y=$sartu->getRepository('entities\bezeroa')->findOneBy(array('id' => $aukIzen));
                        
                        $app->articleBigarrena();
                        $app->input($y->getId(), "Zenbakia");
                        $app->input($y->getIzena(), "Izena");
                        $app->input($y->getEguna()->getEguna(), "Eguna");
                        $app->textareaHasi("Enkargatua");
                        /* for bat juen bide hamen*/
                        $app->textareaDatuak("$aukIzen");
                        $app->textareaDatuak("bi");
                        $app->textareaDatuak("bat");
                        $app->textareaDatuak("bi");
                        /* honarte */
                        $app->textareaBukatu();
                        $app->input(31, "Prezioa");
                        $app->articleBukatu();

                        
                      break;
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
                        
                        $app->button("Alta hasi","get","altaForm","#","altaHasi");
                        
                        
                        #zentruak sartu!!!!!!!!!!!!!!!!!!!!!!!!!!
                        if($_GET['Izena']!=""){
                            $_SESSION["id"]=$_GET['Izena'];
                            $_SESSION["zenbat"]=$_GET['zenAlta'];
                            $e=$sartu->getRepository('entities\eguna')->findOneBy(array('eguna' => $_GET['egAlta']));
                            
                            $bez=new entities\bezeroa($_GET['Izena'],$e);
                            $sartu->persist($bez);
                            $sartu->flush();
                            
                            $app->articleBukatu();
                            
                            $app->articleBigarrena();
                            
                            $app->formHasi("formZentruAlta", "get");
                                                       
                            for($z=0;$z<$_GET['zenAlta'];$z++){
                                $zz= $z+1;
                                $app->textareaHasiDesk("$zz. zentrua","d$z");
                                $app->textareaBukatu();
                                
                                
                            }
                            $app->button("Zentruen deskribapena sartu","get","formZentruAlta","#","ZentruSartu");
                            $app->formBukatu();
                            $app->articleBukatu();
                        }
                            if(isset($_GET['ZentruSartu'])){
                                $norentzat=$sartu->getRepository('entities\bezeroa')->findOneBy(array('izena' => $_SESSION["id"]));
                                for($j=0;$j<$_SESSION["zenbat"];$j++){
                                    $desk="d".$j;
                                    $zen=new entities\zentrua($_GET[$desk],$norentzat);
                                    $sartu->persist($zen);
                                    $sartu->flush();
                                }
                            }
                        
                      break;
                case 2: echo "decoracion/Deco02.jpg";
                      break;
                case 3: echo "Flores/Flores02.jpg";
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
