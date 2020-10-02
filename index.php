<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <?php require_once 'dependencias.php';?>
      
        <?php require_once 'contenido.php';
           
              $datos= contenido();
              ?>
    </head>
    <body>
        <?php
              
        var_dump($_SESSION);?>
       <div class="container">
           <h1 class="titulosYsubtitulo">GALERIA DE IMAGENES</h1>
           <h2 class="titulosYsubtitulo">Imagenes subidas</h2>
             <!--
            <ul class="gridder">
                <li class="gridder-list" data-griddercontent="#gridder-content-0">
                    <img src="img/manticora.jpg"/>
                </li>
                
            </ul>
            
            
            <div id="gridder-content-0" class="gridder-content">
                <div class="row">
                    <div class="col-sm6">
                        <img src="img/manticora.jpg" class="img-responsive"/>
                    </div>
                    <div class="col-sm-6">
                        <h2>Manticora</h2>
                        <p>La mantícora es una legendaria criatura persa similar a la esfinge egipcia.
                            Tiene el cuerpo de un león, una cabeza humana
                            con tres filas de dientes afilados y a veces alas de murciélago. 
                            Otros aspectos de la criatura varían de una historia a otra.</p>
                    </div>
                </div>
            </div>
            -->
            
            <ul class="gridder">
                <?php for($i=0;$i<count($datos);$i++):
                    $d= explode("||", $datos[$i])
                    ?>
                <li class="gridder-list" data-griddercontent="<?php echo '#gridder-content-'.$i?>">
                    <img src="<?php echo $d[0]?>">
                </li>
                
                <?php endfor;?>
            </ul>
            <?php
            for($i=0;$i<count($datos);$i++):
                $d= explode("||", $datos[$i]);
              ?>
            
            <div id="<?php echo 'gridder-content-'.$i?>" class="gridder-content">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $d[0]?>" class="img-responsive"/>
                    </div>
                    <div class="col-sm-6">
                        <h2><?php echo $d[1];?></h2>
                        <p><?php echo $d[2]?></p>
                    </div>
                </div>
            </div>
            
            <?php 
            endfor;?>
            
            
            
            <div id="formulario_subir">   
          <h2>Subir Imagenes</h2>
          <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label  for="titulo">Titulo: </label>  
            <input type="text" name="titulo" id="titulo" placeholder="Agrega un titulo a tu foto"/>
            <label  for="descripcion" >Descripcion: </label>  
            <textarea name="descripcion" id="descripcion" placeholder="Agrega una descripcion a tu foto"></textarea>
         
            <input type="file" id="fichero" name="archivo"/><br/>    
            <label for="fichero" class="circle" class="circle">ELEGIR IMAGEN</label>
            
            <input type="submit" value="Enviar"/>
            
          </form>
          </div>

        </div>
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $(".gridder").gridderExpander({
            scroll:true,
            scrollOffset:60,
                    scrollTo:"listitem",
                    animationSpeed:100,
                    animationEasing:"easeInOutExpo",
                    showNav:true,
                    nextText:"<i class=\"fa fa-arrow-right\"></i>",
                    prevText:"<i class=\"fa fa-arrow-left\"></i>",
                    closeText:"<i class=\"fa fa-times\"></i>",
                    onStart: function(){
                        console.log("Gridder Inititialized");
                    },
                    onContent: function(){
                        console.log("Gridder Content Loaded");
                        $(".carousel").carousel();
                    },
                    onClosed: function(){
                        console.log("Gridder Closed");
                    }
        });
        
        
    });
</script>
