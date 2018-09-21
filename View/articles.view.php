<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="public/css/admin.css">
    <script src="ckeditor/ckeditor.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>

<body>
    <div class="sidebar">
        <?php include "View/menuAdmin.view.php";?>
    </div>

    <div class="content">
        <h2>Articles</h2>
            <div class="container col-50">
                <div class="row">
                    <h4>Listes d'articles</h4>
                    <hr>
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
      <td><?= $item->getRubriqueid();?></td>
      <td><a href="?update=<?=$item->getIdarticle()?>"><button type="button" class="btn btn-primary btn-sm">Modifier</button></a>
<button type="button" class="btn btn-secondary btn-sm" onclick="Delete(<?=$item->getIdarticle()?>);">Supprimer</button></td>
    </tr>
<?php
    }
}
?>
  </tbody>
</table>

                </div>
            </div>
    </div>

</body>

</html>