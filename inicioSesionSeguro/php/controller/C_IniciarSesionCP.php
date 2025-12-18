<?php

    require_once __DIR__."/../model/M_IniciarSesionCP.php";

    class C_IniciarSesionCP{
        private $model;
        public $vista;

        function __construct(){
            $this->model= new M_IniciarSesionCP();
        }

        public function iniciar(){
            $this->vista="V_InicioSesion";
            return [];
        }

        public function iniciarSesion(){
            $correo=isset($_POST['correo']) ? $_POST['correo'] : null;
            $pw=isset($_POST['pw']) ? $_POST['pw'] : null;

            $usuario=$this->model->compararDatos($correo,$pw);

            if($usuario){
                session_start();
                $_SESSION['idUsuario']=$usuario;
                $this->vista="V_Menu";
                return ["usuario" => $usuario];
            }else{
                $this->vista="V_Error";
                return ["mensajeError" => "ERROR AL INICIAR SESIÓN"];
            }
        }

        public function cerrarSesion(){
            session_start();
            session_destroy();
            $this->vista="V_InicioSesion";
            return [];
        }
    }

?>