<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Hôtel Lumière Parisienne</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php require("includes/header.php"); ?>

    <div class="hotel-container">
        <img src="image/hotel1.jpg" alt="Photo de l'Hôtel Lumière Parisienne" class="hotel-img">
        <div class="hotel-description">

Niché au cœur du vibrant quartier de Paris, l'Hôtel Lumière Parisienne est une échappée belle où l'élégance intemporelle rencontre le luxe moderne. Cet hôtel boutique exclusif, situé à quelques pas de célèbres attractions comme le Musée du Louvre et la Cathédrale Notre-Dame, offre une expérience parisienne authentique enrichie par un service de première classe.
    

    Les chambres et suites de l'Hôtel Lumière Parisienne sont des havres de paix, alliant confort suprême et décoration raffinée. Chaque chambre est ornée d'œuvres d'art sélectionnées et dispose de commodités modernes, y compris une literie luxueuse, une technologie de pointe, et des salles de bains en marbre équipées de produits de bain haut de gamme. 
    
    
L'élément phare de l'Hôtel Lumière Parisienne est sa piscine intérieure somptueuse, baignée de lumière naturelle grâce à son plafond en verre. Entourée de confortables chaises longues, la piscine offre un sanctuaire relaxant loin de l'agitation de la ville. Le centre de bien-être propose des massages et des soins esthétiques pour revitaliser le corps et l'esprit, complétés par un sauna et un hammam pour une expérience de détente ultime.
    
    rant de l'hôtel, Le Bijou, est un joyau culinaire qui propose une cuisine fusion innovante, préparée avec des ingrédients locaux de saison. Le bar adjacent, L'Élixir, sert une sélection exquise de cocktails artisanaux et de vins fins, dans un cadre élégant et accueillant.
    
Pour garantir un séjour sans faille, l'Hôtel Lumière Parisienne offre une gamme de services personnalisés, incluant une conciergerie disponible 24h/24 pour toutes les demandes, des transferts aéroport luxueux, et des visites privées des trésors cachés de Paris. L'hôtel dispose également d'un espace de réunion moderne pour les événements d'affaires et les célébrations privées.

   L'Hôtel Lumière Parisienne est plus qu'un simple hôtel; c'est une invitation à vivre le meilleur de Paris dans un cadre somptueux et accueillant, faisant de chaque séjour une expérience inoubliable.
        </div>
    </div>

    <form action="reservation_traitement.php" method="post">
        <label for="dateReservation">Date de réservation:</label>
        <input type="date" id="dateReservation" name="dateReservation" required><br>
        
        <label for="jours">Nombre de jours:</label>
        <input type="number" id="jours" name="jours" min="1" max="30" value="1" required><br>
        
        <label>Type d'hébergement:</label><br>
        <input type="radio" id="chambre" name="hebergement" value="chambre" checked>
        <label for="chambre">Chambre standard - 60€/nuit</label><br>
        <input type="radio" id="suite" name="hebergement" value="suite">
        <label for="suite">Suite - 100€/nuit</label><br>
        
        <label>Options supplémentaires:</label><br>
        <input type="checkbox" id="repas" name="options" value="repas">
        <label for="repas">Accès aux repas et petit-déjeuner - 50€/jour</label><br>
        
        <button type="submit">Réserver</button>
    </form>
    
    <?php include 'includes/footer.php'; ?>
</body>
</html>
