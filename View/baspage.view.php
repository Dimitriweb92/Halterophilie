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
        <h2>Bas de page</h2>
        <form action="/action_page.php">
            <div class="container col-50">
                <div class="row">
                    <h4>{Titre}</h4>
                    <hr>
                </div>
            </div>
        </form>

    </div>

</body>

</html>