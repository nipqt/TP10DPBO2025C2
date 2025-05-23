<?php
require_once 'config/Database.php';

class Schedule {
    private $conn;
    private $table = 'schedule';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $query = "SELECT 
                    s.id,
                    s.performance_time,
                    a.name AS artist_name,
                    a.bio AS artist_bio,
                    st.name AS stage_name,
                    sh.country AS show_country,
                    sh.location AS show_location,
                    sh.start_date,
                    sh.end_date
                  FROM " . $this->table . " s
                  JOIN artist a ON s.artist_id = a.id
                  JOIN stage st ON s.stage_id = st.id
                  JOIN event_show sh ON s.show_id = sh.id
                  ORDER BY artist_name";
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

    public function create($show_id, $artist_id, $stage_id, $performance_time) {
        $query = "INSERT INTO " . $this->table . " 
                  (show_id, artist_id, stage_id, performance_time) 
                  VALUES (:show_id, :artist_id, :stage_id, :performance_time)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':show_id', $show_id);
        $stmt->bindParam(':artist_id', $artist_id);
        $stmt->bindParam(':stage_id', $stage_id);
        $stmt->bindParam(':performance_time', $performance_time);
        return $stmt->execute();
    }

    public function update($id, $show_id, $artist_id, $stage_id, $performance_time) {
        $query = "UPDATE " . $this->table . " 
                  SET show_id = :show_id, artist_id = :artist_id, stage_id = :stage_id, performance_time = :performance_time 
                  WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':show_id', $show_id);
        $stmt->bindParam(':artist_id', $artist_id);
        $stmt->bindParam(':stage_id', $stage_id);
        $stmt->bindParam(':performance_time', $performance_time);
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