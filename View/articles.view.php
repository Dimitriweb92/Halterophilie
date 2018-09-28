<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>

<body>
    <div class="container mt-3">
        <?php include "View/menuAdmin.view.php";?>

            <div class="content">
                <center>
                    <h2>Articles</h2></center>
                <div class="container col-50">
                    <div class="row">
                        <h4>Listes d'articles</h4>
                        <hr>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Titre article</th>

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
                                        <th scope="row">
                                            <?= $item->getTitre();?>
                                        </th>
                                        <td>
                                            <?= $item->getThetitle(); ?>
                                        </td>

                                        <td>
                                            <a href="?update=<?=$item->getIdarticle()?>">
                                                <button type="button" class="btn btn-primary btn-sm">Modifier</button>
                                            </a>
                                            <button type="button" class="btn btn-secondary btn-sm" onclick="Delete(<?=$item->getIdarticle()?>);">Supprimer</button>
                                        </td>
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
    </div>

</body>

</html>