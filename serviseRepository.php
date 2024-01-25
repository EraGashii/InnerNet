<!-- //duhesh me e nreq -->


<!-- mosss e kqyrrr ktooooooo eraaaaa -->





<?php 
// include_once '../database/DatabaseConnection.php';

// class UserRepository{
//     private $connection;

//     function __construct(){
//         $conn = new DatabaseConenction;
//         $this->connection = $conn->startConnection();
//     }


//     function insertUser($username,$email,$password){

//         $conn = $this->connection;

//         // $id = $user->getId();
//         // $email = $user->getEmail();
//         // $username = $user->getUsername();
//         // $password = $user->getPassword();

//         $sql = "INSERT INTO user (username,email,password) VALUES (?,?,?)";

//         $statement = $conn->prepare($sql);

//         $statement->execute([$username,$email,$password]);

//         echo "<script> alert('User has been inserted successfuly!'); </script>";

//     }

//     function getAllUsers(){
//         $conn = $this->connection;

//         $sql = "SELECT * FROM user";

//         $statement = $conn->query($sql);
//         $users = $statement->fetchAll();

//         return $users;
//     }

//     function getUserById($id){
//         $conn = $this->connection;

//         $sql = "SELECT * FROM user WHERE id='$id'";

//         $statement = $conn->query($sql);
//         $user = $statement->fetch();

//         return $user;
//     }

//     function updateUser($id,$username,$email,$password){
//          $conn = $this->connection;

//          $sql = "UPDATE user SET  username=?, email=?, password=? WHERE id=?";

//          $statement = $conn->prepare($sql);

//          $statement->execute([$id,$username,$email,$password]);

//          echo "<script>alert('update was successful'); </script>";
//     } 

//     function deleteUser($id){
//         $conn = $this->connection;

//         $sql = "DELETE FROM user WHERE id=?";

//         $statement = $conn->prepare($sql);

//         $statement->execute([$id]);

//         echo "<script>alert('delete was successful'); </script>";
//    } 
// }


//  $userRepo->updateUser('1111','SSS','SSS','SSS','SSS','SSS');

?>