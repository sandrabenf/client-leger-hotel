function submitReservation() {
    // Utiliser fetch pour envoyer les données au serveur Flask
    console.log("Réservation envoyée");
}
function submitReservation() {
    // Exemple de récupération des valeurs d'un formulaire
    var guestName = document.getElementById('guestName').value;
    var hotelId = document.getElementById('hotelId').value;
    var dateFrom = document.getElementById('dateFrom').value;
    var dateTo = document.getElementById('dateTo').value;

    // Validation basique
    if (!guestName || !hotelId || !dateFrom || !dateTo) {
        alert('Veuillez remplir tous les champs.');
        return false;
    }

    // Si tout est valide, envoyez la requête (à implémenter)
    console.log("Tout semble bon. Envoyer la requête au serveur.");
    // Ici, vous pouvez ajouter votre code pour envoyer les données au serveur
}





// Supposons que vous avez des réservations stockées dans un tableau
let reservations = [
    { id: 1, jours: 3, date: "2024-03-25", type: "Chambre standard", options: "Accès aux repas et au petit déjeuner" },
    { id: 2, jours: 5, date: "2024-03-27", type: "Suites", options: "Accès aux repas" },
    { id: 3, jours: 2, date: "2024-03-30", type: "Chambre standard", options: "Accès au petit déjeuner" }
];

// Fonction pour afficher les références de réservation
function afficherReferencesReservation() {
    let tableHTML = "";
    if (reservations.length > 0) {
        tableHTML += "<table>";
        tableHTML += "<tr><th>Numéro de Réservation</th><th>Nombre de Jours</th><th>Date de Réservation</th><th>Type d'Hébergement</th><th>Options Supplémentaires</th></tr>";
        reservations.forEach(reservation => {
            tableHTML += `<tr><td>${reservation.id}</td><td>${reservation.jours}</td><td>${reservation.date}</td><td>${reservation.type}</td><td>${reservation.options}</td></tr>`;
        });
        tableHTML += "</table>";
    } else {
        tableHTML = "<p id='no-reservation-message'>Aucune réservation n'a été faite pour le moment.</p>";
    }
    document.getElementById('reservation-table').innerHTML = tableHTML;
}

// Appel de la fonction pour afficher les références de réservation au chargement de la page
window.onload = afficherReferencesReservation;



// Fonction pour récupérer les réservations depuis le serveur
function getReservationsFromServer() {
    fetch('get_reservations.php')
    .then(response => response.json())
    .then(data => {
        reservations = data;
        afficherReferencesReservation();
    })
    .catch(error => console.error('Erreur lors de la récupération des réservations:', error));
}

// Appel de la fonction pour récupérer les réservations au chargement de la page
window.onload = getReservationsFromServer;
