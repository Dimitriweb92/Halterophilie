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
        <a href="?articles">Articles</a>
        <a href="?menus">Menu</a>
        <a href="?reseauxsociaux">Réseaux Sociaux</a>
        <a class="active" href="?parametres">Paramètres</a>
        <a href="?deconnect">Déconnexion</a>
    </div>
    <h2>Paramètres</h2>

    <div class="content">
        <div class="container">
            <form action="/action_page.php">
                <div class="row">
                    <div class="col-25">
                        <label for="fname">First Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Last Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="country">Country</label>
                    </div>
                    <div class="col-75">
                        <select id="country" name="country">
                            <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="subject">Subject</label>
                    </div>
                    <div class="col-75">
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>

</body>

</html>