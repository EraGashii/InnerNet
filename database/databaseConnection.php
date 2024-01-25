<?php

 class DatabaseConnection{
     private $server="localhost";
     private $username="root";
     private $password="";
    private $database = "InsideOut";


     function startConnection(){

         try{
           $conn = new PDO("mysql:host=$this->server;dbname=$this->database",$this->username,$this->password);
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             if(!$conn){
              //echo "Connection failed "; per testim
              return null;
          }else{
              //echo "Connection successful!"; per testim
              return $conn;
          }
       
        }catch(PDOException $e){
             echo "Database Conenction Failed".$e->getMessage();
           return null;
      }
  }
 }

 
?>