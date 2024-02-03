<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'include/dashboardHeader.php';
include_once 'database/DatabaseConnection.php';
include 'contact-form.php';

$databaseConnection = new DatabaseConnection();
$conn = $databaseConnection->startConnection();



// Retrieve contact messages
$getMessageQuery = "SELECT id, name, email, phone, message FROM contact_messages";
$getMessageStmt = $conn->query($getMessageQuery);

// Check for errors
if (!$getMessageStmt) {
    echo "Error: " . $conn->error;
    exit();
}

$messages = $getMessageStmt->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="main">
    <div class="admin-container">
        <main class="admin-content">
            <h2>Contact Messages</h2>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($messages as $message): ?>
                        <tr>
                            <td><?php echo $message['id']; ?></td>
                            <td><?php echo $message['name']; ?></td>
                            <td><?php echo $message['email']; ?></td>
                            <td><?php echo $message['phone']; ?></td>
                            <td><?php echo $message['message']; ?></td>
                  
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </main>
    </div>
</section>

<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }

  .main {
    padding: 20px;
  }

  .admin-container {
    max-width: 1200px;
    margin: 0 auto;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    border-radius: 5px;
    overflow: hidden;
  }

  .admin-content {
    margin-top: 20px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  th, td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }

  a {
    text-decoration: none;
    color: #3498db;
    margin-right: 10px;
  }

  a:hover {
    text-decoration: underline;
  }

  .btn {
    background-color: #3498db;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .btn:hover {
    background-color: #2980b9;
  }
</style>
