<?php
// Database connection parameters
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "InsideOut";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // SQL query to select psychologists from the database
// $sql = "SELECT id, name, type, img FROM Psychologist";
// $result = $conn->query($sql);

// // Check if there are results
// if ($result->num_rows > 0) {
//     // Output data of each row
//     while ($row = $result->fetch_assoc()) {
//         // HTML structure for each psychologist
//         echo '<div class="box">
//                 <img src="' . htmlspecialchars($row["img"]) . '" alt="">
//                 <span><b>' . htmlspecialchars($row["name"]) . '</b></span><br>
//                 <span>' . htmlspecialchars($row["type"]) . '</span>
//               </div>';
//     }
// } else {
//     echo "0 results";
// }

// // Close the database connection
// $conn->close();
?>

