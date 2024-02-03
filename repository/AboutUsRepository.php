<?php
include_once 'database/DatabaseConnection.php';
include_once 'models/about.php'; // 

class AboutUsRepository {
    private $connection;

    function __construct() {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    public function insertAboutUs($aboutUs) {
        $conn = $this->connection;

        $id = $aboutUs->getId();
        $name = $aboutUs->getName();
        $description = $aboutUs->getDescription();

        $sql = "INSERT INTO AboutUs (id, name, description) VALUES (?, ?, ?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$id, $name, $description]);
        echo "<script> alert('AboutUs has been inserted successfully!'); </script>";
    }

    function getAllAboutUs() {
        $conn = $this->connection;

        $sql = "SELECT * FROM AboutUs";
        $statement = $conn->query($sql);

        $aboutUsList = $statement->fetchAll();

        return $aboutUsList;
    }

    function getAboutUsById($id) {
        $conn = $this->connection;

        $sql = "SELECT * FROM AboutUs WHERE id='$id'";

        $statement = $conn->query($sql);
        $aboutUs = $statement->fetch();

        return $aboutUs;
    }

    function updateAboutUs($id, $name, $description) {
        $conn = $this->connection;

        $sql = "UPDATE AboutUs SET name=?, description=? WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$name, $description, $id]);

        echo "<script>alert('Update was successful'); </script>";
    }

    function deleteAboutUs($id) {
        $conn = $this->connection;

        $sql = "DELETE FROM AboutUs WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);

        echo "<script>alert('Delete was successful'); </script>";
    }
}
?>
