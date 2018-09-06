<?php
# aaa112 - update Article view form
?>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
</head>
<body>
<script src="Asset/js/jquery-ui.js"></script>

<script src="Asset/js/datepicker-fr.js"></script>


    <div class="container mt-3">
<center><h1>Modifier un article</h1></center>
        <form action="[URL]" method="post">
        <textarea name="content" id="editor">
        &lt;p&gt;This is some sample content.&lt;/p&gt;
    </textarea>
            <p><input type="submit" value="Submit"></p>
        </form>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
            editor.config.get( 'image.toolbar' );
            // -> [ 'imageStyle:full', 'imageStyle:side', '|', 'imageTextAlternative' ]
        </script>
    </div>
</div>
</body>
</html>
