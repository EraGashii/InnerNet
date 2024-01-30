<?php
include 'include/dashboardHeader.php';
include_once 'database/DatabaseConnection.php';
include './repository/userRepository.php';

$databaseConnection = new DatabaseConnection();
$conn = $databaseConnection->startConnection();

$userRepository = new UserRepository();
$users = $userRepository->getAllUsers();

$getClientQuery = "SELECT id, username, email, password, role FROM user WHERE role = 'client'";
$getClientStmt = $conn->query($getClientQuery);

// Check for errors
if (!$getClientStmt) {
    echo "Error: " . $conn->error;
    exit();
}

$clients = $getClientStmt->fetchAll(PDO::FETCH_ASSOC);

?>

<section class="main">
    <div class="admin-container">

<main class="admin-content">
  
<h2>User Table</h2>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clients as $client): ?>
            <tr>
                <td><?php echo $client['id']; ?></td>
                <td><?php echo $client['username']; ?></td>
                <td><?php echo $client['email']; ?></td>
                <td><?php echo $client['password']; ?></td>
                <td><?php echo $client['role']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $client['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $client['id']; ?>" onclick="return confirm('Are you sure you want to delete this client?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</main>

</div>
    </section>
  </div>
</span>

</body>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        td a {
            text-decoration: none;
            padding: 5px 10px;
            margin-right: 5px;
            border: 1px solid #333;
            background-color: #333;
            color: #fff;
            border-radius: 3px;
        }

        td a:hover {
            background-color: #555;
        }

        td a.delete {
            background-color: #ff3333;
            border: 1px solid #ff3333;
        }

        td a.delete:hover {
            background-color: #ff5555;
        }
    </style>
</html>
