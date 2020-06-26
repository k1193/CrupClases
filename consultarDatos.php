<?php

include('baseDatos.php');

if(isset($_POST["btnBuscar"])){

    // recibir datos del formulario

    $nombre=$_POST["NombreBuscar"];
   
     //creo objeto tipo base de datos(conexion)

     $operacionesconBaseDatos=new BaseDatos();

     // creo una consulta
     $consulta="SELECT  nombre  FROM  usuarios  where nombre='$nombre'";


     //llamar a la basedatos y voy  a utilizar su metodo  para leer ( buscar) en la base de dato)
    $resultado=$operacionesconBaseDatos-> consultarEnBaseDatos($consulta);
    print_r($resultado);

}
else{
    echo(" no encontrado");
}

?>