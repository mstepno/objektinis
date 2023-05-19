<?php

$controller = new HotelController(new HotelModel($db));
$hotelId = $_GET['id']; 
$hotel = $controller->getById($hotelId);

if (!$hotel) {
    echo "Viešbutis nerastas!";
    return;
}


echo "<h1>" . htmlspecialchars($hotel['name']) . "</h1>";
echo "<img src='" . htmlspecialchars($hotel['image']) . "' alt='Viešbučio nuotrauka'>";
echo "<p>Šalis: " . htmlspecialchars($hotel['country_id']) . "</p>";
echo "<p>Kaina: " . htmlspecialchars($hotel['price']) . " €</p>";
echo "<p>Kelionės trukmė: " . htmlspecialchars($hotel['duration']) . " dienos</p>";

echo "<form action='order.php' method='post'>";
echo "<input type='hidden' name='hotel_id' value='" . htmlspecialchars($hotel['id']) . "'>";
echo "<input type='submit' value='Užsisakyti'>";
echo "</form>";
