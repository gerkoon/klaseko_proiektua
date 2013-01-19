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
                include_once 'menua.php';
                include_once 'menuakBista.php';
                include_once 'appBistak.php';
                #include_once 'menuakBista.php';
                
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
            $x="hola";
            $j=34;
            #error_reporting(0);
                switch ($_GET['lot']) {
                  
                case 0: $app->ikusi1Hasi();
                        $app->ikusiLista($x);
                        $app->ikusi1Bukatu();
                        
                        $app->ikusi2Hasi();
                        $app->input($j, "Zenbakia");
                        $app->input($j, "Eguna");
                        $app->textareaHasi("Enkargatua");
                        /* for bat juen bide hamen*/
                        $app->textareaDatuak("bat");
                        $app->textareaDatuak("bi");
                        $app->textareaDatuak("bat");
                        $app->textareaDatuak("bi");
                        /* honarte */
                        $app->textareaBukatu();
                        $app->input($j, "Prezioa");
                        $app->ikusi2Bukatu();
                        
                      break;
                case 1: echo "Flores/Flores01.jpg";
                      break;
                case 2: echo "decoracion/Deco02.jpg";
                      break;
                case 3: echo "Flores/Flores02.jpg";
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
