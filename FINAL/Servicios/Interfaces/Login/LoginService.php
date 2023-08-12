<?php
require_once 'Database.php';
require_once 'Parameter.php';
class LoginService implements ILoginService{
    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function signIn($email, $password) {
        try {
            $params = [new Parameter(PARAM_STR, $email)];
            $result = $this->database->executeProcedure('GetUserByEmail', $params);

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                if ($password == $user['password']) { // Consider using password_hash and password_verify in the future.
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['email'] = $user['email'];
                    //return para que sepa que es true y todo bien, y el ajax envie a dashboard
                    header("Location: index.php");
                    exit;
                } else {
                    throw new Exception("Incorrect password");
                }
            } else {
                throw new Exception("No user found with the given email");
            }
        } catch (Exception $e) {
            $this->database->logException($e->getMessage());
            //return false paraque se quede en el index
            echo $e->getMessage();
            exit;
        }
    }
}

?>