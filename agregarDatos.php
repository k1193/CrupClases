<?php

include('baseDatos.php');
//Recibo los datos del formulario

if(isset($_POST["btnEnviar"])){
    $nombre=$_POST["nombreUsuario"];
    $correo=$_POST["emailUsuario"];
    $password=$_POST["passUsuario"];


    //creo objeto tipo base de datos(conexion)
    $operacionesconBaseDatos= new BaseDatos();
    

    //creo la consulta
    $consulta="INSERT INTO usuarios( nombre, correo, password) VALUES ('$nombre','$correo','$password')";


    //llamar a la basedatos y voy  a utilizar su metodo  para alterar ( insertar o escribir dentro) de la base de datoa
    $resultado=$operacionesconBaseDatos-> alterarBaseDatos($consulta);
    
    // validemos el resultado

    if($resultado){
        echo("<br>");
        echo("transaccion exitosa, datos agregados");
    }
    else{
        echo("<br>");
        die("error en la transaccion");

    }

}else{
    echo("no se presiono");
}


 
 


?>