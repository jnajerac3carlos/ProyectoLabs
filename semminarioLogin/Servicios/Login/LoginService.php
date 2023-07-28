<?php
require_once 'autenticacion.php';
class LoginService implements ILoginService{
    public function Login($email, $password){
        $autenticacion = new Autenticacion();
        $autenticacion->iniciarSesion($email, $password);
    }
}

?>