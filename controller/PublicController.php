<?php
$ArticleM = new ArticleManager($pdo);
$rubriqueM = new  RubriqueManager($pdo);
$adminM = new adminManager($pdo);


$menu = $rubriqueM->MenuPrincipal();


if($menu){
    foreach ($menu as $value){
        $ListMenu[] = new Rubrique($value);
    }
}else{
    $erreurmenu = "Catégorie inexistante";
}


if (isset($_GET['login'])){
    if(empty($_POST)){
        require_once "View/connect.view.php";
    }
    else{
        $identification = new Admin($_POST);
        $connect = $adminM->identAdmin($identification);

        if ($connect){
            header("Location: ./");
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