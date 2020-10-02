<?php
 session_start();

$archivo=$_FILES['archivo'];
$nombre=$archivo['name'];
$tipo=$archivo['type'];

$_SESSION['titulo'] = $_POST['titulo'];

$_SESSION['descripcion'] = $_POST['descripcion'];



function guardarFoto($archivo,$nombre,$tipo){
    $mensaje;
if($tipo=='image/jpg' || $tipo=='image/png'|| $tipo=='image/gif'|| $tipo=='image/jpeg'){
    if(!is_dir('img')){
        mkdir('img',0777);
    }
    move_uploaded_file($archivo['tmp_name'], 'img/'.$nombre);
     header('Refresh: 5; URL=index.php');
    $mensaje='<h1>Imagen subida correctamente</h1>';
    
    
}else{
    header('Refresh: 5; URL=index.php');
    $mensaje='<h1>Sube una imagen con un archivo correcto<h1/>';
   
}
 return $mensaje;
}

echo guardarFoto($archivo, $nombre, $tipo);




?>
