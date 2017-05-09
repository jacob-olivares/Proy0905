<?php 
    include 'lib/Producto.php';
    include 'lib/ConsultaProductos.php';
    
    $oProducto1 = new Producto("Nuevo Producto",100000,"001");
    $oProducto2 = new Producto("Nuevo Producto",250000,"002");
    $oProducto3 = new Producto();
    
    // Los signos -> es para acceder a una
    // propidad, similar al pto en Java
    $oProducto3 ->nombre="Nuevo Producto";
    $oProducto3->codigo="003";
    $oProducto3->precio=300000;
    
    
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
        <form action="ConsultaProductos.php->guardarProducto" method="post">
            <div>ID Producto: <input type="text" name="idProducto"></div>
            <div>Nombre: <input type="text" name="nombre"></div>
            <div>Precio: <input type="text" name="precio"></div>
            <div>Codigo: <input type="text" name="codigo"></div>
            <input type="submit" value="Enviar">
        </form>
        <?php
        $aProductos2 = new ConsultaProductos();
        foreach ($aProductos2->Lista() as $oPro){
            echo $oPro->nombre." ".$oPro->codigo."/ $".$oPro->precio." /USD ".$oPro->totalUSD();
            echo "<br>";
        }
        ?>
    </body>
</html>
