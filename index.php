<?php
if (isset($_GET['page'])) {
    $page = intval(htmlspecialchars($_GET['page']));
} else {
    $page = 0;
}
$fichier = 'source.xml';
$xml = simplexml_load_file($fichier);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <!-- Material Design Bootsrap -->
        <link rel="stylesheet" href="assets/css/mdb.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Ocordo</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark ocordo-color fixed-top mx-auto">
                <a class="navbar-brand mr-auto" href="page0.html"><img src="assets/img/logo.png" alt="logo"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="basicExampleNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <?php foreach ($xml->page as $pages) { ?>
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="page<?= $pages->attributes() -1; ?>.html"><?= $pages->menu; ?>
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
        </header>
        <div id="picture1"></div>
        <div class="container content-page">
            <?= $xml->page[$page]->content; ?>
        </div>
        <footer class="page-footer font-small mt-4 fcolor">
            <div class="container-fluid text-center text-md-left">
                <div class="row">
                    <div class="col-lg-4 col-md-3 mx-auto">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-center">A propos</h5>
                        <p class="text-justify">Travaux de rénovation, Ocordo Travaux est une agence de travaux spécialisée dans l’externalisation du service commercial d'artisans du bâtiment et d’entreprises locales du bâtiment spécialisées dans les travaux de rénovation et de construction d’extensions. Nous avons l'expérience de plus de 300 projets de rénovation sur Nantes et plus de 3.000 en France.</p>
                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-lg-4 col-md-6 mx-auto tcolor text-center">
                        <!--Maps Google-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10840.441212216989!2d-1.562078!3d47.214424!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10a23dc1d980bca7!2sOcordo+Travaux+Nantes!5e0!3m2!1sfr!2sfr!4v1434122059096" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <!--Séparation-->
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-lg-4 col-md-3 mx-auto text-center">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Menu</h5>
                        <ul class="list-unstyled">
                            <?php foreach ($xml->page as $pages) { ?>
                                <li>
                                    <a href="page<?= $pages->attributes() -1; ?>.html"><?= $pages->menu; ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <!--Vignettes réseaux sociaux-->
                    <div class="col-12">
                        <ul class="list-unstyled list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#">
                                    <img src="assets/img/facebook.png">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <img src="assets/img/twitter.png">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <img src="assets/img/discord.png">
                                </a>
                            </li>
                        </ul>
                        <p class="ptext text-center">Made by Julien, Luc, Manu & Fabien</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- jQuery -->
        <script src="./assets/js/jquery-3.3.1.min.js"></script>
        <!-- Boostrap tooltops -->
        <script src="./assets/js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script src="./assets/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script src="./assets/js/mdb.min.js"></script>
        <!-- Me JQuery -->
        <script src="./assets/js/script.js"></script>
    </body>
</html>