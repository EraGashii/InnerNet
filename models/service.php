<?php

class Service{
    private $id;
    private $name;
    private $description;
   

    function __construct($id, $name,$description) {

        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    
    }

    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getDescriptionl(){
        return $this->description;
    }
   

}

?>

<?php






