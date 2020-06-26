<?php

include('baseDatos.php');

if(isset($_POST["btnEliminar"])){
    //traer datos del formulario
    $nombre=$_POST["nombreEliminar"];
   
     //creo objeto tipo base de datos(conexion)

     $operacionesconBaseDatos=new BaseDatos();
     // consulta para eliminar los datos
     $consulta="DELETE FROM  usuarios  where nombre='$nombre'";

     
    //llamar a la basedatos y voy  a utilizar su metodo  para alterar ( insertar o escribir dentro) de la base de dato)
   $resultado=$operacionesconBaseDatos-> alterarBaseDatos( $consulta);


   // validemos el resultado

   if($resultado){
    echo("<br>");
    echo("transaccion exitosa, datos eliminados");
}
else{
    echo("<br>");
    die("error en la transaccion");

}

}else{

    echo("no se presiono");
}




?>