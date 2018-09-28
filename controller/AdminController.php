<?php
$ArticleM = new ArticleManager($pdo);
$adminM = new AdminManager($pdo);   


if (isset($_GET['deconnect'])) {
    $adminM->deconnect();
    # aaa095 create article
    
} elseif (isset($_GET['modifarticles'])) {
    # aaa096 form not submitted
    if (empty($_POST)) {
        # aaa097 - view form
        require "View/modifarticles.view.php";
    } else {
        $newArticle = new Article($_POST);
        # aaa101 - insert into DB
        $succes = $ArticleM->createArticle($newArticle);
        if ($succes) {
            header("Location: ./");
        } else {
            # aaa102 - view form with error
            $error = "Article non inséré, veuillez recommencer";
            require "View/modifarticles.view.php";
        }
    }
    # aaa109 update an article
    
} elseif (isset($_GET['update']) && ctype_digit($_GET['update'])) {
    $idarticle = (int)$_GET['update'];
    # aaa114 form not submitted
    if (empty($_POST)) {
        # aaa110 get one article by idarticle
        $recup = $ArticleM->oneArticle($idarticle);
        if ($recup) {
            $recup2 = new Article($recup);
        }
        # aaa111 view
        require_once "View/updateArticleAdmin.view.php";
        # aaa115 form submit
        
    } else {
        # aaa116 create article object with $_POST hydrate
        $update = new Article($_POST);
        # aaa118 update Article
        $change = $ArticleM->updateArticle($update, $idarticle);
        # aaa125 if update ok
        if ($change) {
            header("Location: ./?articles");
        } else {
            $UtilM->deconnect();
        }
    }
    # aaa125 delete an article
    
} elseif (isset($_GET['delete']) && ctype_digit($_GET['delete'])) {
    $deleteId = (int)$_GET['delete'];
    # aaa128 use setter of Article
    $article = new Article(["idarticle" => $deleteId]);
    # aaa131 delete article
    $del = $ArticleM->deleteArticle($article);
    if ($del) {
        header("Location: ./");
    } else {
        $UtilM->deconnect();
    }
    # aaa089 homepage admin
    
} elseif (isset($_GET['parametres'])) {
    require_once "View/parametres.view.php";

} elseif (isset($_GET['menus'])) {
    require_once "View/menus.view.php";

} elseif (isset($_GET['hautpage'])) {
    require_once "View/hautpage.view.php";

}elseif (isset($_GET['baspage'])) {
    require_once "View/baspage.view.php";

}elseif (isset($_GET['reseauxsociaux'])) {
    require_once "View/reseauxsociaux.view.php";

}elseif (isset($_GET['articles'])) {
    $idadmin = (int)$_SESSION['idadmin'];
    
    $recup = $ArticleM->listArticle($idadmin);
    echo "<pre>";
    //var_dump($recup);
    echo "</pre>";
    if (!$recup) {
        $affiche = "Vous n'avez pas encore écris d'articles";
    } else {
        foreach ($recup AS $item) {
            $affiche[] = new Article($item);
        }
    }

    require_once "View/articles.view.php";

} else {
    # aaa107
    $idadmin = (int)$_SESSION['idadmin'];
    
    require_once "View/administration.view.php";
}
?>