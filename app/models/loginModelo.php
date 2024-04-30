<?php

class LoginModelo extends Model{

    public function __construct()
    {
        parent:: __construct();
    }

    public function login($user, $pass){

        $mensaje = "";
        $sql = "SELECT ussers.*, estadousser.*, perfiles.*, COUNT(ussers.rut) AS login
        FROM ussers INNER JOIN estadousser ON ussers.estadousser_id = estadousser.id_estadousser INNER JOIN perfiles ON ussers.perfil_id = perfiles.id_perfil
        WHERE ussers.rut = '".$user."' AND ussers.clave = '".$pass."' AND estadousser.id_estadousser = 1";
        
        $db = $this->getDb()->conectar();

        if(!$db){
            $mensaje = "Error al conectar a la base de datos: ".$db->connect_error;
        }

        $result = $db->query($sql);
        if(!$result){
            $mensaje = "Error al ajecutar consulta: ".$db->error;
        }else{
            if($result->num_rows > 0){
                $res = $result->fetch_assoc();
            
                if($res['login']== 1){
                    $mensaje = "OK";
                    session_start();
                    $_SESSION['userid'] = $res['rut'];
                    $_SESSION['username'] = $res['rut'];
                    $_SESSION['rolid'] = $res['id_perfil'];
                    $_SESSION['rolname'] = $res['perfil'];
                }else{
                    if($res['login']== 0){
                        $mensaje = "Usuario o contraseña invalido(s).";
                    }else{
                        $mensaje = "Existe un problema con el usuario.";
                    }
                }      
            }else{
                $mensaje = "Usuario o password invalido(s).";
            }
        }

        $result->close();
        $db->close();
      
        return $mensaje;
    }
}

?>