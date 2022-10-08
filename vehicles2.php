<?php
    include("vehicles.php");
    
    //bike
    class Bike extends Vehicle{
        protected $wheel_count=0;
        // function getName(){}
            
        function setWheel($wheel_count){
            $this->wheel = $wheel_count;
        }

        function getWheel(){
            echo ", I have ".$this->wheel." Wheel(s)";
        }
    }
    // echo "<br>";

    //car
    class Car extends Vehicle{
        protected $wheel_count=0;
        protected $engine_type;
        // function getName(){}
            
        function setWheel($wheel_count){
            $this->wheel = $wheel_count;
        }

        function getWheel(){
            echo ", I have ".$this->wheel." Wheel(s)";
        }
        
        function setType($engine_type){
            $this->type = $engine_type;
        }

        function getType(){
            echo ", My Engine Type = ".$this->type;
        }
    }


    //buses
    class Buses extends Vehicle{
        protected $wheel_count=0;
        protected $private_bus;
        // function getName(){}
            
        function setWheel($wheel_count){
            $this->wheel = $wheel_count;
        }

        function getWheel(){
            echo ", I have ".$this->wheel." Wheel(s)";
        }
        
        function setPrivate($private_bus){
            $this->private = $private_bus;
        }

        function getPrivate(){
            if ($this->private == TRUE) {
                echo " [Private engine] ";
            } else {
                echo " [Public Bus] ";
            }
            
        }
    }
    
    
?>