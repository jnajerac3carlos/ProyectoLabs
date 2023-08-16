<?php
//obtener los campos email y password del formulario sin que de el error Undefined array key "email" y "password"
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
require 'LoginCasoUso.php';
$loginCasoUso = new LoginCasoUso();
$loginCasoUso->signIn($email, $password);
?>
