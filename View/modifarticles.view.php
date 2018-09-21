<?php
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
echo "<h2>POST</h2>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";

?>
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
                    <h4>{Titre}</h4>
                    <hr><br>
                    <?php
                        if(isset($error)){?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong>Attention! </strong><?=$error;?>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                    <?php }?>
                    <form action=""  method="post">
                        <textarea name="thetext" id="editor1" rows="10" cols="80">
                            
                        </textarea>
                        <script>

                            CKEDITOR.replace( 'editor1' );
                        </script>
                        
      <input type="datetime-local" name="thedate" class="form-control" id="lthedate" value="<?= $newDate = date('Y-m-d\TH:i', strtotime(date('Y-m-d\TH:i'))); ?>">
                        /<input type="hidden" name="thetitle" value="<?=$_SESSION['idadmin']?>">
                        /<input type="hidden" name="adminidadmin" value="<?=$_SESSION['idadmin']?>">
                        <button type="submit" class="btn btn-primary">Ajouter l'article</button>
                    </form>
                </div>
            </div>
    </div>

</body>

</html>