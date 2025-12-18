<?php

    require_once __DIR__."/database/conectar.php";

    class M_IniciarSesionCP extends Conectar{

        function __construct(){
            parent::__construct();
        }

        public function compararDatos($correo, $pw){
            $sql="SELECT nick FROM usuarios WHERE correo=? AND pw=?;";

            try{
                $stmt=$this->conexion->prepare($sql);
                $stmt->bind_param('ss', $correo, $pw);
                $stmt->execute();

                $resultado=$stmt->get_result();

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