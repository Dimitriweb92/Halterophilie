<?php
//var_dump($_SESSION);
if(isset($_GET["login"])){
    $plogin = "active";
}
if(isset($_GET["categ"])){
    $pcateg = "active";
}
elseif(empty($_GET) || isset($_GET["detail"])|| isset($_GET["user"])){
    $paccueil = "active";
}
?>
<ul class="nav nav-pills d-flex">
    <?php
    if (isset($_SESSION['monid']) && $_SESSION['monid'] == session_id()) {
        ?>
        <li class="nav-item">
            <a class="nav-link" href="./">Acceuil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="./">Liste des articles</a>
        </li>
        <li class="nav-item ml-auto">
            <a class="p-2 ml-auto nav-link" href="?deconnect">Déconnexion</a>
        </li>
        <?php
    }else{
        ?>
        <li class="nav-item">
            <a class="nav-link" href="./">Acceuil</a>
        </li>
    <?php
    foreach ($viewmenu as $item) {


        ?>
        <li class="nav-item">
            <a class="nav-link <?=@$paccueil;?>" href="?categ=<?= $item->getId()?>"><?=$item->getTitre()?></a>
            <?php
            }
            ?>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="./">Tous les catalogues</a>

            </div>
        </li>
        <li class="nav-item ml-auto">
            <a class="p-2 ml-auto nav-link <?=@$plogin;?>" href="?login">Connexion</a>
        </li>
        <?php
    }
    ?>
</ul>