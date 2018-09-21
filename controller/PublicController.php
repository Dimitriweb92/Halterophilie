<?php
$ArticleM = new ArticleManager($pdo);
$rubriqueM = new  RubriqueManager($pdo);
$adminM = new AdminManager($pdo);


$menu = $rubriqueM->getMenu();

if (isset($menu)){
    for ($i=1; $i<=$menu; $i++) {
        $numPage = "<a href='halterophilie/?id='".$i."'>".$i."</a>";
        require_once "View/menupage.php";

    };
}

if (isset($_GET['login'])){
    if(empty($_POST)){
        require_once "View/connect.view.php";
    }
    else{
        $identification = new Admin($_POST);
        $connect = $adminM->identAdmin($identification);
        if ($connect){
            require_once "View/administration.view.php";
        }
        else{
            $error = "Login et/ ou mot de passe incorrect";
            require_once "View/connect.view.php";
        }
    }
}
else {
    require_once "View/index.view.php";
}
