<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include './repository/psychologistRepository.php';
include 'include/dashboardHeader.php';



// Create a database connection
$dbConnection = new DatabaseConnection();
$connection = $dbConnection->startConnection();

// Check if the connection is successful
if (!$connection) {
    echo "Error: Unable to establish a database connection.";
    exit;
} else {
    echo "Connected to the database";
}


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $type = $_POST['type'];

    // Handle image upload
    $targetDir = "image/"; // Change this to the directory where you want to store images
    $imageName = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . $imageName;

    // Check if file already exists
    if (file_exists($targetFilePath)) {
        echo "Error: File already exists.";
    } elseif ($_FILES["image"]["size"] > 5000000) { // Check file size
        echo "Error: File is too large.";
    } else {
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");
        $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

        if (!in_array($imageFileType, $allowedExtensions)) {
            echo "Error: Only JPG, JPEG, PNG & GIF files are allowed.";
                    
        } else {
            // Attempt to move the uploaded file
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                // Use prepared statement to insert data into the database
                $insertQuery = "INSERT INTO Psychologist (name, type, img) VALUES (:name, :type, :img)";
                $stmt = $connection->prepare($insertQuery);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':type', $type);
                $stmt->bindParam(':img', $targetFilePath);

                var_dump($stmt->errorInfo()); // Move this line here

                if ($stmt->execute()) {
                    echo "Psychologist added successfully.";
                    // header("Location: Features.php");
                    header("Location: dashboard.php");
                    exit();
                } else {
                    echo "Error: Unable to add psychologist to the database.";
                    var_dump($stmt->errorInfo());
                }
            } else {
                echo "Error: Unable to move the uploaded file to the target directory.";
            }
        }
    }
}

// Close the database connection
$connection = null;

?>