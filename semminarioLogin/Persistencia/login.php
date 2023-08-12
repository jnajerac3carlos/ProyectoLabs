<?php

require_once 'ILoginService.php';
require_once 'LoginService.php';

$email = $_POST['email'];
$password = $_POST['password'];

$LoginCasoUso=new LoginService();
$LoginCasoUso.Login($email,$password);

class Login{
    private ILoggerService $logger;
    public function __construct(LoginService $logger){
        $this->logger=$logger;
    }
    public function SingIn(){
        $this->logger.Login($email,$password);
    }
}

?>
