<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <title></title>
    </head>
    <body>
        <?php
        $fichier = 'source.xml';
        $xml = simplexml_load_file($fichier);
        var_dump($xml);
        foreach ($xml->page as $pages) {
            echo 'Menu :' . utf8_decode($pages->menu) . '<br/>';
            echo 'Title :' . $pages->title . '<br/>';
            foreach ($pages->attributes() as $attribute => $valeur) {
                echo $attribute . ' = ' . $valeur;
            }
            echo 'Content : ' . $pages->content . '<br/>';
        }

        //Attribute;
        echo $xml->page->attributes();
        ?>
        <footer class="page-footer font-small stylish-color-dark pt-4 fcolor">
            <div class="container text-center text-md-left">
                <div class="row">
                    <div class="col-lg-4 col-md-4 mx-auto">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">A propos</h5>
                        <p>Travaux de rénovation, Ocordo Travaux est une agence de travaux spécialisée dans l’externalisation du service commercial d'artisans du bâtiment et d’entreprises locales du bâtiment spécialisées dans les travaux de rénovation et de construction d’extensions. Nous avons l'expérience de plus de 300 projets de rénovation sur Nantes et plus de 3.000 en France.</p>
                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-lg-3 col-md-2 mx-auto tcolor">
                        <!--Maps Google-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10840.441212216989!2d-1.562078!3d47.214424!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10a23dc1d980bca7!2sOcordo+Travaux+Nantes!5e0!3m2!1sfr!2sfr!4v1434122059096" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <!--Séparation-->
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-lg-3 col-md-2 mx-auto ">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Menu</h5>
                        <ul class="list-unstyled">
                            <?php
                             foreach ($xml->page as $pages){ ?>
                            <li><a href="<?= $pages->attributes(); ?>"><?= $pages->menu; ?></a></li>
                             <?php } ?>
                        </ul>
                    </div>
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
            <p class="ptext text-center">Made with &hearts; by team 14</p>
                    </div>
        </footer>
    </body>
</html>
