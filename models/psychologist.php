<?php

class Psychologist{
    private $id;
    private $name;
    private $type;

    private $img;
   

    function __construct($id, $name,$type,$img) {

        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->img = $img;
    
    }

    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getType(){
        return $this->type;
    }

    function getImg(){
        return $this->img;
    }
   

}

?>

<?php

