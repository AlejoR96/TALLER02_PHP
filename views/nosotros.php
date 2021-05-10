
<h1 class="styleH1">Nosotros</h1><!--TITULO-->
        
        <section class="styleSection">

            <div class="contenedorSubmenu">
                
                <!--SUB MENU DE LA VISTA NOSOTROS-->
                <nav class="contenedorNavmenu">
                    <ul class="styleUl">
                        <li class="styleLisubMen"><a class="styleLinksubMen" href="#">Organigrama</a></li>
                        <li class="styleLisubMen"><a class="styleLinksubMen" href="#">Visión</a></li>
                        <li class="styleLisubMen"><a class="styleLinksubMen" href="#">Misión</a></li>
                    </ul>  
                </nav>
            </div>

            <?php
            //DECLARE LA VARIABLE $subVista PARA MOSTRAR EL SUB MENU 
                if(!isset($subVista))
                {
                    $subVista="organigrama.php";   
                } 
            
                require $subVista;  
            ?>

            <div class="contenedorSubmenu">

            </div>
        </section>
