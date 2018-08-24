<?php

if (isset($_POST['login'])){

    require_once "View/connect.view.php";

}else{
    $identification = new Admin($_POST);
    $connect = $adminM->identAdmin($identification);

    if ($connect){
        header("Location: View/administration.view.php");
    }else{
        $error = "Login et/ ou mot de passe incorrect";
        require_once "View/connect.view.php";

    }


}