<?php
    $dia=$_GET['dia'];
    $respuesta='';
    if($dia=='1'){
        $respuesta='<tr><td>TEC. COMUNICACIÓN</td><td>TEC</td><tr>';
    }
    else if($dia=='3'){
        $respuesta='<tr><td>INGLES</td><td>TEC</td><tr>';
    }
    echo $respuesta;
?>