<?php 
include_once 'database/DatabaseConnection.php';
include_once 'models/psychologist.php';

class psychologistRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }
  

    function insertPsychologist($psychologist){

        $conn = $this->connection;

        $id = $psychologist->getId();
        $name = $psychologist->getName();
        $type = $psychologist->getType();
        $img = $psychologist->getImg();

        $sql = "INSERT INTO psychologist (id,name,type,img) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$id, $name,$type,$img]);
        echo "<script> alert('User has been inserted successfully!'); </script>";
    }


    function getAllPsychologist(){
        $conn = $this->connection;

        $sql = "SELECT * FROM Psychologist";
        $statement = $conn->query($sql);

        $psychologist = $statement->fetchAll();

        return $psychologist;
    }

    function getPsychologistById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM Psychologist WHERE id='$id'";

        $statement = $conn->query($sql);
        $psychologist= $statement->fetch();

        return $psychologist;
    
    }

    function updatePsychologist($id,$name,$description){
         $conn = $this->connection;
      
        
         $sql = "UPDATE psychologist SET  name=?, description=? WHERE id=?";

         $statement = $conn->prepare($sql);


         echo "<script>alert('update was successful'); </script>";
        
    } 

  
    function deletePsychologist($id){
        $conn = $this->connection;

        $sql = "DELETE FROM psychologist WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
  
   } 
}
$PsychologistRepository = new PsychologistRepository();
$psychologist = $PsychologistRepository->getAllPsychologist();

?>
<?php
$databaseConnection = new DatabaseConnection();
$conn = $databaseConnection->startConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $psychologistName = $_POST['name'];
    $psychologistDescription = $_POST['type'];
    $spsychologistDescription = $_POST['img'];

    $insertQuery = "INSERT INTO Psychologist (name, type,img) 
                    VALUES (:name, :type,:img)";
    
    $insertStmt = $conn->prepare($insertQuery);
    $insertStmt->bindParam(':name', $psychologistName, PDO::PARAM_STR);
    $insertStmt->bindParam(':type', $psychologistDescription, PDO::PARAM_STR);
    $insertStmt->bindParam(':img', $psychologistDescription, PDO::PARAM_STR);

    if ($insertStmt->execute()) {
        echo "psychologist added successfully.";
        header("Location: ../InnerNet/dashboard.php");
        exit();
    } else {
        echo "Error adding service: " . $insertStmt->errorInfo()[2];
    }

    $insertStmt->closeCursor();
}
?>