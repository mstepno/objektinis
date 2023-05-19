<?php
class OrderModel {
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function addOrder($userId, $hotelId) {
        // SQL užklausa
        $sql = 'INSERT INTO orders (user_id, hotel_id) VALUES (:user_id, :hotel_id)';
        $stmt = $this->db->prepare($sql);
        
       
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':hotel_id', $hotelId);
        $stmt->execute();
    }

   
}
