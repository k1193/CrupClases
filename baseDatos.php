<?php
 
    class BaseDatos{

        //atributos
        private $servidor="localhost";
        private $usuario="root";
        private $clave="";
        private $nombrebaseDatos="bd_tienda";
        private $conexion;

        //constructor
        public function __construct(){}

        // metodos
        public  function conectarBaseDatos(){
            //configurar la conexión
            $this->conexion=mysqli_connect(
               $this->servidor,
               $this->usuario,
               $this->clave,
               $this->nombrebaseDatos        

            );
            //verificar la conexión
            if(!($this->conexion)){
                die('Error de conexión:');


            }else{
                echo("conexón  exitosa");

            }
        }
        // ESCRIBIR EN LA BASE DE DATOS 
        public function alterarBaseDatos($consultaSQL){
            $this->conectarBaseDatos();

            $resultado=$this->conexion->query($consultaSQL);
            return($resultado);

            $this->conexion->close();
        
        }
        // lectura  en la Basedatos(Buscar)

        public function consultarEnBaseDatos($consultaSQL){
            $this->conectarBaseDatos();
            $resultado=$this->conexion->query($consultaSQL);
             
            //print_r ($resultado);

             echo("<br>");
             echo("<br>");

             $arreglofilas=array();
            foreach($resultado as $registros){
                print_r($registros);
                $arreglofilas[]=$registros;

                

            }
            echo("<br>");
            echo("<br>");

            //print_r($arreglofilas);

            return($arreglofilas);
            $this->conexion->close();



        }

    }










?>