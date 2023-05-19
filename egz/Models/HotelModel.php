<?php
class HotelModel {
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function addHotel($countryId, $name, $price, $image, $duration) {
        // SQL užklausa
        $sql = 'INSERT INTO hotels (country_id, name, price, image, duration) VALUES (:country_id, :name, :price, :image, :duration)';
        $stmt = $this->db->prepare($sql);
        
        
        $stmt->bindParam(':country_id', $countryId);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':duration', $duration);
        $stmt->execute();
    }

    
}
