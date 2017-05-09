<?php
//include 'Producto.php';

    


class ConsultaProductos{
    
    private function Conexion(){
        $miconn=new mysqli("127.0.0.1", "root", "avaras08", "ventas");
        
        if ($miconn->connect_errno) {
            return "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ") " . $miconn->connect_error;
        }
        return $miconn;
    }
    public function Lista(){
        $sql = "SELECT * FROM productos";
        /* Uso del metodo Conexion*/
        $resultado = $this->Conexion()->query($sql);
        
        /* Obtencion de los elementos*/
        $i = 0;
        while($fila = $resultado -> fetch_assoc()){
            $oProducto = new Producto($fila["nombre"], $fila["precio"], $fila["codigo"]);
            $aProductos[$i] = $oProducto;
        }
        return $aProductos;    
    }
    

}

