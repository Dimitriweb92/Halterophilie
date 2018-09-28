<?php
$ArticleM = new ArticleManager($pdo);
$rubriqueM = new  RubriqueManager($pdo);
$adminM = new AdminManager($pdo);


$menu = $rubriqueM->getMenu();



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
elseif (isset($_GET['page'])&&ctype_digit($_GET['page'])){

    $idArticle = (int) $_GET['page'];


    $recup = $ArticleM->oneArticle($idArticle);

    if(!$recup){
        $oneView = "Article supprimé ou non existant";
    }else{
        $oneView = new Article($recup);
    }

    require_once "View/page.view.php";

}
else {
    require_once "View/index.view.php";
}
