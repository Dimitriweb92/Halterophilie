<?php
# aaa066 create detail view

if(is_string($oneView)){


?>
<!DOCTYPE html>
<html lang="fr">
<?php include "View/head.view.php";?>

<body>
    <div class="text-center display-1 bg-dark text-white">BWA</div>
    <section>
<?php
    include "View/menu.view.php";
    echo "<center><h1>Article: {$oneView}</h1></center>";
}else{

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Article: <?= $oneView->getTitre() ?></title>
    
    <?php include "View/head.view.php";?>
</head>
<body>
    <div class="text-center display-1 text-white" style="background-color: #1c2331!important;">BWA</div>
<?php
include "View/menu.view.php";
?>
<div style="background-color: #293244!important;color: #FFF;">
    <a href="./" style="color: #892d2d;margin:10px;"><b>Accueil</b></a> > <?= $oneView->getTitre() ?>
</div>
<center><h1 style="background-color: #892d2d;color: #FFF;padding: 10px;"><?= $oneView->getTitre() ?></h1></center>
<div class="border rounded" style="margin: 0px 15%;padding: 0 5%;">
        <p class="mt-2 p-3"><?= $oneView->getThetext() ?></p> 
        <?php } ?>
</div>
</div>
</section>
<?php include "View/footer.view.php";?>
            <script>
                window.onscroll = function() {
                    myFunction()
                };

                var header = document.getElementById("myHeader");
                var sticky = header.offsetTop;

                function myFunction() {
                    if (window.pageYOffset > sticky) {
                        header.classList.add("sticky");
                    } else {
                        header.classList.remove("sticky");
                    }
                }
            </script>
</body>
</html>
