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
    <title>Over mij</title>
    <link rel="icon" type="image/x-icon" href="content/favicon_milan.png">

    <!--Link met CSS-->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/timeline.css">
<body>
    <!--De navbar include-->
    <?php include("includes/navbar.php") ?>

    <!--Main over mij-->
    <div class="overmij1">
        <img class="pf2" src="content/pf2.png" alt="">
    </div>

    <!--Tekst op over mij pagina-->
    <div class="overmij2">
        <div>
            <h1>Ik ben Milan Megens</h1>
            <p>
                Ik ben een 17-jarige student uit Oss. Mijn wereld draait om mijn passies: fotografie, scouting
                en software development. <br> <br>
                     
                Fotografie is mijn manier om de wereld om me heen vast te leggen en mijn creatieve kant te uiten.
                Of het nu gaat om adembenemende landschappen of dieren. <br> <br>
                    
                Naast mijn liefde voor fotografie ben ik een actief lid van de scouting Titus Brandsma.
                Het buitenleven trekt me aan en ik geniet ervan om nieuwe vaardigheden te leren,
                teamwerk te bevorderen en avonturen aan te gaan die me uitdagen en inspireren. <br> <br>
                    
                Ik volg momenteel een opleiding Software Development aan het Koning Willem 1 College.
                Mijn interesse in technologie en mijn verlangen om de achterliggende mechanismen te begrijpen,
                hebben me naar dit boeiende vakgebied geleid. Buiten mijn lessen ben ik vaak te vinden achter mijn computer,
                waar ik mijn programmeervaardigheden verder ontwikkel en nieuwe projecten onderneem. <br> <br>
                    
                Bedankt voor het bezoeken van mijn pagina! Als je meer wilt weten of gewoon een praatje wil maken,
                aarzel dan niet om contact met me op te nemen. Ik kijk ernaar uit om van je te horen!
            </p>
        </div>
    </div>

    <!--projecten blokjes ofzo-->
    <div class="overmij3">
        <div class="overmij4">
            <h1>1<span class="paars">+</span></h1>
            <p>Gemaakte projecten</p>
        </div>

        <hr class="lijntje2">

        <div class="overmij5">
            <h1>10<span class="paars">+</span></h1>
            <p>Maanden ervaring</p>
        </div>
    </div>

    <!--Timeline-->
    <div class="tijdlijn">
        <h1>Programmeer talen</h1>
        <p>Dit zijn de programmeer talen die ik beheers</p>
        <?php include("includes/timeline.php") ?>
    </div>
    


    <!--De footer include-->
    <?php include("includes/footer.php") ?>
</body>
</html>