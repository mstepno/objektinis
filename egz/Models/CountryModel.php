<?php
class CountryModel {
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function addCountry($name, $seasons) {
        // SQL užklausa
        $sql = 'INSERT INTO countries (name, seasons) VALUES (:name, :seasons)';
        $stmt = $this->db->prepare($sql);
        
        
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':seasons', $seasons);
        $stmt->execute();
    }

    public function getAll() {
        $sql = 'SELECT * FROM countries';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
