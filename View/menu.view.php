<?php
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

<nav id="myHeader" class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: inherit;">
    <div>
        <button style="margin: 1rem;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse justify-content-md-end" id="navbarsExample08">
        <ul class="navbar-nav">
            <?php echo $menu; ?>

            <script>
                $(document).ready(function() {
                    $('.navbar .nav-item').on('click', function(e) {
                        let $el = $(this).children('.dropdown-toggle');
                        let $parent = $el.offsetParent(".dropdown-menu");
                        $(this).parent("li").toggleClass('open');
                        if (!$parent.parent().hasClass('navbar-nav')) {
                            if ($parent.hasClass('show')) {
                                $parent.removeClass('show');
                                $el.next().removeClass('show');
                                $el.next().css({
                                    "top": -999,
                                    "left": -999
                                });
                            } else {
                                $parent.parent().find('.show').removeClass('show');
                                $parent.addClass('show');
                                $el.next().addClass('show');
                                $el.next().css({
                                    "top": $el[0].offsetTop,
                                    "left": $parent.outerWidth() - 4
                                });
                            }
                            //e.preventDefault();
                            e.stopPropagation();
                        }
                    });
                    $('.navbar .dropdown').on('hidden.bs.dropdown', function() {
                        $(this).find('li.dropdown').removeClass('show open');
                        $(this).find('ul.dropdown-menu').removeClass('show open');
                    });
                });
            </script>
            <li class="nav-item register">
                <a class="nav-link" href="?login">S'inscrire</a>
            </li>
        </ul>
    </div>
</nav>