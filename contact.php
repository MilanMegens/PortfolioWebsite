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
    <title>Contact</title>
    <link rel="icon" type="image/x-icon" href="content/favicon_milan.png">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">
</head>
<body>
    <?php include("includes/navbar.php") ?>

    <div class="contact">
        <img class="contact_logo" src="content/contact_logo.png" alt="">
        <h1>Contact</h1>
        <p>Voel je vrij om mij te contacteren</p>
    </div>

    <div class="conta1">
        <!--Contact formulier-->
        <div class="form-container">
            <?php
            $buttonText = "Verstuur";
            if (isset($_GET['status'])) {
                if ($_GET['status'] == 'success') {
                    $buttonText = "Verzonden";
                } elseif ($_GET['status'] == 'error') {
                    echo "<p style='color: red;'>Er is een fout opgetreden bij het verzenden van het bericht. Probeer het later opnieuw.</p>";
                } elseif ($_GET['status'] == 'invalid') {
                    echo "<p style='color: red;'>Ongeldige aanvraagmethode.</p>";
                }
            }
            ?>
            <form action="includes/send_mail.php" method="POST">
                <label for="first_name"></label>
                <input type="text" id="first_name" name="first_name" placeholder="Uw voornaam..." required>
                <label for="last_name"></label>
                <input type="text" id="last_name" name="last_name" placeholder="Uw achternaam..." required>
                <label for="email"></label>
                <input type="email" id="email" name="email" placeholder="Uw emailadres..." required>
                <label for="phone"></label>
                <input type="text" id="phone" name="phone" placeholder="Uw telefoonnummer... (optioneel)">
                <label for="message"></label>
                <textarea id="message" name="message" rows="4" placeholder="Uw bericht..." required></textarea>
                <button type="submit"><?php echo $buttonText; ?></button>
            </form>
        </div>

        <div class="conta2">
            <div class="mail">
                <div class="tekst">
                    <p>Je kan me hier op mailen</p>
                    <p><strong><a href="mailto:milanoss2007@gmail.com">milanoss2007@gmail.com</a></strong></p>
                </div>
                <div class="pijl-knop">
                    <p><a href="mailto:milanoss2007@gmail.com">-></p></a>
                </div>
            </div>

            <div class="loca">
                <div class="tekst">
                    <p>Locatie</p>
                    <p><strong>Noord-Brabant, Nederland</strong></p>
                </div>    
                <div class="pijl-knop">
                    <p><a href="https://www.google.nl/maps/place/Noord-Brabant/" target="_blank">-></p></a>
                </div>
            </div>
        </div>
    </div>

    <?php include("includes/footer.php") ?>
</body>
</html>
