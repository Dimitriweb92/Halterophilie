<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Admin - Modifier un article</title>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="Asset/js/myJs.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container mt-3">
        <?php include "View/menuAdmin.view.php"; ?>
            <center>
                <h1>Modifier un article</h1></center>
            <?php
# aaa113 article doesn't exist
if(!$recup){
echo "<h3>Cet article n'existe plus</h3>";
}else {
?>

                <form name="oneName2" action="" method="post">

                    <div class="form-group row">
                        <label for="lthetitle" class="col-sm-2 col-form-label">Titre</label>
                        <div class="col-sm-10">
                            <input type="text" name="thetitle" class="form-control" id="lthetitle" placeholder="Entrez le titre de l'article" value="<?=$recup2->getThetitle()?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lthetitle" class="col-sm-2 col-form-label">Menu</label>
                        <div class="col-sm-10">
                            <input type="text" name="thetitle" class="form-control" id="lthetitle" value="<?=$recup2->getTitre()?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lthedate" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input type="datetime-local" name="thedate" class="form-control" id="lthedate" value="<?= $newDate = date('Y-m-d\TH:i', strtotime($recup2->getThedate())); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea">Texte</label>

                        <textarea name="thetext" id="editor1" rows="10" cols="80">
                            <?=$recup2->getThetext()?>
                        </textarea>
                        <script>
                            CKEDITOR.replace('editor1', {
                                filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
                                filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                extraPlugins: 'easyimage',
                                removePlugins: 'image',
                                cloudServices_tokenUrl: '/cs-token-endpoint',
                                cloudServices_uploadUrl: '/easyimage/upload/'
                            });
                        </script>
                    </div>

                    <input type="hidden" name="idarticle" value="<?=$recup2->getIdarticle()?>">

                    <center>
                        <button type="submit" class="btn btn-primary">Modifier l'article</button>
                    </center>
                </form>

                <?php } ?>
                    <footer>
                        <center>Copyright CF2M 2018</center>
                    </footer>
    </div>
</body>

</html>