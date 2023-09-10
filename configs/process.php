<?php

session_start();
include_once('database.php');

class DBManager {
    public function __construct($database) {
        $this->db = $database;
    }

    public function add($name, $phone, $observation) {
        $query = "INSERT INTO contacts (name, phone, observation) VALUES (:name, :phone, :observation)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':observation', $observation, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function remove($id) {
        $query = "DELETE FROM contacts WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function update($id, $name, $phone, $observation) {
        $query = "UPDATE contacts SET name = :name, phone = :phone, observation = :observation WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':observation', $observation, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function get_all() {
        $query = "SELECT * FROM contacts";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function get($id) {
        $query = "SELECT * FROM contacts WHERE id= :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

$DATABASE = new DBManager($conn);