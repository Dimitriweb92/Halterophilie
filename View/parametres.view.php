<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="public/css/admin.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>

<body>
    <div class="sidebar">
        <?php include "View/menuAdmin.view.php";?>
    </div>

    <div class="content">
        <h2>Paramètres</h2>
        <form action="/action_page.php">
            <div class="container col-50">
                <div class="row">
                    <h4>Maintenance</h4>
                    <hr>
                    <div class="col-75">
                        <label class="switch">
                            <input id="l0" type="checkbox">
                            <span class="slider"></span>
                        </label>
                        <label for="l0">Maintenance du site</label>

                    </div>
                    <div class="col-25">
                        {IMG}
                    </div>
                </div>
            </div>
            <div class="container col-50 clear">
                <div class="row">
                    <h4>Utilisateur</h4>
                    <hr>
                    <div class="col-75">
                        <label for="l1"><b>Mot de passe</b></label>
                        <input type="password" id="l1" name="" placeholder="Entrer">        
                    </div>
                    <div class="col-75">
                        <label for="l2"><b>Retaper votre Mot de passe</b></label>
                        <input type="password" id="l2" name="" placeholder="Entrer">                
                    </div>
                </div>
            </div>
        </form>

    </div>

</body>

</html>