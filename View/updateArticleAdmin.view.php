<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Admin - Modifier un article</title>
    <script src="Asset/js/myJs.min.js"></script>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
 
<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>


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
                        <textarea name="thetext" id="summernote"><?=$recup2->getThetext()?></textarea>
                            <script>$(document).ready(function() {
$("#summernote").summernote({
  placeholder: 'enter directions here...',
        height: 300,
         callbacks: {
        onImageUpload : function(files, editor, welEditable) {

             for(var i = files.length - 1; i >= 0; i--) {
                     sendFile(files[i], this);
            }
        }
    }
    });
});
function sendFile(file, el) {
var form_data = new FormData();
form_data.append('file', file);
$.ajax({
    data: form_data,
    type: "POST",
    url: 'editor-upload.php',
    cache: false,
    contentType: false,
    processData: false,
    success: function(url) {
        $(el).summernote('editor.insertImage', url);
    }
});
}
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
