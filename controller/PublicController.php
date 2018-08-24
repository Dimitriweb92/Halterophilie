<?php
$ArticleM = new ArticleManager($pdo);
$rubriqueM = new  rubriqueManager($pdo);
$adminM = new adminManager($pdo);

// recupération des catégories pour le menu

$menu = $rubriqueM->menuRubriquePrincipal();
//var_dump($menu);

if(!$menu){
    $erroMenu = "Categorie inexistante";
}else{

    foreach ($menu as $value){
        $viewmenu[] = new Rubrique($value);

    }

}


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

    require_once "View/index.view.php";
}