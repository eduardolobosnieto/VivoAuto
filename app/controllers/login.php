<?php

 class Login extends Controller
 {
    public function __construct()
    {
        parent:: __construct();        
    }

    public function index()
    {
        $pagina = 'login_v';
        $this->getView()->loadView($pagina);
        
    }

    public function startLogin(){
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $mensaje = "";
        $status = false;

        if($username != ""){
            if($password != ""){
                $mensaje =  $this->getModel()->login($username, $password);
                if($mensaje == "OK"){
                    $status = true;

                }
            }else{
                $mensaje = "Contraseña requerida.";
            }
        }else{
            $mensaje = "Usuario requerida.";
        }
        $datos = array('estado' => $status, 'mensaje'=> $mensaje );
        echo json_encode($datos);
    }

    public function cerrarSession(){
        session_start();
        $_SESSION = array();
        session_destroy();
        $status = true;
        $mensaje = "Sesión cerrada.";

        $datos = array('estado' => $status, 'mensaje'=> $mensaje);
        echo json_encode($datos);
    }

 }
?>