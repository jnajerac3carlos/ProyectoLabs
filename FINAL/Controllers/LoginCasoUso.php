<?php

require '../Servicios/Interfaces/Login/ILoggerService.php';
require '../Servicios/Implementations/Login/LoginService.php';

class LoginCasoUso {
    private ILoginService $loginService;

    public function __construct(){
        $this->loginService = new LoginService();
    }


    public function signIn($email, $password){
        return $this->loginService->signIn($email, $password);
    }
}


?>
