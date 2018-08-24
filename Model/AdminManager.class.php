<?php
/**
 * Created by PhpStorm.
 * User: dimitri.moyson
 * Date: 22-08-18
 * Time: 14:48
 */

class AdminManager
{
    private $db;

    public function __construct(PDO $connect)
    {
        $this->db = $connect;
    }

    public function identAdmin (Admin $user){

        $sql = "SELECT * FROM admin WHERE thelogin=? and thepwd=?";
        $recup= $this->db->prepare($sql);
        $recup->bindValue(1,$user->getThelogin(),PDO::PARAM_STR);
        $recup->bindValue(2,$user->getThepwd(),PDO::PARAM_STR);

        $recup->execute();

        if (!$recup->rowCount()){

            return false;
        }else{

            $this->createSession($recup->fetch(PDO::FETCH_ASSOC));
            return true;
        }
    }
    private function createSession(array $datas)
    {
        $_SESSION = $datas;
        $_SESSION['monid'] = session_id();
    }

    public function deconnect()
    {
        $_SESSION = array();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();

        header("Location: ./");
    }

}