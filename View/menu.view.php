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
    <nav id="myHeader" class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: inherit;">
        <div>
            <button style="margin: 1rem;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse justify-content-md-end" id="navbarsExample08">
            <ul class="navbar-nav">

        <?php foreach ($ListMenu as $item) { ?>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$item->getTitre()?></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown08">
                    <?php 
            for ($i=0; $i < count($sousmenu); $i++) { 
            if ($sousmenu[$i]["niveaux"] == $item->getId() ) { ?>
                            <a class="dropdown-item" href="#"><?=$sousmenu[$i]["titre"]?></a>

        <?php 
            }
        } 
        ?>

                </div>
            </li>
            <?php } ?>
            <li class="nav-item register">
                    <a class="nav-link" href="#">S'inscrire</a>
                </li>

    </nav>