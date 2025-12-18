<?php

    require_once __DIR__."/database/conectar.php";

    class M_IniciarSesion extends Conectar{

        function __construct(){
            parent::__construct();
        }
        //Recogo los datos mandados por parámetros y directamente los uso para hacer la consulta
        public function compararDatos($correo, $pw){
            $sql="SELECT nick FROM usuarios WHERE correo='".$correo."' AND pw='".$pw."';";
            //echo $sql;

            try{
                $resultado=$this->conexion->query($sql);

                $usuarios=[];
                if($fila=$resultado->fetch_assoc()){
                    $usuarios=$fila["nick"];
                }

                return $usuarios;
            }catch(mysqli_sql_exception $e){
                return false;
            }
        }
    }


?>
