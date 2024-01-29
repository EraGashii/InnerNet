<?php 
include_once 'database/DatabaseConnection.php';
include_once 'models/service.php';

class ServiseRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }
  

    function insertService($service){

        $conn = $this->connection;

        $id = $service->getId();
        $name = $service->getName();

        $description = $service->getDescription();


        $sql = "INSERT INTO service (id,name,description) VALUES (?,?,?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$id, $name,$description]);
        echo "<script> alert('User has been inserted successfully!'); </script>";
    }


    function getAllServices(){
        $conn = $this->connection;

        $sql = "SELECT * FROM service";
        $statement = $conn->query($sql);

        $service = $statement->fetchAll();

        return $service;
    }

    function getServicesById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM service WHERE id='$id'";

        $statement = $conn->query($sql);
        $service= $statement->fetch();

        return $service;
    
    }

    function updateServices($id,$name,$description){
         $conn = $this->connection;
      
        
         $sql = "UPDATE service SET  name=?, description=? WHERE id=?";

         $statement = $conn->prepare($sql);


         echo "<script>alert('update was successful'); </script>";
        
    } 

  
    function deleteServices($id){
        $conn = $this->connection;

        $sql = "DELETE FROM service WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
  
   } 
}
$serviceRepository = new ServiseRepository();
$services = $serviceRepository->getAllServices();
?>
<?php
$databaseConnection = new DatabaseConnection();
$conn = $databaseConnection->startConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $serviceName = $_POST['name'];
    $serviceDescription = $_POST['description'];

    $insertQuery = "INSERT INTO Service (name, description) 
                    VALUES (:name, :description)";
    
    $insertStmt = $conn->prepare($insertQuery);
    $insertStmt->bindParam(':name', $serviceName, PDO::PARAM_STR);
    $insertStmt->bindParam(':description', $serviceDescription, PDO::PARAM_STR);

    if ($insertStmt->execute()) {
        echo "Service added successfully.";
        header("Location: ../InnerNet/dashboard.php");
        exit();
    } else {
        echo "Error adding service: " . $insertStmt->errorInfo()[2];
    }

    $insertStmt->closeCursor();
}
?>