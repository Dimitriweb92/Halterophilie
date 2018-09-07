<?php
    //var_dump($_SESSION);
    if(isset($_GET["login"])){
        $plogin = "active";
    }
    if(isset($_GET["categ"])){
        $pcateg = "active";
    }
    elseif(empty($_GET) || isset($_GET["detail"])|| isset($_GET["user"])){
        $paccueil = "active";
    }
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <nav id="myHeader" class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: inherit;">
        <div>
            <button style="margin: 1rem;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse justify-content-md-end" id="navbarsExample08">
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
            </li>
                <?php
                echo $menu;
                ?>

                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                <script>
                    $(document).ready(function () {
                        $('.navbar .dropdown-item').on('click', function (e) {
                            var $el = $(this).children('.dropdown-toggle');
                            var $parent = $el.offsetParent(".dropdown-menu");
                            $(this).parent("li").toggleClass('open');
                            if (!$parent.parent().hasClass('navbar-nav')) {
                                if ($parent.hasClass('show')) {
                                    $parent.removeClass('show');
                                    $el.next().removeClass('show');
                                    $el.next().css({"top": -999, "left": -999});
                                } else {
                                    $parent.parent().find('.show').removeClass('show');
                                    $parent.addClass('show');
                                    $el.next().addClass('show');
                                    $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
                                }
                                //e.preventDefault();
                                e.stopPropagation();
                            }
                        });
                        $('.navbar .dropdown').on('hidden.bs.dropdown', function () {
                            $(this).find('li.dropdown').removeClass('show open');
                            $(this).find('ul.dropdown-menu').removeClass('show open');
                        });
                    });
                    </script>

            <li class="nav-item register">
                    <a class="nav-link" href="#">S'inscrire</a>
                </li>

    </nav>