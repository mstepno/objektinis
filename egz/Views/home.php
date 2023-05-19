<?php
$controller = new HotelController(new HotelModel($db));
$hotels = $controller->getAll(); 

foreach($hotels as $hotel) {
    echo "<h2>" . htmlspecialchars($hotel['name']) . "</h2>";
    echo "<p>Kaina: " . htmlspecialchars($hotel['price']) . " €</p>";
    echo "<p>Šalis: " . htmlspecialchars($hotel['country_id']) . "</p>";
    echo "<p>Kelionės trukmė: " . htmlspecialchars($hotel['duration']) . " dienos</p>";
    

session_start(); 


if (isset($_SESSION['user'])) {
    echo "Sveiki, " . htmlspecialchars($_SESSION['user']['username']) . "!";
} else {
    echo "Neprisijungęs.";
}

}
