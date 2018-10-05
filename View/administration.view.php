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
                <div class="container">
                    <center>
                        <h1>Administration du site</h1></center>
                      <div class="row mt-5">
                        <div class="col-sm">
                            <h3>Post-It</h3>
                            <textarea style="height: 270px;width: 240px;resize: none;background-color: #FFEB3B;border: 1px solid #e2d034;font-weight: bold;">Exemple de Post-It</textarea>
                        </div>
                        <div class="col-sm">
                            <h3>Statistiques</h3>
                            <p>Visiteurs QUOTIDIEN : <b>5</b></p>
                            <p>Visiteurs HEBDOMADAIRE: <b>61</b></p>
                            <p>Visiteurs MENSUEL : <b>6354</b></p>
                           
                        </div>
                        <div class="col-sm">
                            <h3>Logs</h3>
                            <p>Derniere connexion: 05-10-2018 à 09:55</p>
                            <p>Derniere modification: Article <b>Entrainement</b></p>
                        </div>
                    </div>
                    <div>
                        <hr> © 2018
                    </div>
                </div>
            </div>
    </div>
</body>

</html>