<?php 
    include 'lib/Producto.php';
    
    $oProducto1 = new Producto("Nuevo Producto",0,"001");
    $oProducto2 = new Producto("Nuevo Producto",0,"002");
    $oProducto3 = new Producto();
    
    // Los signos -> es para acceder a una
    // propidad, similar al pto en Java
    $oProducto3 ->nombre="Nuevo Producto";
    $oProducto3->codigo="003";
    
    
    //declaracion de arreglo
    $aProductos[0]=$oProducto1;
    $aProductos[1]=$oProducto2;
    $aProductos[2]=$oProducto3;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        foreach ($aProductos as $oPro){
            echo $oPro->nombre." ".$oPro->codigo." $".$oPro->precio;
            echo "<br>";
        }
        ?>
    </body>
</html>
