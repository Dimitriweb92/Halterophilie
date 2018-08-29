<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="../Asset/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
</head>
<body>
<center><h1>Liste des articles  <a href="?post"><button type="button" class="btn btn-primary btn-sm">Ajouter</button></a></h1></center>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Date</th>
        <th scope="col">Titre</th>
        <th scope="col">Catégorie</th>
        <th scope="col">Options</th>
    </tr>
    </thead>
    <tbody>

    <?php
    if(!is_array($affiche)){
        echo "<h3>$affiche</h3>";
    }else{
        echo "<pre>";
        //var_dump($affiche);
        echo "</pre>";
        foreach ($affiche AS $item) {
            ?>
            <tr>
                <th scope="row"><?= $item->getThedate();?></th>
                <td><?= $item->getThetitle(); ?></td>
                <td><?= $item->getThecategtitle();?></td>
                <td><a href="?update=<?=$item->getIdarticle()?>"><button type="button" class="btn btn-primary btn-sm">Modifier</button></a>
                    <button type="button" class="btn btn-secondary btn-sm" onclick="Delete(<?=$item->getIdarticle()?>);">Supprimer</button></td>
            </tr>
            <?php
        }
    }
    ?>
    </tbody>
</table>
</body>
</html>