<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Réservation d'Hôtels</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php require("includes/header.php"); ?>
    <h1>Rencontré un problème avec votre réservation d'hôtel ? Nous sommes là pour vous aider !</h1>
    <p>Chez RESERVATIO, nous nous engageons à vous fournir une expérience exceptionnelle. Si vous rencontrez le moindre problème avec votre réservation ou si quelque chose ne s'est pas passé comme prévu, nous vous encourageons à ne pas hésiter à nous contacter.

    Notre équipe de service client est disponible 24/7 pour vous assister et trouver une solution rapidement. Que ce soit une question sur votre réservation, une modification de dernière minute ou tout autre souci, nous sommes là pour vous aider.</p>
    <h1>Voici comment nous contacter :</h1>
    <p>Formulaire de contact : Remplissez notre formulaire de contact en ligne sur notre site, et notre équipe vous contactera pour vous apporter une assistance personnalisée.
    <br> Votre satisfaction est notre priorité. N'hésitez pas à nous contacter pour toute question ou problème relatif à votre réservation. Nous sommes impatients de rendre votre séjour aussi agréable et sans souci que possible.</p>
    <main>
        <section id="contact-form">
            <form action="includes/send_message.php" method="POST">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
                
                <label for="subject">Sujet :</label>
                <input type="text" id="subject" name="subject" required>
                
                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit" name="envoyer">Envoyer</button>
            </form>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    
    <script src="js/script.js"></script>
</body>
</html>




<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assigner les données POST à des variables
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
}
    // Ici, vous pouvez ajouter le code pour envoyer un email
// demander a florentin 