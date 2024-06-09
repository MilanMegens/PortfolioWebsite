<!DOCTYPE html>
<html lang="en">
<head>
    <!--
     Gemaakt door : Mani Norouzian, Milan Megens en Stephan van Geffen
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vragenlijst</title>
    <link rel="stylesheet" href="CSS/Stylep1.css">
</head>
<body>

<?php
    include('navbar.php');
?>
<!-- Formulier -->
<form action="Advies.php" method="post">
    <table>
        <div class="main">
            <div class="m" id="m">
                <p> Leeftijd: </p>
                <input type="date" id="birthday" name="birthday" required="required"><br><br>
            </div>
            <div class="m">
                <p> Opleiding: </p>
                <select name="Opleiding" required="required">
                    <option value="">Selecteer je Opleiding</option>
                    <option value="Geen">Geen Opleiding</option>
                    <option value="Medewerker ICT Support"> Medewerker ICT Support</option>
                    <option value="Expert IT Systems and Devices"> Expert IT Systems and Devices</option>
                    <option value="Software Developer"> Software Developer</option>
                    <option value="All round medewerker IT systems and devices"> All round medewerker IT systems and devices</option>
                </select>
            </div>
            <div class="m">
                <p> Opleiding Niveau: </p>
                <select name="OpleidingNiveau" required="required">
                    <option value="">Selecteer een Opleiding Niveau</option>
                    <option value="Geen">Geen Opleiding</option>
                    <option value="MBO 2"> MBO 2</option>
                    <option value="MBO 3"> MBO 3</option>
                    <option value="MBO 4"> MBO 4</option>
                    <option value="HBO"> HBO</option>
                    <option value="WO"> WO</option>
                    <option value="PHD"> PHD</option>
                </select>
            </div>
            <div class="m">
                <p> Regio meldingen: </p>
                <select name="Regio" required="required">
                    <option value="">Selecteer een regio</option>
                    <option value="Noord-Holland">Noord-Holland</option>
                    <option value="Zuid-Holland">Zuid-Holland</option>
                    <option value="Utrecht">Utrecht</option>
                    <option value="Flevoland">Flevoland</option>
                    <option value="Gelderland">Gelderland</option>
                    <option value="Noord-Brabant">Noord-Brabant</option>
                    <option value="Limburg">Limburg</option>
                    <option value="Zeeland">Zeeland</option>
                    <option value="Overijssel">Overijssel</option>
                    <option value="Drenthe">Drenthe</option>
                    <option value="Groningen">Groningen</option>
                    <option value="Friesland">Friesland</option>
                </select>
            </div>
        </div>
        <div class="container">
            <div class="thema" id="m">
                <p>Ben je bekend met HTML?</p>
                <label>
                    <input type="radio" name="HTML" value="ja" required/> Ja
                    <input type="radio" name="HTML" value="nee" required/> Nee
                </label>
            </div>

            <div class="thema" id="m">
                <p>Ben je bekend met CSS?</p>
                <label>
                    <input type="radio" name="CSS" value="ja" required/> Ja
                    <input type="radio" name="CSS" value="nee" required/> Nee
                </label>
            </div>

            <div class="thema" id="m">
                <p>Ben je bekend met JS?</p>
                <label>
                    <input type="radio" name="JS" value="ja" required/> Ja
                    <input type="radio" name="JS" value="nee" required/> Nee
                </label>
            </div>

            <div class="thema" id="m">
                <p>Ben je bekend met PHP?</p>
                <label>
                    <input type="radio" name="PHP" value="ja" required/> Ja
                    <input type="radio" name="PHP" value="nee" required/> Nee
                </label>
            </div>

            <div class="thema" id="m">
                <p>Ben je bekend met C#?</p>
                <label>
                    <input type="radio" name="C" value="ja" required/> Ja
                    <input type="radio" name="C" value="nee" required/> Nee
                </label>
            </div>

            <div class="thema" id="m">
                <p>Ben je bekend met C++?</p>
                <label>
                    <input type="radio" name="Cplus" value="ja" required/> Ja
                    <input type="radio" name="Cplus" value="nee" required/> Nee
                </label>
            </div>

            <div class="thema">
                <p>Ben je bekend met Python?</p>
                <label>
                    <input type="radio" name="Python" value="ja" required/> Ja
                    <input type="radio" name="Python" value="nee" required/> Nee
                </label>
            </div>

            <div class="thema" id="m">
                <p>Ben je bekend met Java?</p>
                <label>
                    <input type="radio" name="Java" value="ja" required/> Ja
                    <input type="radio" name="Java" value="nee" required/> Nee
                </label>
            </div>

            <div class="thema" id="m">
                <p>Ben je bekend met WP?</p>
                <label>
                    <input type="radio" name="WordPress" value="ja" required/> Ja
                    <input type="radio" name="WordPress" value="nee" required/> Nee
                </label>
            </div>

            <div class="thema" id="m">
                <p>Ben je bekend met Swift?</p>
                <label>
                    <input type="radio" name="Swift" value="ja" required/> Ja
                    <input type="radio" name="Swift" value="nee" required/> Nee
                </label>
            </div>

            <div class="thema">
                <p>Ben je bekend met Ruby?</p>
                <label>
                    <input type="radio" name="Ruby" value="ja" required/> Ja
                    <input type="radio" name="Ruby" value="nee" required/> Nee
                </label>
            </div>
            <div class="thema" id="m">
                <p>Ben je bekend met SQL?</p>
                <label>
                    <input type="radio" name="SQL" value="ja" required/> Ja
                    <input type="radio" name="SQL" value="nee" required/> Nee
                </label>
            </div>
        </div>
        <div class="verzend">
            <input id="verzend" type="submit" value="Verzenden">
        </div>
    </table>
</form>
</body>
</html>
