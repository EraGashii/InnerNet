<?php 
session_start();

include 'database/DatabaseConnection.php';
include 'models/user.php';

class UserRepository{
    private $connection;
    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

       public function insertUser($user){ 

        $conn = $this->connection;

        $id = $user->getId();
        $email = $user->getEmail();
        $username = $user->getUsername();
        $password = $user->getPassword();
   

        $sql = "INSERT INTO user (id,username,email,password) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$id,$username, $email, $password]);
        echo "<script> alert('User has been inserted successfully!'); </script>";
    }


    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";
        $statement = $conn->query($sql);

        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    
    }
    function updateUser($id, $username, $email, $password) {
        $conn = $this->connection;
    
        $sql = "UPDATE user SET username=?, email=?, password=? WHERE id=?";
        $statement = $conn->prepare($sql);
    
        if ($statement->execute([$username, $email, $password, $id])) {
            echo "<script>alert('Update was successful');</script>";
        } else {
            echo "<script>alert('Update failed: " . $statement->errorInfo()[2] . "');</script>";
        }
    }
    

  
    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
  
   } 

function loginUser($username, $password){
    $conn = $this->connection;

    $sql = "SELECT * FROM user WHERE username=? AND password=?";
    $statement = $conn->prepare($sql);
    $statement->execute([$username, $password]);
    $statement->setFetchMode(PDO::FETCH_ASSOC);

    return $statement->fetch();
}

}


?>