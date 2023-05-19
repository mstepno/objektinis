<?php
$controller = new CountryController(new CountryModel($db));
$countries = $controller->getAll(); 

foreach($countries as $country) {
    echo "<h2>" . htmlspecialchars($country['name']) . "</h2>";
    echo "<p>Sezonai: " . htmlspecialchars($country['seasons']) . "</p>";
}
