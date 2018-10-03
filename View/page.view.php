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
    <div class="text-center display-1 bg-dark text-white">BWA</div>
<?php
include "View/menu.view.php";
?>
<center><h1>Menu: <?= $oneView->getTitre() ?></h1></center>
<div class="m-1  border border-primary rounded">
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
