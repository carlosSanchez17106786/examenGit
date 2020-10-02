<?php

 session_start();
 
function contenido(){
         $dat=array();
         $titulo=array();
         $desc=array();
         
       
         

       
         $i=0;
        $gestor= opendir('./img');
        if($gestor){
            while(($imagen= readdir($gestor))!=false ||$i<count($desc)||$i<count($titulo)){
                if($imagen!='.' && $imagen!='..' ){
                       $titulo[$i]=$_SESSION['titulo'];
                       $desc[$i]=$_SESSION['descripcion'];
                    if($titulo[$i]==$_SESSION['titulo']&&$titulo[$i]==$_SESSION['titulo']){
                         $dat[]="img/".$imagen."||".$titulo[$i]."||".$desc[$i];
                            
                      $i++;
                    }
                      
                        
                  
                        

                } 
               
            } 
            
        }
    return $dat;
}



 

