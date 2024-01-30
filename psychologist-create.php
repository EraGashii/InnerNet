<?php
session_start();
include 'Psychologistdb.php';


ini_set('display_errors', 1);
error_reporting(E_ALL);
// include './repository/psychologistRepository.php';
// include 'include/dashboardHeader.php';

// ini_set('display_errors', 1);
// error_reporting(E_ALL);

// // Create a database connection
// $dbConnection = new DatabaseConnection();
// $connection = $dbConnection->startConnection();

// // Check if the connection is successful
// if (!$connection) {
//     echo "Error: Unable to establish a database connection.";
//     exit;
// } else {
//     echo "Connected to the database";
// }

// ini_set('display_errors', 1);
// error_reporting(E_ALL);

// // Check if the form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST['name'];
//     $type = $_POST['type'];

//     // Handle image upload
//     $targetDir = "image/"; // Change this to the directory where you want to store images
//     $imageName = basename($_FILES["image"]["name"]);
//     $targetFilePath = $targetDir . $imageName;

//     // Check if file already exists
//     if (file_exists($targetFilePath)) {
//         echo "Error: File already exists.";
//     } elseif ($_FILES["image"]["size"] > 5000000) { // Check file size
//         echo "Error: File is too large.";
//     } else {
//         $allowedExtensions = array("jpg", "jpeg", "png", "gif");
//         $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

//         if (!in_array($imageFileType, $allowedExtensions)) {
//             echo "Error: Only JPG, JPEG, PNG & GIF files are allowed.";
//         } else {
//             // Attempt to move the uploaded file
//             if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
//                 // Use prepared statement to insert data into the database
//                 $insertQuery = "INSERT INTO Psychologist (name, type, img) VALUES (:name, :type, :img)";
//                 $stmt = $connection->prepare($insertQuery);
//                 $stmt->bindParam(':name', $name);
//                 $stmt->bindParam(':type', $type);
//                 $stmt->bindParam(':img', $targetFilePath);

//                 var_dump($stmt->errorInfo()); // Move this line here

//                 if ($stmt->execute()) {
//                     echo "Psychologist added successfully.";
//                     // header("Location: Features.php");
//                     header("Location: dashboard.php");
//                     exit();
//                 } else {
//                     echo "Error: Unable to add psychologist to the database.";
//                     var_dump($stmt->errorInfo());
//                 }
//             } else {
//                 echo "Error: Unable to move the uploaded file to the target directory.";
//             }
//         }
//     }
// }

// // Close the database connection
// $connection = null;

?>

<section class="add-psychologist" id="add-psychologist">
    <div class="heading">
        <h1>Add New Psychologist</h1>
        <p>Fill in the details below to add a new psychologist.</p>
    </div>
    <form method="post" action="Psychologistdb.php" enctype="multipart/form-data">

        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="type">Type:</label>
        <input type="text" name="type" required>

        <label for="image">Image:</label>
        <input type="file" name="image" accept="image/" required>

        <button type="submit">Add Psychologist</button>
    </form>
</section>

<style>
    /*ngjyrat primare qe kan me u perdor ne ndertimin e faqes 
#FAF1E4
#CEDEBD 
9EB384
435334
*/
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .add-psychologist {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .heading {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px;
            background-color: #435334;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #859675;
        }
    </style>