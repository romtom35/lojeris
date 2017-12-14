
<?php

//$chemin = "property-01.jpg";
//$prix = 245000;
//$emplacement = "Gare Sud";
//$date = "12/06/2017";
//$type = "Appartement";
//$superficie = 320;
//$nb_chambres = 2;

$liste_logement[0]= [
    "emplacement" => "Gare sud",
    "prix" => 125000,
    "chemin"=> "property-01.jpg",
    "date"=> new DateTime("2017-06-12"),
    "type"=>"Appartement",
    "superficie"=> 320,
    "nb_chambres"=> 2
];
$liste_logement[1]= [
    "emplacement" => "Bréquigny",
    "prix" => 220000,
    "chemin"=> "property-02.jpg",
    "date"=> new DateTime("2017-08-10"),
    "type"=>"Maison",
    "superficie"=> 320,
    "nb_chambres"=> 3
];
$liste_logement[2]= [
    "emplacement" => "Tabor",
    "prix" => 320000,
    "chemin"=> "property-03.jpg",
    "date"=> new DateTime("2017-08-22"),
    "type"=>"Maison",
    "superficie"=> 320,
    "nb_chambres"=> 2
];$liste_logement[3]= [
    "emplacement" => "Gare Sud",
    "prix" => 182000,
    "chemin"=> "property-04.jpg",
    "date"=> new DateTime("2017-04-10"),
    "type"=>"Appartement",
    "superficie"=> 80,
    "nb_chambres"=> 2
];$liste_logement[4]= [
    "emplacement" => "Cesson-Sévigné",
    "prix" => 420000,
    "chemin"=> "property-05.jpg",
    "date"=> new DateTime("2017-05-14"),
    "type"=>"Maison",
    "superficie"=> 320,
    "nb_chambres"=> 4
];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Lojeris</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="site-header">
        <div class="cta-header">
            <div class="container">
                <ul class="cta-contact inline-list">
                    <li>Téléphone : <a href="tel:0123456789">0123456789</a></li>
                    <li>Email : <a href="mailto:contact@lojeris.fr">contact@lojeris.fr</a></li>
                </ul>
                <div class="cta-social">
                    <ul class="inline-list">
                        <li>
                            <a href="http://www.facebook.com">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.twitter.com">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container main-header">
            <a href="index.html" class="logo">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-home fa-stack-1x fa-inverse"></i>
                </span>
            </a>
            <nav class="main-nav">
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Notre Agence</a></li>
                    <li><a href="#">Biens Immobiliers</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>

        <header class="home-banner">
            <h1>Bienvenue chez <strong>Lojeris</strong></h1>
            <p>Votre partenaire de confiance en immobilier</p>
        </header>

        <section class="container">
            <h2>Nos dernières offres</h2>
            <div class="properties">
                <?php foreach ($liste_logement as $logement) : ?>
                <article class="property">
                    <a href="#">
                        <img src="images/<?php echo $logement["chemin"] ?>" alt=<?php echo $logement["emplacement"] ?>>
                        <footer class="overlay">
                            <div class="info">
                                <div class="tag <?php echo ($logement["prix"] < 250000) ? "reduc" : "";?>"><?php echo $logement["prix"] ?> €</div>
                                <h3><?php echo $logement["emplacement"] ?></h3>
                            </div>
                            <div class="more-info">
                                <div class="property-info">
                                    <i class="fa fa-calendar"></i>
                                    <?php echo $logement["date"]->format("d/m/Y") ?>
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-tag"></i>
                                    <?php echo $logement["type"] ?>
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-expand"></i>
                                    <?php echo $logement["superficie"] ?>m2
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-bed"></i>
                                    <?php echo $logement["nb_chambres"] ?>
                                </div>
                            </div>
                        </footer>
                    </a>
                </article>
                <?php endforeach; ?>
                   
            </div>
        </section>

    </main>

    <footer class="site-footer">
        <div class="container">
            Copyright © 2013 Lojeris
        </div>
    </footer>

</body>
</html>