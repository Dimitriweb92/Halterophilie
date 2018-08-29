<?php
# aaa073 connect form
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Se connecter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="../Asset/js/jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="container mt-3">
    <?php
    include "View/menu.view.php";
    echo "<center><h1>Connexion</h1></center>";
    ?>
    <div class="border border-primary rounded p-3">
        <center><h5 class="bg-light">Identification</h5></center>
        <form name="form" action="" method="post">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nom d'utilisateur</label>
                <div class="col-sm-10">
                    <input type="text" name="thelogin" class="form-control" id="staticEmail" placeholder="Entrez votre nom">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Mot de passe</label>
                <div class="col-sm-10">
                    <input type="password" name="thepwd" class="form-control" id="inputPassword" placeholder="Entrez votre mot de passe">
                </div>
            </div>
            <?php
            if(isset($error)) echo "<div id='alert' class=\"alert alert-info\" role=\"alert\">
$error</div>";
            ?>
            <center><button type="submit" class="btn btn-success">Se connecter</button>
                <script>
                    $( "#alert" ).show( "slow" )function () {
                        setInterval(3000);
                        $("#alert").hide()
                    }

                </script>
        </form>
    </div>
    <footer><center>Copyright CF2M 2018</center></footer>
</div>
</body>
</html>
