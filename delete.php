<?php

session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once 'database/DatabaseConnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $userId = $_GET['id'];

    $databaseConnection = new DatabaseConnection();
    $conn = $databaseConnection->startConnection();

    // Use a try-catch block to handle potential exceptions
    try {
        // Add 'role' to the DELETE query if 'role' is a column in your 'users' table
        $deleteQuery = "DELETE FROM user WHERE id = :id";
        $deleteStmt = $conn->prepare($deleteQuery);
        
        // Assuming 'role' is a string, adjust the data type accordingly
        $deleteStmt->bindParam(':id', $userId, PDO::PARAM_INT);
        
        if ($deleteStmt->execute()) {
            $_SESSION['message'] = "User deleted successfully.";
        } else {
            $_SESSION['error'] = "Error deleting user: " . $deleteStmt->errorInfo()[2];
        }

        // Redirect only if the deletion was successful
        header("Location: index.php");
        exit();
    } catch (PDOException $e) {
        // Handle any exceptions that might occur during the deletion process
        $_SESSION['error'] = "Error deleting user: " . $e->getMessage();
        header("Location: index.php");
        exit();
    }
} else {
    // Handle invalid request (e.g., someone trying to access the page directly)
    header("Location: index.php");
    exit();
}
?>




