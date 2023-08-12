<?php

require_once 'ILoginService.php';
require_once 'LoginServiceImplementation.php';

class LoginController {
    private ILoginService $loginService;

    public function __construct(ILoginService $loginService){
        $this->loginService = $loginService;
    }

    public function signIn($email, $password){
        return $this->loginService->signIn($email, $password);
    }
}


?>
