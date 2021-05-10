
<h1 class="styleH1">Nosotros</h1><!--TITULO-->
        
        <section class="styleSection">

            <div class="contenedorSubmenu">
                
                <!--SUB MENU DE LA VISTA NOSOTROS-->
                <nav class="contenedorNavmenu">
                    <ul class="styleUlsubMenu">
                        <li class="styleLisubMenu"><a class="styleLinksubMenu" href="../controller/controllerOrganigrama.php">Organigrama</a></li>
                        <li class="styleLisubMenu"><a class="styleLinksubMenu" href="../controller/controllerVision.php">Visión</a></li>
                        <li class="styleLisubMenu"><a class="styleLinksubMenu" href="../controller/controllerMision.php">Misión</a></li>
                    </ul>  
                </nav>
            </div>

            <div class="contenedorSubmenu">
                <?php
                    //DECLARE LA VARIABLE $subVista PARA MOSTRAR EL SUB MENU 
                    if(!isset($subVista))
                    {
                    $subVista="organigrama.php";   
                    } 
                    require $subVista;  
                ?>
            </div>
        </section>
