<?php
require_once 'config/Database.php';

class EventShow {
    private $conn;
    private $table = 'event_show';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($country, $location, $start_date, $end_date) {
        $query = "INSERT INTO " . $this->table . " (country, location, start_date, end_date) VALUES 
        (:country, :location, :start_date, :end_date)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':start_date', $start_date);
        $stmt->bindParam(':end_date', $end_date);
        return $stmt->execute();
    }

    public function update($id, $country, $location, $start_date, $end_date) {
        $query = "UPDATE " . $this->table . " SET country = :country, location = :location, start_date = :start_date, end_date = :end_date WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':start_date', $start_date);
        $stmt->bindParam(':end_date', $end_date);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>