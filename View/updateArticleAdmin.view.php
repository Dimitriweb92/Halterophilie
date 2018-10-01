<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Admin - Modifier un article</title>
    <script src="Asset/js/myJs.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

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

                        <textarea name="thetext" id="editor">
                            <?=$recup2->getThetext()?>
                        </textarea>
                        <script>
var toolbarOptions = [
  ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
  ['blockquote', 'code-block'],

  [{ 'header': 1 }, { 'header': 2 }],               // custom button values
  [{ 'list': 'ordered'}, { 'list': 'bullet' }],
  [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
  [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
  [{ 'direction': 'rtl' }],                         // text direction

  [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
  [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

  [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
  [{ 'font': [] }],
  [{ 'align': [] }],

  ['clean']                                         // remove formatting button
];

var quill = new Quill('#editor', {
  modules: {
    toolbar: toolbarOptions
  },
  theme: 'snow'
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