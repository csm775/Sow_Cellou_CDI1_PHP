<?php 
require 'vendor/autoload.php'; // Charger les dépendances
use GuzzleHttp\Client;

// Créer un client HTTP
$client = new Client();

try {
    // Envoyer une requête GET vers l'API météo
    $response = $client->request('GET', 'https://api.openweathermap.org/data/2.5/weather', [
        'query' => [
            'q' => 'Nice', // Ville
            'appid' => '94e836913aa8c735af2aba9e24b7e79e', // Clé API
            'units' => 'metric', // Unités en Celsius
            'lang' => 'fr' // Langue en français
        ]
    ]);

    // Décoder la réponse JSON
    $data = json_decode($response->getBody(), true);

    // Afficher les informations météo
    echo "Météo à " . $data['name'] . " : " . $data['weather'][0]['description'] . "<br>";
    echo "Température : " . $data['main']['temp'] . "°C<br>";
    echo "Humidité : " . $data['main']['humidity'] . "%<br>";

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
?>