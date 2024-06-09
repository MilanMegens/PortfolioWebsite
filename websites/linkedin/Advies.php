<!DOCTYPE html>
<html lang="en">
<head>
    <!--
     Gemaakt door: Milan Megens en Stephan van Geffen
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advies</title>
    <link rel="stylesheet" href="CSS/adviespagina.css">
    <?php
    // Variabelen en Tijdzone Setter
    date_default_timezone_set('Europe/Amsterdam');

    //Informatie gebruiker
    $opleiding = $_POST['Opleiding'];
    $niveau = $_POST['OpleidingNiveau'];
    $regio = $_POST['Regio'];

    //Variabelen vragen
    $html = $_POST['HTML'];
    $css = $_POST['CSS'];
    $js = $_POST['JS'];
    $php = $_POST['PHP'];
    $csharp = $_POST['C'];
    $cplus = $_POST['Cplus'];
    $python = $_POST['Python'];
    $java = $_POST['Java'];
    $wordpress = $_POST['WordPress'];
    $swift = $_POST['Swift'];
    $ruby = $_POST['Ruby'];
    $sql = $_POST['SQL'];
    ?>
</head>
<body>
<?php
include('navbar.php');
?>
<!-- Cookies en Leeftijd checker -->
<div class="main">
    <?php
    $count = isset($_COOKIE['form_submission_count']) ? $_COOKIE['form_submission_count'] : 0;
    $count++;

    //Cookies verlopen na 30 dagen
    setcookie('form_submission_count', $count, time() + (86400 * 30));

    if (isset($_POST['birthday'])) {
        $birthday = $_POST['birthday'];

        $age = date_diff(date_create($birthday), date_create('today'))->y;
    }
    ?>
    <div id="br">
        <?php
        echo "<h1> Persoons gegevens: </h1> <br> <br>";

        echo "<h3> Je opgegeven Leeftijd is </h3>  $age jaar <br> <br>";
        echo "<h3> Je opgegeven Opleiding is </h3> <br> $opleiding <br> <br>";
        echo "<h3> Opleiding niveau is </h3> <br> $niveau  <br> <br>";
        echo "<h3> Regio: </h3> <br> $regio  <br>";
        ?>
        <div id="top">
            <?php
            echo "Je hebt dit formulier $count keer ingevuld <br>";
            echo "Formulier ingevuld op: " . date("H:i --  d-m-Y") . "<br>" . "<br>";
            ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="thema">
        <?php

        //Frontend Developer
        if ($wordpress === "ja" || $swift === "ja" || $ruby === "ja"
            || $html === "ja" && $css === "ja" && $js === "ja"
        ) {
            echo '<p> Front-end Developer  </p> <img src="images/checkmark.png" width="30px" height="fit-content"> <br> <a href="https://www.linkedin.com/jobs/search/?currentJobId=3852611371&geoId=102890719&keywords=Front-end%20ontwikkeling&location=Nederland&origin=JOB_SEARCH_PAGE_KEYWORD_AUTOCOMPLETE&refresh=true" target="_blank"> Front-End Vacatures</a>';
        } else {
            echo '<p> Front-end Developer </p> <img src="images/close.png" width="20px" height="fit-content"> <br> <a href="https://www.linkedin.com/jobs/search/?currentJobId=3852611371&geoId=102890719&keywords=Front-end%20ontwikkeling&location=Nederland&origin=JOB_SEARCH_PAGE_KEYWORD_AUTOCOMPLETE&refresh=true" target="_blank"> Front-End Vacatures</a>';
        }
        ?>
    </div>
    <div class="thema">
        <?php
        //Backend Developer
        if ($php === "ja" || $sql === "ja" || $python === "ja" || $java === "ja"
            || $cplus === "ja" || $csharp === "ja"
        ) {
            echo '<p> Back-end Developer </p> <img src="images/checkmark.png" width="30px" height="fit-content"> <br> <a href="https://www.linkedin.com/jobs/search/?currentJobId=3806438661&geoId=102890719&keywords=Back%20End-ontwikkelaar&location=Nederland&origin=JOB_SEARCH_PAGE_KEYWORD_AUTOCOMPLETE&refresh=true" target="_blank"> Back-End Vactures</a>';
        } else {
            echo '<p> Back-end Developer </p> <img src="images/close.png" width="20px" height="fit-content"> <br> <a href="https://www.linkedin.com/jobs/search/?currentJobId=3806438661&geoId=102890719&keywords=Back%20End-ontwikkelaar&location=Nederland&origin=JOB_SEARCH_PAGE_KEYWORD_AUTOCOMPLETE&refresh=true" target="_blank"> Back-End Vactures</a>';
        }
        ?>
    </div>
    <div class="thema">
        <?php
        //Fullstack Developer
        if ($html === "ja" && $css === "ja" && $js === "ja" && $php === "ja" ||
            $html === "ja" && $css === "ja" && $js === "ja" && $sql === "ja" ||
            $html === "ja" && $css === "ja" && $js === "ja" && $python === "ja" ||
            $html === "ja" && $css === "ja" && $js === "ja" && $java === "ja" ||
            $html === "ja" && $css === "ja" && $js === "ja" && $cplus === "ja" ||
            $html === "ja" && $css === "ja" && $js === "ja" && $csharp === "ja" ||
            $wordpress === "ja" && $php === "ja" ||
            $wordpress === "ja" && $sql === "ja" ||
            $wordpress === "ja" && $python === "ja" ||
            $wordpress === "ja" && $java === "ja" ||
            $wordpress === "ja" && $cplus === "ja" ||
            $wordpress === "ja" && $csharp === "ja" ||
            $swift === "ja" && $php === "ja" ||
            $swift === "ja" && $sql === "ja" ||
            $swift === "ja" && $python === "ja" ||
            $swift === "ja" && $java === "ja" ||
            $swift === "ja" && $cplus === "ja" ||
            $swift === "ja" && $csharp === "ja" ||
            $ruby === "ja" && $php === "ja" ||
            $ruby === "ja" && $sql === "ja" ||
            $ruby === "ja" && $python === "ja" ||
            $ruby === "ja" && $java === "ja" ||
            $ruby === "ja" && $cplus === "ja" ||
            $ruby === "ja" && $csharp === "ja"
        ) {
            echo '<p> Fullstack Developer </p> <img src="images/checkmark.png" width="30px" height="fit-content"> <br> <a href="https://www.linkedin.com/jobs/search/?currentJobId=1464693449&geoId=102890719&keywords=Full%20stack-ontwikkelaar&location=Nederland&origin=JOB_SEARCH_PAGE_KEYWORD_AUTOCOMPLETE&refresh=true" target="_blank"> Full Stack Vactures</a>';
        } else {
            echo '<p> Fullstack Developer </p> <img src="images/close.png" width="20px" height="fit-content"> <br> <a href="https://www.linkedin.com/jobs/search/?currentJobId=1464693449&geoId=102890719&keywords=Full%20stack-ontwikkelaar&location=Nederland&origin=JOB_SEARCH_PAGE_KEYWORD_AUTOCOMPLETE&refresh=true" target="_blank"> Full Stack Vactures</a>';
        }

        ?>
    </div>
    <div class="thema">
        <?php
        //Game Developer
        if ($python === "Ja" || $java === "ja" || $cplus === "ja" || $csharp === "ja"
        ) {
            echo '<p> Game Developer </p> <img src="images/checkmark.png" width="30px" height="fit-content"> <br> <a href="https://www.linkedin.com/jobs/search/?currentJobId=3784397224&geoId=102890719&keywords=Game-ontwikkeling&location=Nederland&origin=JOB_SEARCH_PAGE_KEYWORD_AUTOCOMPLETE&refresh=true" target="_blank"> Game Developer Vacatures </a>';
        } else {
            echo '<p> Game Developer </p> <img src="images/close.png" width="20px" height="fit-content"> <br> <a href="https://www.linkedin.com/jobs/search/?currentJobId=3784397224&geoId=102890719&keywords=Game-ontwikkeling&location=Nederland&origin=JOB_SEARCH_PAGE_KEYWORD_AUTOCOMPLETE&refresh=true" target="_blank"> Game Developer Vacatures </a>';
        }
        ?>
    </div>
    <div class="thema" id="box">
        <?php
        //CyberSecurity
        if ($python === "ja" || $csharp === "ja" || $cplus === "ja" || $js === "ja"
            || $java === "ja" || $sql === "ja" || $php === "ja" || $html === "ja"
        ) {
            echo '<p> CyberSecurity </p> <img src="images/checkmark.png" width="30px" height="fit-content"> <br> <a href="https://www.linkedin.com/jobs/search/?currentJobId=3849452658&geoId=102890719&keywords=Cyberbeveiliging&location=Nederland&origin=JOB_SEARCH_PAGE_KEYWORD_AUTOCOMPLETE&refresh=true" target="_blank"> CyberSecurity </a>';
        } else {
            echo '<p> CyberSecurity </p> <img src="images/close.png" width="20px" height="fit-content"> <br> <a href="https://www.linkedin.com/jobs/search/?currentJobId=3849452658&geoId=102890719&keywords=Cyberbeveiliging&location=Nederland&origin=JOB_SEARCH_PAGE_KEYWORD_AUTOCOMPLETE&refresh=true" target="_blank"> CyberSecurity </a>';
        }
        ?>
    </div>
</div>
</body>
</html>