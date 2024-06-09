<!--
███╗░░░███╗██╗██╗░░░░░░█████╗░███╗░░██╗░█████╗░░██████╗░██████╗
████╗░████║██║██║░░░░░██╔══██╗████╗░██║██╔══██╗██╔════╝██╔════╝
██╔████╔██║██║██║░░░░░███████║██╔██╗██║██║░░██║╚█████╗░╚█████╗░
██║╚██╔╝██║██║██║░░░░░██╔══██║██║╚████║██║░░██║░╚═══██╗░╚═══██╗
██║░╚═╝░██║██║███████╗██║░░██║██║░╚███║╚█████╔╝██████╔╝██████╔╝
╚═╝░░░░░╚═╝╚═╝╚══════╝╚═╝░░╚═╝╚═╝░░╚══╝░╚════╝░╚═════╝░╚═════╝░
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Titel-->
    <title>Portfolio Milan Megens</title>
    <link rel="icon" type="image/x-icon" href="content/favicon_milan.png">

    <!--Link met CSS-->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/reviews.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!--Link met JS-->
    <script src="scripts/review.js" defer></script>
<body>
    <!--De navbar include-->
    <?php include("includes/navbar.php") ?>

    <!--Eerste deel van de startpagina-->
    <div class="eerste_deel">
        <!--Foto bovenaan-->
        <div class="main1">
            <img class="pf1" src="content/pf1.png" alt="">
        </div>

        <!--Hallo daar text ballon-->
        <div class="main2">
            <p>Hallo daar! 🤗</p>
        </div>

        <!--Tekst op hoofdpagina-->
        <div class="main3">
            <div>
                <h1>Milan Megens verwelkomt je!</h1>
                <p>
                    Ik ben een gepassioneerde en ervaren website-ontwikkelaar die zich toelegt op het creëren
                    van visueel verbluffende en zeer functionele websites. Ontdek mijn portfolio en zie de kracht
                    van effectieve ontwikkeling in actie
                </p>
            </div>
        </div>

        <!--Bekijk portfolio linkje ding-->
        <div class="main4">
            <a href="portfolio.php"><p>Bekijk Portfolio -></p></a>
        </div>

        <!--Blokjes met info-->
        <div class="main5">
            <h1>5<span class="paars">+</span></h1>
            <p>Gemaakte projecten</p>
        </div>

        <div class="main6">
            <h1>10<span class="paars">+</span></h1>
            <p>Maanden ervaring</p>
        </div>
    </div>

    <!--Vaardigheden-->
    <div class="vaardigheden">
        <h1>Vaardigheden</h1>
        <!--Blok 1-->
        <div class="blok">
            <img src="content/frontend_logo.png" alt="">
            <h1>Frontend development</h1>
            <p>
                HTML/CSS: Vaardigheid in het maken van HTML en het stylen met CSS om responsieve, aantrekkelijke
                webpagina's te maken.
            </p>
        </div>

        <!--Blok 2-->
        <div class="blok">
            <img src="content/backend_logo.png" alt="">
            <h1>Backend Development</h1>
            <p>
                Ontwerpen en implementeren van robuuste backend-logica met behulp van talen als PHP en Python
            </p>
        </div>

        <!--Blok 3-->
        <div class="blok">
            <img src="content/responsive_logo.png" alt="">
            <h1>Responsive Web Development</h1>
            <p>
                Het hanteren van een mobile-first-aanpak waarbij het ontwerpproces begint met de
                mobiele versie en het ontwerp voor grotere schermen geleidelijk verbetert.
            </p>
        </div>

        <!--Blok 4-->
        <div class="blok">
            <img src="content/mobvriend_logo.png" alt="">
            <h1>Mobielvriendelijke optimalisatie</h1>
            <p>
                de praktijk van het ontwerpen en ontwikkelen van websites om ervoor te zorgen dat ze goed
                functioneren op mobiele apparaten, zoals smartphones en tablets. Gezien het toenemende gebruik
                van mobiele apparaten.
            </p>
        </div>

        <!--Blok 5-->
        <div class="blok">
            <img src="content/teamplayer_logo.png" alt="">
            <h1>Teamplayer</h1>
            <p>
                Door schoolprojecten en mijn deelname aan scouting
                heb ik geleerd om effectief samen te werken met teamgenoten.
            </p>
        </div>
    </div>
   
    <!--Reviews stuk-->
    <div class="reviews">
        <h1>Wat vinden mensen van mij</h1>
        <div>
            <!--Review.php include-->
            <?php include("includes/reviews.php") ?>
        </div>
    </div>

    <!--De footer include-->
    <?php include("includes/footer.php") ?>
</body>
</html>