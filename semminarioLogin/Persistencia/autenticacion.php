<?php

require_once 'Database.php';

class Autenticacion {
    
    private $conexion;

    public function __construct() {
        $database = new Database();
        $this->conexion = $database->connect();
    }

    public function iniciarSesion($email, $password) {
        $email = mysqli_real_escape_string($this->conexion, $email);
        $password = mysqli_real_escape_string($this->conexion, $password);

        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($this->conexion, $query);

        if (mysqli_num_rows($result) > 0) {
            // El usuario existe
            $user = mysqli_fetch_assoc($result);
            if ($password == $user['password']) {
                // La contraseña es correcta
                // Inicia la sesión y guarda la información del usuario en las variables de sesión
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                // Redirige al usuario a la página principal (o donde quieras)
                header("Location: index.php");
                exit;
            } else {
                // La contraseña es incorrecta
                echo "Contraseña incorrecta";
                exit;
            }
        } else {
            // El usuario no existe
            echo "No se encontró ningún usuario con ese correo electrónico";
            exit;
        }
    }
}

?>
